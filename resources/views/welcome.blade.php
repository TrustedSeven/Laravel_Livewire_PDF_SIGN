<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css'><link rel="stylesheet" href="../css/app.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="../css/app.css" rel="stylesheet">
</head>

<body class="antialiased">
    <h2 class="mt-3 test">Signature Track</h2>
    <div class="container">
        @livewire('category')
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/interact.js/1.2.9/interact.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.worker.min.js'></script><script  src="./script.js"></script>
</body>

</html>
