<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Tailwind</title>
</head>

<body>
    <div class="container">
        {{-- <div class="grid grid-cols-4 grid-row-2 gap-4">
            <div class="bg-blue-100">a</div>
            <div class="bg-blue-200">b</div>
            <div class="bg-blue-400 col-span-2 row-span-2">c</div>
            <div class="bg-blue-500">d</div>
            <div class="bg-blue-600">e</div>
        </div> --}}
        <div class="grid grid-flow-col grid-rows-3 grid-cols-4">
            <div class="bg-blue-100">1</div>
            <div class="bg-blue-200">2</div>
            <div class="bg-blue-300">3</div>
            <div class="bg-blue-400">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-600">6</div>
            <div class="bg-blue-700">7</div>
            <div class="bg-blue-800">8</div>
            <div class="bg-blue-900">9</div>
        </div>
    </div>
</body>

</html>
