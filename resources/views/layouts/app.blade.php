<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <link rel="stylesheet" href="/example-app/resources/css/app.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>@yield('title-block')</title>
    </head>

    <body>
        @include('inc.header')

        @if(Request::is('/'))
        @include('inc.hero')
        @endif

        <div class="conteiner">
            <div class="row">
                <div class="col-8">
                    @yield('content')
                </div>
                <div class=" col-4 p-3">
                    @include('inc.aside')
                </div>
            </div>
        </div>

        @include('inc.footer')
    </body>

</html>