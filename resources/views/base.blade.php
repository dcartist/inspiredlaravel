<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inpired Tech Life</title>
    <style>
        html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
    </style>
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<!-- <link rel="stylesheet" href="{{secure_asset('css/style.css')}}"> -->
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>Inspired Tech Life</title>
</head>
<body>
<x-navigation/>
<div>
@yield('content')
</div>
<!-- <script src="js/script.js"></script> -->
<script src="{{ asset('js/script.js')}}"></script>

</body>
</html>
