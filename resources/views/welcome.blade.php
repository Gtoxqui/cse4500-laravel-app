<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
         @extends('adminlte::page')

            @section('title', 'Dashboard')

            @section('content_header')
                <h1>Dashboard</h1>
            @stop

            @section('content')
                <p>Welcome to this beautiful admin panel.</p>
            @stop

            @section('css')
                <link rel="stylesheet" href="/css/admin_custom.css">
            @stop

            @section('js')
                <script> console.log('Hi!'); </script>
            @stop
        </div>
    </body>
</html>
