<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
         @livewireStyles
    </head>
    <body>
        <main role="main" class="flex flex-col justify-center items-center">
            <div class="flex justify-center">
                <div class="content">
                    <div class="mt-20 text-3xl font-bold text-gray-900 dark:text-white text-center">
                    Laravel Livewire
                    </div>
                    @livewire('light')
                </div>
            </div>
            @livewireScripts
        </main>
    </body>
</html>
