<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello-city</title>       
      
    </head>
    <body>
            <h1>Hello From Quebec !</h1>

            <p>It's currenty {{ date('h:i A')}}.</p>

            <footer>
                <p>&copy; Copiryght {{ date('Y')}} &middot; <a href="/about-us">About us</a></p>
            </footer>
    </body>
</html>
