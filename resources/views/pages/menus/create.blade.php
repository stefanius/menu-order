
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
                    Home
                </a>
                <a class="navbar-item" href="admin.html">
                    Orders
                </a>
                <a class="navbar-item" href="admin.html">
                    Payments
                </a>
                <a class="navbar-item" href="admin.html">
                    Exceptions
                </a>
                <a class="navbar-item" href="admin.html">
                    Reports
                </a>
            </div>

        </div>
    </div>
</nav>
<!-- END NAV -->
<div class="container">
    <div class="columns">
        <div class="column is-3 ">
            <aside class="menu is-hidden-mobile">
                <p class="menu-label">
                    General
                </p>
                <ul class="menu-list">
                    <li><a class="is-active">Dashboard</a></li>
                    <li><a>Customers</a></li>
                    <li><a>Other</a></li>
                </ul>
                <p class="menu-label">
                    Administration
                </p>
                <ul class="menu-list">
                    <li><a>Team Settings</a></li>
                    <li>
                        <a>Manage Your Team</a>
                        <ul>
                            <li><a>Members</a></li>
                            <li><a>Plugins</a></li>
                            <li><a>Add a member</a></li>
                            <li><a>Remove a member</a></li>
                        </ul>
                    </li>
                    <li><a>Invitations</a></li>
                    <li><a>Cloud Storage Environment Settings</a></li>
                    <li><a>Authentication</a></li>
                    <li><a>Payments</a></li>
                </ul>
                <p class="menu-label">
                    Transactions
                </p>
                <ul class="menu-list">
                    <li><a>Payments</a></li>
                    <li><a>Transfers</a></li>
                    <li><a>Balance</a></li>
                    <li><a>Reports</a></li>
                </ul>
            </aside>
        </div>
        <div class="column is-9">
            <section class="hero is-info welcome is-small">
                <div class="columns">
                    <div class="column is-12">
                        Week {{ $week }} </br>
                    </div>
                </div>
            </section>

            @for($i = 1; $i <6; $i++)
                <div class="columns">
                    <div class="column is-2">
                        <strong>{{ \Carbon\Carbon::now()->setISODate(2019, $week, $i)->format('l') }}</strong> </br>
                        <small>{{ \Carbon\Carbon::now()->setISODate(2019, $week, $i)->format('j F Y') }}</small>
                    </div>

                    <div class="column is-5">
                        <textarea></textarea>
                    </div>

                    <div class="column is-5">
                        <textarea></textarea>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
<script async type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>

</html>
