<?php

$page = 'trainer';

if (isset($_GET['page']) && is_dir(__DIR__.'/../pages/'.$_GET['page'])) {
    $page = $_GET['page'];
}

require __DIR__.'/../pages/'.$page.'/controller.php';
