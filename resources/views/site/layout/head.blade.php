<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="Bredi - http://www.bredi.com.br">

<title>@yield('title')</title>

{{-- SEO --}}
@component('site.layout.seo')
@endcomponent


{{-- Site theme (PWA) --}}
<meta name="msapplication-navbutton-color" content="#FFFFFF" />
<meta name="apple-mobile-web-app-capable" content="yes">

<meta name="apple-mobile-web-app-status-bar-style" content="#FFFFFF">
<meta name="theme-color" content="#FFFFFF">

{{-- Favicon --}}
{{-- Use a ferramenta https://favicon.io/ para gerar os ícones do site. --}}


{{-- CDN's CSS --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


{{-- NPM's CSS --}}
<link href="{{ asset('/css/bundle.css') }}" rel="stylesheet" />


{{-- Custom CSS  --}}
<link href="{{ asset('/css/main.css') }}" rel="stylesheet" />



{{-- page styles  --}}
@yield('styles')
