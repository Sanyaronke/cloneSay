<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description')" />
    {{-- Boutstrap --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- My style --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    {{-- FONTAWESOME --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <title>@yield('title')</title>

</head>

<body>

    {{-- SOCIALE CARD --}}
    <section>
        <div class="reseau ">
            <div class="bloc-principale">
                <div class="fb">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                </div>
                <div class="in">
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="msg">
                    <a href=""><i class="far fa-comment-dots"></i></a>
                </div>
                <div class="social_play ">
                    <span><i class="fas fa-play-circle"></i></span>
                </div>
            </div>
        </div>
    </section>
    {{-- END SOCIALE CARD --}}

    {{-- HEADER NAV --}}
    <header>
        @include('layouts.navbar')
    </header>
    {{-- ENND HEADER NAV --}}

    <div class="main">
        {{-- SHOW ALL CONTENT --}}
        @yield('content')
        {{-- End SHOW ALL CONTENT --}}

        <div class="container-fluid footer-info">
            <div class="container d-flex flex-wrap justify-content-around p-0">
                <div class="col-10 col-sm-6 col-lg-3 about">
                    <h3>Qui sommes nous ?</h3>
                    <p>
                        Sayaris édite des solutions web de gestion des compétences pour les organisations soucieuses de
                        développer leur capital humain. Avec nos outils, faites converger épanouissement professionnel
                        et efficacité de vos équipes.
                    </p>
                </div>
                <div class="col-10 col-sm-6 col-lg-2 contact">
                    <h3>Contact</h3>

                    <p> Adresse : 1 Avenue de la gare
                        Dax 40100 <br>
                        <span>------------</span>
                        <br>
                        Téléphone : 05 31 60 50 61
                    </p>

                    <p>
                        E-mail : contact@sayaris.fr
                    </p>
                </div>
                <div class="col-3 other"></div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

<footer>
    <span>Copyright © 2021 Sayaris</span>
    <div>
            <a href="{{ URL::to('https://www.facebook.com/sayarisfr/') }}" target="_blank"><i class="fab fa-facebook"></i></a>

            <a href="{{ URL::to('https://www.linkedin.com/company/sayaris/?originalSubdomain=fr') }}" target="_blank"><i class="fab fa-linkedin"></i></a>

    </div>
</footer>
</html>
