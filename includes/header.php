<?php
    session_start();
    $_SESSION["lang"];
    if($_SESSION["lang"] == null)
        $_SESSION["lang"] = "sk";
?>
<?php
$currentPage = $_SERVER['SCRIPT_NAME'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/gallery.css">
    <link rel="stylesheet" href="/styles/carousel.css">
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <title>Samsung Galaxy A51 </title>
</head>
<?php 
        if($_SERVER['SCRIPT_NAME'] == "/index.php")
            include 'scripts/localization.php';
        else
            include '../scripts/localization.php';
?>
<body>
<nav class="nav">
        <div class="nav__title"><a href="/index.php"><h1>GALAXY A51</h1></a></div>
            <ul class="nav__list">
                <li class="nav__item"><a href="/index.php" <?php if ($currentPage == "/index.php") echo 'style="color: black"'?> ><?php echo translate("nav1", $localization) ?></a></li>
                <li class="nav__item"><a href="/pages/hardware.php" <?php if ($currentPage == "/pages/hardware.php") echo 'style="color: black"'?>><?php echo translate("nav2", $localization) ?></a></li>
                <li class="nav__item"><a href="/pages/software.php" <?php if ($currentPage == "/pages/software.php") echo 'style="color: black"'?>><?php echo translate("nav3", $localization) ?></a></li>
                <li class="nav__item"><a href="/pages/forwho.php" <?php if ($currentPage == "/pages/forwho.php") echo 'style="color: black"'?>><?php echo translate("nav4", $localization) ?></a></li>
                <li class="nav__item"><a href="/pages/faq.php" <?php if ($currentPage == "/pages/faq.php") echo 'style="color: black"'?>><?php echo translate("nav5", $localization) ?></a></li>
                <li class="nav__item"><a href="/pages/gallery.php" <?php if ($currentPage == "/pages/gallery.php") echo 'style="color: black"'?>><?php echo translate("nav6", $localization) ?></a></li>
                <li class="nav__item"><a href="/pages/comment.php" <?php if ($currentPage == "/pages/comment.php") echo 'style="color: black"'?>><?php echo translate("nav7", $localization) ?></a></li>
                <li class="nav__item"><a href="../scripts/lang.php"><small><?php echo ($_SESSION["lang"] == "sk") ? 'ENG' : 'SK' ?></small></a></li>
            </ul>
</nav>