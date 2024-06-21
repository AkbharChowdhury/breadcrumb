<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once 'breadcrumb.class.php';
require_once 'templates/header.php';
$breadcrumb = new Breadcrumb(title: null);

?>

<div class="container py-5">
    <?php $breadcrumb->createBreadcrumb('index.php', 'genres'); ?>
</div>


<?php require_once 'templates/footer.php'; ?>
