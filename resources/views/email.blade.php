<!doctype html>
<html lang="ru" class="scroll-behavior">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="email=no">
    <title>email</title>
    <script defer src="{{asset('js/email.js')}}"></script>
    <link href="{{asset('css/email.css')}}" rel="stylesheet">
</head>
<body>
<div id="app">
    <page-email :order='{!! json_encode($order) !!}'></page-email>
</div>
</body>
</html>
