<！DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <meta http-equiv ="X-UA-Compatible" content = "IE = edge">
        <meta name = "viewport"content = "width =デバイス幅、初期スケール= 1">

        <title> Monolist </ title>

        <！ - ブートストラップ - >
        <リンクのrel = "スタイルシート" のhref = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>

        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    </ head>
    <body>
        @include（'commons.navbar'）

        @yield（'cover'）

        <div class = "container">
            @include（'commons.error_messages'）
            @yield（'content'）
        </ div>

        @include（'commons.footer'）
    </ body>
</ html>