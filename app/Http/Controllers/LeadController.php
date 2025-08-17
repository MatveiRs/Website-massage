<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;use Illuminate\Support\Facades\Mail;use Illuminate\Support\Facades\Http;use App\Mail\LeadMail;
class LeadController extends Controller{
  public function store(Request $r){
    $d=$r->validate(['name'=>'required|string|max:120','contact':'required|string|max:180','note'=>'nullable|string|max:1000']);
    try{ if(config('mail.default')) Mail::to(config('mail.from.address'))->send(new LeadMail($d)); }catch(\Throwable $e){}
    $t=env('TELEGRAM_BOT_TOKEN'); $c=env('TELEGRAM_CHAT_ID');
    if($t && $c){ $text="🕯 *Новая заявка MIO*\n• Имя: {$d['name']}\n• Контакт: {$d['contact']}\n• Комментарий: ".($d['note']??'—');
      try{ Http::asForm()->post("https://api.telegram.org/bot{$t}/sendMessage",['chat_id'=>$c,'text'=>$text,'parse_mode'=>'Markdown']); }catch(\Throwable $e){}}
    return back()->with('ok','Спасибо! Мы свяжемся с вами для подтверждения времени.');
  }
}