<?php
    session_start();
?>
<?php 
    if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){
        $file = fopen("comments.txt", "a");
        $name = $_POST["name"];
        $comment = $_POST["comment"];
        $_POST = array();
        if(trim($comment)!="")
            fwrite($file, "".$name.";;".$comment."\n");
        }
header("Location: /pages/comment.php");
?>