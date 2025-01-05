<!DOCTYPE html>
<html lang="en" theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Siaduk</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar></x-navbar>
    <x-sidebar></x-sidebar>


    <main>
        {{  $slot }}
    </main>


</body>
</html>
