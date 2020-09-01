<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="موقع تحميل كتب pdf يضم الكثير من الكتب الإلكترونية pdf بالعربية والإنكليزية لمراجع تقنية مميزة.">
    <link href="{{asset('assets/images/favicon/favicon.png')}}" rel="icon">
    <title>PDFiles.Net | الموقع العربي الأول لتحميل الكتب التقنية</title>
    <style itemscope itemtype="https://schema.org/Thing" itemref="i1a i1b"></style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo&display=swap">
    <link rel="stylesheet" href="{{asset('assets/css/libraries.css')}}">
    <!--<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <meta property="og:title" content="PDFiles.Net | الموقع العربي الأول لتحميل الكتب التقنية" />
<meta property="og:url" content="https://www.pdfiles.net" />
<meta property="og:image" content="{{asset('assets/images/favicon/ogimage.png')}}" />
<meta property="og:description" content=" pdf يضم الكثير من الكتب الإلكترونية pdf بالعربية والإنكليزية لمراجع تقنية مميزة">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="PDFiles.Net | الموقع العربي الأول لتحميل الكتب التقنية">
<meta name="twitter:image" content="{{asset('assets/images/favicon/favicon.png')}}">
<meta name="twitter:type" content="website">
<meta name="twitter:site" content="@mutaz_hakmi">
<meta name="twitter:description" content="موقع تحميل كتب pdf يضم الكثير من الكتب الإلكترونية pdf بالعربية والإنكليزية لمراجع تقنية مميزة">
    <script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Books",
  "name" : "PDFiles.Net | الموقع العربي الأول لتحميل الكتب التقنية ",
 "url" : "https://www.pdfiles.net",
 "sameAs" : [
   "https://twitter.com/mutaz_hakmi",
   "https://www.facebook.com/mutaz.programs"
   ]
}
</script>
</head>

<body>
@include('website.static.loader')
<div class="wrapper">
    <!-- =========================
        Header
    =========================== -->
    <header id="header" class="header header-white header-layout3">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('assets/images/logo/32.png')}}" class="logo-dark" alt="logo">
                </a>
                <button class="navbar-toggler" type="button">
                    <span class="menu-lines"><span></span></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNavigation">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav__item">
                          <a href="/"  class="dropdown-toggle nav__item-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item with-dropdown ">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link {{ Request::is('Cater*') ? 'active' : '' }}">Categories</a>
                            <ul class="dropdown-menu">
                                @foreach( \App\Models\Cater::all()  as $cater)
                                <li class="nav__item">
                                    <a href="/Cater/{{$cater->title_link }}" class="nav__item-link">{{ $cater->title }}</a>
                                </li>
                                 @endforeach
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        
                       <li class="nav__item">
                            <a href="/privacy-policy"  class="dropdown-toggle nav__item-link {{ Request::is('privacy-policy') ? 'active' : '' }}">Privacy Policy</a>
                        </li><!-- /.nav-item -->
                        
                        <li class="nav__item">
                            <a href="/contact-us"  class="dropdown-toggle nav__item-link {{ Request::is('contact-us') ? 'active' : '' }}">Contact us</a>
                        </li><!-- /.nav-item -->
                        
                        <li class="nav__item">
                            <a href="/report"  class="dropdown-toggle nav__item-link {{ Request::is('report') ? 'active' : '' }}">Report </a>
                        </li><!-- /.nav-item -->
                        
                        <li class="nav__item">
                            <a href="/suggest"  class="dropdown-toggle nav__item-link {{ Request::is('suggest') ? 'active' : '' }}">Suggest Book</a>
                        </li><!-- /.nav-item -->
                        
                        <li class="nav__item">
                            <a href="#" class="navbar__action-btn search-popup-trigger" style="line-height: 40px;">
                                <i class="fa fa-search"></i></a>
                        </li><!-- /.nav-item -->
                    </ul><!-- /.navbar-nav -->
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navabr -->
    </header><!-- /.Header -->
