<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ElStel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:100,200,400" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'IBM Plex Sans', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
                @include('components.header-nav')
        </div>
    </div>
        <div class="flex-center position-ref full-height">
                  <div class="content">
                <div class="title">
                    ElStel
                </div>
                <h3 class="mb-5 mt-3">Elektronische Stellenanzeigen</h3>

                <div class="links mt-lg-5">
                    <a href="https://github.com/laracoder/elstel-backend">Documentation</a>
                    <a href="https://github.com/laracoder/elstel-backend">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
