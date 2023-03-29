<?php
    session_start();
?>
    <?php include '../includes/header.php' ?>
    <div class="container">
        <div class="side">
            <h1><?php echo translate("fqh", $localization) ?></h1>
            <ul>
                <li><?php echo translate("fqli1", $localization) ?><br>
                    <small><?php echo translate("fqsm1", $localization) ?></small>
                </li>
                <li><?php echo translate("fqli2", $localization) ?> <br>
                <small><?php echo translate("fqsm2", $localization) ?></small>
                </li>
                <li><?php echo translate("fqli3", $localization) ?><br>
                <small><?php echo translate("fqsm3", $localization) ?></small>
                </li>
                <li><?php echo translate("fqli4", $localization) ?><br>
                <small><?php echo translate("fqsm4", $localization) ?></small>    
                </li>
                <li><?php echo translate("fqli5", $localization) ?><br>
                    <small><?php echo translate("fqsm5", $localization) ?></small>    
                </li>
                <li><?php echo translate("fqli6", $localization) ?><br>
                    <video width="300" height="650" controls>
                        <source src="/video/video.mp4">
                        </video>
                </li>
            </ul>
        </div>
        <div class="imagefaq">
            <img src="/images/frontback.gif" alt="">
        </div>
    </div>
    
</body>
</html>