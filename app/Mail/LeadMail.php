<?php
namespace App\Mail; use Illuminate\Bus\Queueable; use Illuminate\Mail\Mailable; use Illuminate\Queue\SerializesModels;
class LeadMail extends Mailable { use Queueable, SerializesModels; public array $data;
  public function __construct(array $data){ $this->data=$data; }
  public function build(){ return $this->subject('Новая заявка MIO')->view('emails.lead'); }
}