<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Sweet Home - Apartments & Real Estate Group </title>
    <meta name="description" content="Home Sweet Home - Apartments & Real Estate Group">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php
        $page_name
     @endphp


    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('main/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/fontawesome-all.min.css')}}">
    <!-- Font Awesome 6.5 for additional icons (Threads, etc.) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('main/css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/responsive.css')}}">
    <!-- Microsoft Clarity -->
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "k5txr9bryx");
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QB6RCL64KD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-QB6RCL64KD');
    </script>
    @yield('assets')

</head>
<body>
@yield('content')

<!-- WhatsApp Chat Button -->
@include('partials.whatsapp-chat')

<!-- JS here -->
{{--@include('partials.sub-page-scripts')--}}
</body>
</html>
