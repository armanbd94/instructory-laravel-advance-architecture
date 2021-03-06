<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Frontend</title>

       {{-- Laravel Mix - CSS File --}}
       <link rel="stylesheet" href="{{ mix('css/frontend.css') }}">

    </head>
    <body>
        <div class="caontainer-fluid bg-red" style="height: 100px;"></div>
        @yield('content')

        {{-- Laravel Mix - JS File --}}
        <script src="{{ mix('js/frontend.js') }}"></script>
    </body>
</html>

