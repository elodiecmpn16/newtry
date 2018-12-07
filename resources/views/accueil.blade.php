<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Accueil</title>
</head>
<body>

@include('includes.header')

<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container bandeau">
            <h1 class="display-3">Bienvenue sur l'extranet Tremblaye</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a
                jumbotron and three supporting pieces of content. Use it as a starting point to create something more
                unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row accueilMetiers">
            <div class="col-md-4 transport">
                <h2>Transport</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                    mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                    mollis euismod. Donec sed odio dui. </p>
            </div>
            <div class="col-md-4 logistique">
                <h2>Logistique</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                    mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                    mollis euismod. Donec sed odio dui. </p>
            </div>
            <div class="col-md-4 location">
                <h2>Location</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                    porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                    ut fermentum massa justo sit amet risus.</p>
            </div>

        <a class="btn btn-outline-light btn-block" href="http://localhost/newtry/public/login" role="button">Me connecter &raquo;</a>
    </div>
    </div>
</main>

@include('includes.footer')

<script type="text/javascript" href="{{ asset('js/popper.min.js') }}"></script>
<script type="text/javascript" href="{{ asset('js/jquery-3.3.2.slim.min.js') }}"></script>
<script type="text/javascript" href="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>