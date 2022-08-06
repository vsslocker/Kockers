<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    @vite('resources/css/app.css')
    <title>Kockers</title>
</head>
<body>
    <div class="w-[80%] mx-auto h-[100vh]">
        @yield('content')
    </div>
</body>
</html>