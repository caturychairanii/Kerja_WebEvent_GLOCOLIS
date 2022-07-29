<?php include "components/data.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include "components/header.php" ?>

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <?php include "components/navbar.php" ?>
    </header>
    <!-- ***** Header Area End ***** -->

    <?php

    if (isset($_GET['page'])) {
        if ($_GET['page'] == "About") {
            include 'pages/about.php';
        } elseif ($_GET['page'] == "GuideBook") {
            include 'pages/guidebook.php';
        } elseif ($_GET['page'] == "Contact") {
            include 'pages/contact.php';
        } elseif ($_GET['page'] == "ListFinalist") {
            include 'pages/list-finalist.php';
        } elseif ($_GET['page'] == "PressRelease") {
            include 'pages/PressRelease.php';
        } elseif ($_GET['page'] == "Certificate") {
            include 'pages/certificate.php';
        } elseif ($_GET['page'] == "Gallery") {
            include 'pages/gallery.php';
        } elseif ($_GET['page'] == "Foto") {
            include 'pages/foto.php';
        } elseif ($_GET['page'] == "Video") {
            include 'pages/video.php';
        } elseif ($_GET['page'] == "FinalistGlocolis") {
            include "pages/ListFinalist/finalist_glocolis.php";
        } elseif ($_GET['page'] == "FinalistIYBC") {
            include "pages/ListFinalist/finalist_iybc.php";
        } elseif ($_GET['page'] == "News1") {
            include "components/News1.php";
        } elseif ($_GET['page'] == "News2") {
            include "components/News2.php";
        }
    } else {
        include 'pages/404.php';
    }

    ?>


    <?php include "components/footer.php" ?>

</body>

</html>