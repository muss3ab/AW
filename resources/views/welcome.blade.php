<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Arab Workers </title>
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <style>
            html {
                height: 100%;
            }

            body {
                min-height: 100%;
                display: flex;
                flex-direction: column;
            }

            .content {
                flex: 1;
            }
            footer {
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                background: #333;
                color: #fff;
                padding: 10px;
                text-align: center;
            }
        </style>
    </head>
    <body>

     @extends('layouts.main')
    @section('content')
    <h3>Hello world</h3>
    @endsection

    </body>
</html>
