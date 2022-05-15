<head>
    {{-- <title>@yield('pageTitle') - Ostin</title> --}}
    <title>@yield('pageTitle',config('meta.home.title'))</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="description" content="@yield('pageDescription',config('meta.home.description'))"/>
    <meta name="keywords" content="@yield('pageKeywords',config('meta.home.keywords'))"/>

    <!-- Google / Search Engine Tags -->
    <meta itemprop="title" content="@yield('pageTitle',config('meta.home.title'))">
    <meta itemprop="description" content="@yield('pageDescription',config('meta.home.description'))">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('pageTitle',config('meta.home.title'))">
    <meta property="og:description" content="@yield('pageDescription',config('meta.home.description'))">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:title" content="@yield('pageTitle',config('meta.home.title'))">
    <meta name="twitter:description" content="@yield('pageDescription',config('meta.home.description'))">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel='canonical' href='{{url()->current()}}'/>
    {{-- <link rel="manifest" href="manifest.json"/> --}}

    @include('includes.partials.favicon')
    {{-- @include('includes.partials.meta') --}}

    @yield('plugins-style')
    
    <!-- Slick CSS -->
    {{-- <link rel="stylesheet" href="{{ mix('/css/slick.css') }}"> --}}

    <!-- Custom + Bootstrap CSS -->
    <link rel="stylesheet" href="{{ mix('/css/custom.css') }}">
    
    @yield('page-style')
</head>
