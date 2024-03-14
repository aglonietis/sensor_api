<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <title>Sensor API test project</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col h-screen">
    <div class="bg-gray-200">
        <div class="container mx-auto p-4">
            <header class="row">
                @include('includes.header')
            </header>
        </div>
    </div>

    <div id="main" class="flex-grow py-4">
        <div class="container mx-auto p-4">
            @yield('content')
        </div>
    </div>

    <div id="main" class=" flex-grow py-8 px-4 bg-gray-50">
    </div>
    <div class="bg-gray-200">
        <div class="container mx-auto p-4">
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </div>
</body>
</html>
