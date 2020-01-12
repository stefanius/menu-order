
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Free Bulma template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.8.x-->
    <link href="{{ mix('css/themes/journal.css') }}" rel="stylesheet">
    <link href="{{ mix('css/admin.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
</head>

<body>

<!-- START NAV -->
<nav class="navbar is-white">
    <div class="container">
        <div class="navbar-brand">

            <a class="navbar-item brand-text" href="../index.html">
                Eat - o - Matic
            </a>

            <div class="navbar-burger burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>
        <div id="navMenu" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="admin.html">
                    <i class="far fa-calendar-plus"></i> <!-- Nieuw -->
                </a>
                <a class="navbar-item" href="admin.html">
                    <i class="fas fa-file-alt"></i> <!-- Inschrijvingen -->
                </a>
                <a class="navbar-item" href="admin.html">
                    <i class="far fa-edit"></i> <!-- Inschrijven -->
                </a>
            </div>

        </div>
    </div>
</nav>
<!-- END NAV -->
<div class="container">
    <div class="columns">
        <div class="column is-2 ">
        </div>
        <div class="column is-10">
            <section class="hero is-info welcome is-small">
                <div class="columns">
                    <div class="column is-12">
                        Week {{ $week }}
                    </div>
                </div>
            </section>

            <div class="columns" style="height: 2em;">
                <div class="column is-2">

                </div>

                <div class="column is-5">
                    <p class="has-text-centered is-centered"><strong>Menu A</strong></p>
                </div>

                <div class="column is-5">
                    <p class="has-text-centered is-centered"><strong>Menu B</strong></p>
                </div>
            </div>

            @for($i = 1; $i < 6; $i++)
                <div class="columns" style="height: 10em;">
                    <div class="column is-2">
                        <strong>{{ \Carbon\Carbon::now()->setISODate(2019, $week, $i)->format('l') }}</strong> </br>
                        <small>{{ \Carbon\Carbon::now()->setISODate(2019, $week, $i)->format('j F Y') }}</small>
                    </div>

                    <div class="column is-5">
                        <textarea class="textarea"></textarea>
                    </div>

                    <div class="column is-5">
                        <textarea class="textarea"></textarea>
                    </div>
                </div>
            @endfor

            <div class="columns" style="height: 10em;">
                <div class="column is-2">

                </div>

                <div class="column is-5">

                </div>

                <div class="column is-5">
                    <button class="button is-success is-pulled-right is-medium">Opslaan</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script async type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>

</html>
