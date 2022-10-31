<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Styles -->
    <style>
    </style>
    @livewireStyles
</head>

<body class="container">
    <div class="row">
        <div class="col-mx-9 mx-auto">
            <div class="d-flex justify-content-center align-items-center">
                <h1 class="text-center">Light</h1>
                @livewire('light')
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>