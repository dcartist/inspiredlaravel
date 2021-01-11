<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspired Tech Life</title>
    <meta property="twitter:url" content="https://www.inspiredtech.life">
    <meta property="twitter:title" content="Inspired Tech Life">
    <meta property="twitter:description" content="Inspired Tech life is to help those in the tech world find help and support through groups, videos, mantras, and find support resources.">


    <meta name="Description" content="Inspired Tech life is to help those in the tech world find help and support through groups, videos, mantras, and find support resources.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.inspiredtech.life">
    <meta property="og:title" content="Inspired Tech Life">
    <meta property="og:description" content="Inspired Tech life is to help those in the tech world find help and support through groups, videos, mantras, and find support resources.">


<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <title>Inspired Tech Life</title>
</head>
<body>
<x-navigation/>
<div class="min-h-full">
@yield('content')


</div>
<div class="text-center text-sm">&copy; Paula Bannerman 2021</div>
<script src="https://kit.fontawesome.com/0d31a2da49.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/script.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
