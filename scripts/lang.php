<?php
    session_start();
    if ($_SESSION["lang"] == "sk")
        $_SESSION["lang"] = "en";
    else
        $_SESSION["lang"] = "sk";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>