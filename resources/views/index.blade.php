<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Petify</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Petify</title>
    <!-- Styles -->
    <link href="{{ asset('vue-styles.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>

<div id="app">

</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
