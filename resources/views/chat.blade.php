<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{env('APP_NAME')}}</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset("/css/app.css")}}" rel="stylesheet">
    </head>
    <body>
        <section class="container" style="margin-top: 20px" id="app">
            <App />
        </section>
    </body>
    <script src="{{asset("/js/app.js")}}"></script>
</html>
