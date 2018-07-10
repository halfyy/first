<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin:0;
                margin-left: 10%;
                width:80%;
            }
            .header{
                background-image:url(img/header.png);
                height:200px;
                width:100%;
                background-size: 100% 100%;
            }
            
        </style>
    </head>
    <body>
        <div class="header">
            
        </div>
        <div class="links">
            <button class="btn">
                Новости
            </button>
            <button class="btn">
                Медиа
            </button>
            <button class="btn">
                Контакты
            </button>
        </div>
    </body>
</html>
