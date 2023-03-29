<?php
    session_start();
?>
    <?php include '../includes/header.php' ?>
    <h1 class="nadpis" style="margin-top: 40px;"><?php echo translate("nav6", $localization) ?></h1>
    <div class="shape"></div>
    <?php 
    foreach(glob("../gallery/*.jpg") as $filename){
        
        echo    '<div class="gallery">
                    <a target="_blank" href="'.$filename.'">
                        <img src="'.$filename.'" alt="" class="shape">
                    </a>
                </div>';
    }
    ?>
</body>
</html>