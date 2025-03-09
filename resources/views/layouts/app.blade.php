
<html>
    <head>
        <title>{{ config('app.name') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header>
            <div class = 'container'>
                <h1 class = 'title'>
                    {{ config('app.name') }}
                </h1>
            </div>
        </header>
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
        <footer>
        </footer>
    </body>
</html>
