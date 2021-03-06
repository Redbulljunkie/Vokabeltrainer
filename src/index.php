<?php
require __DIR__ . '/core/database.php';
require __DIR__ . '/core/init.php';
?>


<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Jona Lindberg">
        <title>Vokabeltrainer</title>

        <link rel="canonical" href="http://localhost">


        <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
        <link rel="icon" href="/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#712cf9">


        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            .b-example-divider {
                height: 3rem;
                background-color: rgba(0, 0, 0, .1);
                border: solid rgba(0, 0, 0, .15);
                border-width: 1px 0;
                box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
            }

            .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 100vh;
            }

            .bi {
                vertical-align: -.125em;
                fill: currentColor;
            }

            .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
            }

            .nav-scroller .nav {
                display: flex;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }
        </style>


        <!-- Custom styles for this template -->
        <link href="/assets/dist/css/heroes.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <header class="d-flex justify-content-center py-3">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="/index.php?page=manage" class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'manage' ? 'active' : ''); ?>">Vokabeln</a></li>
                    <li class="nav-item"><a href="/index.php?page=trainer" class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'trainer' ? 'active' : ''); ?>">Trainer</a></li>



                </ul>
            </header>
        </div>
        <main>
            <?php require __DIR__ . '/pages/' . $page . '/content.php'; ?>

        </main>

        <script src="/assets/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


    </body>
</html>
