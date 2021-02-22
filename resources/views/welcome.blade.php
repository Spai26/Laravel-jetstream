<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <title>Digital</title>
        
    </head>
    <body class="antialiased">
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <header class="flex justify-between h-16">
                <div>
                    logo
                </div>
                <div>
                
                </div>
                <div>
                   <a href="{{ route('login') }}">Ingresar</a>
                   <a href="{{ route('register') }}">Registrar</a>
                </div>
            </header>
            <div>
                
                <livewire:colegios />
            </div>
        </main>
       
    </body>
</html>
