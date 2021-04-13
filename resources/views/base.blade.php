<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('base.name'))</title>       
      
    </head>
    <body>
            @yield('content')
            <footer>
                
                <p>&copy; Copiryght {{ date('Y')}} 
                
                    @if(!Route::is('about'))
                    &middot; <a href="{{ route('about')}}">About us</a>
                    @endif
                </p>
            </footer>
    </body>
</html>
