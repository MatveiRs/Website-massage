<!doctype html><html lang="ru"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>@yield('title','MIO — массаж на выезд')</title>
<meta name="description" content="@yield('description','Массаж у вас дома — Павлодар.')">
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/styles.css"><link rel="icon" href="/assets/img/logo.svg"></head><body>
<header class="header"><div class="container nav">
  <a class="brand" href="{{ route('home') }}"><img src="/assets/img/logo.svg"><span>MIO</span></a>
  <nav style="display:flex;gap:10px">
    <a href="{{ route('prices') }}" class="btn">Прайс</a>
    <a href="{{ route('policy') }}" class="btn">Политика</a>
    <a href="{{ route('home') }}#booking" class="btn">Записаться</a>
  </nav>
</div></header>
<main>@yield('content')</main>
<footer><div class="container"><div class="grid"><div class="col-6 small">© @php echo date('Y'); @endphp MIO — Павлодар.</div><div class="col-6" style="text-align:right"><a href="https://instagram.com/massage._pvl" class="btn">INSTAGRAM</a></div></div></div></footer>
<script src="/assets/js/main.js"></script></body></html>
<link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
<script src="{{ asset('assets/js/main.js') }}" defer></script>
<link rel="icon" href="{{ asset('assets/img/logo.svg') }}">


