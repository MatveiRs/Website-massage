@extends('layouts.app')
@section('title','MIO — массаж на выезд в Павлодаре')
@section('content')
<section class="hero"><div class="inner container"><p class="btn">ПОЧЕМУ ИМЕННО МЫ</p><h1>Массаж приезжает сам</h1><p class="lead">Без очередей. Без нервов. Без пробок.</p><div style="margin-top:22px"><a href="#booking" class="btn">Записаться</a></div></div></section>
<section class="section"><div class="container grid">
<div class="col-6"><div class="card"><h2>Комфорт у вас дома</h2><ul class="bullets"><li>без стресса</li><li>без поиска салонов</li><li>без потери времени</li><li>без очередей и суеты</li></ul></div></div>
<div class="col-6"><div class="card"><h2>Не шаблон-подход</h2><ul class="bullets"><li>снимаем напряжение</li><li>улучшаем сон</li><li>запускаем ресурсы организма</li></ul></div></div>
</div></section>
<section id="booking" class="section"><div class="container grid">
@if(session('ok'))<div class="col-12"><div class="alert" data-autoclose>{{ session('ok') }}</div></div>@endif
<div class="col-6"><h2>Запись</h2><p class="small">Оставьте контакты — мы напишем в Direct/WhatsApp.</p>
<form id="lead-form" class="form" method="post" action="{{ route('lead.store') }}">@csrf
<label>Имя <input class="input" name="name" required></label>
<label>Instagram/WhatsApp <input class="input" name="contact" required></label>
<label>Комментарий <textarea class="textarea" name="note"></textarea></label>
<button class="btn" type="submit">Отправить</button></form></div>
<div class="col-6"><div class="card"><h2>Что привозим с собой</h2><ul class="bullets"><li>кушетка</li><li>масла</li><li>одноразовые принадлежности</li><li>музыка — создаём атмосферу</li></ul></div></div>
</div></section>
<section class="section"><div class="container grid">
<div class="col-6"><div class="card"><h2>Прайс</h2><div class="price">
<div class="row"><span>Классический (60 мин)</span><strong>8 000 ₸</strong></div>
<div class="row"><span>Глубокий спины (45 мин)</span><strong>7 000 ₸</strong></div>
<div class="row"><span>Расслабляющий (90 мин)</span><strong>12 000 ₸</strong></div>
</div></div></div>
<div class="col-6"><div class="card"><h2>Отзывы</h2><p>“После сеанса спина отпустила, уснула как ребёнок.” — А., Павлодар</p><p>“Дома — как в спа. Рекомендую.” — Д., Павлодар</p></div></div>
</div></section>
@endsection