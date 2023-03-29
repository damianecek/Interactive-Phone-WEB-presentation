<?php
    session_start();
?>
    <?php include '../includes/header.php' ?>
    <div class="container">
        <div class="sidewho">
            <h1><?php echo translate("fwh1", $localization) ?></h1>
            <ul>
                <li><?php echo translate("fwli1", $localization) ?> <br>
                    <small><?php echo translate("fwsm1", $localization) ?></small>
                </li>
                <li><?php echo translate("fwli2", $localization) ?> <br>
                <small><?php echo translate("fwsm2", $localization) ?></small>
                </li>
                <li><?php echo translate("fwli3", $localization) ?> <br>
                <small><?php echo translate("fwsm3", $localization) ?></small>
                </li>
                <li><?php echo translate("fwli4", $localization) ?> <br>
                <small><?php echo translate("fwsm4", $localization) ?></small>
                </li>
            </ul>
        </div>
        <div class="imagefaq">
            <img src="/images/angle.png" alt="">
        </div>
    </div>
</body>
</html>