@extends('layouts.app')
@section('title','Прайс — MIO')
@section('content')
<section class="section"><div class="container">
<h1>Прайс</h1>
<div class="filters">
  <select id="filter-category" class="select">
    <option value="">Все категории</option><option value="classic">Классический</option><option value="deep">Глубокий</option><option value="relax">Расслабляющий</option><option value="recovery">Восстановительный</option>
  </select>
  <select id="filter-duration" class="select">
    <option value="">Любая длительность</option><option value="45">45 мин</option><option value="60">60 мин</option><option value="90">90 мин</option>
  </select>
  <input id="filter-search" class="search" placeholder="Поиск...">
</div>
<table class="table"><thead><tr><th>Услуга</th><th>Длительность</th><th>Цена</th></tr></thead><tbody>
<tr data-price-row data-cat="classic" data-dur="60"><td>Классический массаж</td><td>60 мин</td><td>8 000 ₸</td></tr>
<tr data-price-row data-cat="deep" data-dur="45"><td>Глубокий массаж спины</td><td>45 мин</td><td>7 000 ₸</td></tr>
<tr data-price-row data-cat="relax" data-dur="90"><td>Расслабляющий массаж</td><td>90 мин</td><td>12 000 ₸</td></tr>
<tr data-price-row data-cat="recovery" data-dur="60"><td>Восстановительный спортивный</td><td>60 мин</td><td>10 000 ₸</td></tr>
<tr data-price-row data-cat="classic" data-dur="45"><td>Классический (спина/шея)</td><td>45 мин</td><td>6 000 ₸</td></tr>
</tbody></table>
<p class="small">* Выезд по городу включён. Итог зависит от длительности и запроса.</p>
</div></section>
@endsection