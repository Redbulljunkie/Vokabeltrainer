<?php
require __DIR__ . '/core/database.php';

// Verbindung erstellen

$vocabs = [
    [
        'word' => 'Hello',
        'translation' => 'Hallo'
    ], [
        'word' => 'Bird',
        'translation' => 'Vogel'
    ], [
        'word' => 'Face',
        'translation' => 'Gesicht'
    ], [
        'word' => 'to try',
        'translation' => 'versuchen'
    ], [
        'word' => 'very',
        'translation' => 'sehr'
    ], [
        'word' => 'nap',
        'translation' => 'Mittagsschlaf'
    ], [
        'word' => 'hiccup',
        'translation' => 'Schluckauf'
    ], [
        'word' => 'Fire',
        'translation' => 'Feuer'
    ], [
        'word' => 'Key',
        'translation' => 'Schlüssel'
    ], [
        'word' => 'Cake',
        'translation' => 'Kuchen'
    ], [
        'word' => 'Snowball',
        'translation' => 'Schneeball'
    ]
];

$vocabIndex = 0;
if (isset($_GET['vocab'])) {
    $vocabIndex = $_GET['vocab'];
    if ($vocabIndex == 0) {
        $previousVocab = $vocabs[count($vocabs) - 1];
    } else {
        $previousVocab = $vocabs[$vocabIndex - 1];
    }
    if (isset($_POST['skip'])) {
        $messageboxClass ='warning';
        $messageboxText = 'Schade! Richtig wäre: ' . $previousVocab['translation'];
    } elseif (isset($_POST['translation']) && strtolower($previousVocab['translation']) == strtolower($_POST['translation'])) {

        $messageboxClass = 'success';
        $messageboxText = 'Richtig!';
    } else {

        $messageboxClass = 'danger';
        $messageboxText = 'Falsch! Richtig wäre: ' . $previousVocab['translation'];
    }
}

$vocabToDisplay = $vocabs[$vocabIndex];
?>


<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.98.0">
        <title>Heroes · Bootstrap v5.2</title>

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




        <main>
            <h1 class="visually-hidden">Heroes examples</h1>
            <form action="/index.php?vocab=<?php
if ($vocabIndex == count($vocabs) - 1) {
    echo 0;
} else {
    echo $vocabIndex + 1;
}
?>" method="post">
                <div class="px-4 py-5 my-5 text-center w-50 mx-auto">
                    <?php if (isset($messageboxClass)) { ?>
                        <div class="alert alert-<?php echo $messageboxClass; ?> d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label=":"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div> <?php echo $messageboxText ?>

                            </div>
                        </div>
                    <?php } ?>
                    <h1 class="display-5 fw-bold"> <?php echo $vocabToDisplay['word']; ?></h1>
                    <div class="col-lg-6 mx-auto">

                        <label for="translation">Übersetzung:</label>
                        <input type="text" name="translation" value="">
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-2">
                            <button name="skip" value="1" type="submit" class="btn btn-outline-secondary btn-lg px-4">überspringen</button>
                            <button type="submit" class="btn btn-primary btn-lg px-4 gap-3">weiter</button>
                        </div>
                    </div>
                </div>
            </form>





        </main>


        <script src="/assets/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


    </body>
</html>
