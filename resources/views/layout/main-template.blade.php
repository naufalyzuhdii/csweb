<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;700&family=PT+Serif:wght@400;700&family=Roboto:wght@300;500&display=swap"
        rel="stylesheet">
    <link href="{{ asset('css/general.css') }}" rel="stylesheet">
    @if (Auth::check())
    @if (Auth::user()->role=='learner' )
    <link rel="stylesheet" href="{{ asset('css/navigation/learner-template.css') }}">
    @elseif (Auth::user()->role=='talent')
    <link rel="stylesheet" href="{{ asset('css/navigation/talent-template.css') }}">
    @elseif (Auth::user()->role=='admin')
    <link rel="stylesheet" href="{{ asset('css/navigation/admin-template.css') }}">
    @endif
    @else
    <link rel="stylesheet" href="{{ asset('css/navigation/guest-template.css') }}">
    @endif
    @yield('linkCSS')
    <title>CS</title>
</head>

<body>
    @if (Auth::check())
    @if (Auth::user()->role=='learner') @include('navigation.learner-template')
    @elseif (Auth::user()->role=='talent') @include('navigation.talent-template')
    @elseif (Auth::user()->role=='admin') @include('navigation.admin-template')
    @endif
    @else @include('navigation.guest-template')
    @endif
    @yield('content')
    <section class="footer">
        <div class="footer-wrapper">
            <a href="#" class="logo-footer">
                <img src="/images/header/logo-white.png" alt="">
            </a>
            <ul class="content">
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Help and Support</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>

            <div class="copyright">
                <p>&copy; 2022 Course Service &#x2022; All Rights Reserved</p>
            </div>
        </div>
    </section>
</body>

</html>