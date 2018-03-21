<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">



        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

        </style>
    </head>
    <body>
        <h1 style="text-align: center">Vue Practice</h1>


        <div id="app">
            <cupon></cupon>
        </div>

       <script src="https://cdn.jsdelivr.net/npm/vue@2.5.15/dist/vue.js"></script>
       <script src="{{ URL::to('js/app.js') }}"></script>

    </body>
</html>
