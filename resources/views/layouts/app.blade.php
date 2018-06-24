<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}" >
        <link rel="stylesheet" href="{{asset('css/normalize.css')}}" >
        <link rel="shortcut icon" href="{{{ asset('imgs/favicon.png') }}}">
        <title>{{config('app.name', 'Nice')}}: @yield('customized')</title>


    </head>
    <body>
        @include('inc.navbar')
        @yield('main-nav')
        <div class="container">
            @yield('content')
        </div>
        <div id="images">
            @yield('image')
            <p class="text-center"><span id="end-line"></span></p>
        </div>
        <div class="text-center">
            @yield('clients')
        </div>
        <div class="text-center">
                @yield('blogs')
        </div>
        <div id="drupal">
            @yield('contact')
        </div>
        <div id="footer" class="container">
            <div class="row">
                <div class="col-md-6 class="text-left"">
                    <span>Copyright &copy; 2018</span>
                </div>
                <div class="col-md-6 text-right">
                    <span class="text">Terms and coditions</span>
                </div>
            </div>
        </div>
    </body>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/main.js')}}" type="text/javascript"></script>
</html>
