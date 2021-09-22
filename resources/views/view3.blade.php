<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prelim Project</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    </head>
    <body class="">

        <div class="container mt-5 d-flex justify-content-center align-items-center">
            <p class="mt-3 h5">Itegrative Programming & Technology</p>
        </div>

        <div>
            <nav  class="d-flex aligns-items-center justify-content-center" style="height:200px">
                <ul class="d-flex list-unstyled ">
                    <li><a class="nav-link mt-5" href="{{url('/view2')}}">prev</a></li>
                    <li><a class="nav-link mt-5 h5" href="{{url('/view3')}}">View 3</a></li>
                    <li><a class="nav-link mt-5" href="{{url('/')}}">next</a></li>
                </ul>
            </nav>
        </div>

        <div class="container d-flex aligns-items-center justify-content-center" style="height:200px">
            <p class="h2">3</p>
        </div>

        <link rel="stylesheet" href="{{asset('js/bootstrap.min.js')}}">
    </body>
</html>
