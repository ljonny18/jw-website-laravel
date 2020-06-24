<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Jon Williams | Full Stack Web Developer</title>
        <meta name="author" content="Jon Williams">
        <meta name="description" content="Jon Williams Full Stack Web Developer">
        <meta name="keywords" content="web,developer,web developer,full stack,freelance,freelancer,tuebingen,tübingen,germany,uk,ruby,rails,ruby on rails,ror,html,css,jquery">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta property="og:title" content="Jon Williams | Web Developer">
        <meta property="og:type" content="website">
        <meta property="og:description" content="Jon Williams Full Stack Web Developer">

        <link rel="stylesheet" href="{{asset('css/app.css')}}" >
        <link rel="stylesheet" href="{{asset('css/fullpage.min.css')}}" >
        <link rel="stylesheet" href="{{asset('css/custom.css')}}" >

        {{-- <link rel="stylesheet" type="text/css" href="assets/fonts/fontawesome-web/css/all.min.css" /> --}}
    </head>
    <body data-lang="en">

        @include('partials.color_bar')
        @yield('content')

    </body>
</html>
