<?php
    session_start();
?>
    <?php include 'includes/header.php' ?>
    <div class="container">
        <div class="image">
            <img src="/images/front.png" alt="">
        </div>
        <div class="aside">
            <h1>Samsung Galaxy A51</h1>
            <ul>
                <li><?php echo translate("indexli1", $localization) ?> <br>
                    <small><?php echo translate("indexsm1", $localization) ?></small>
                </li>
                <li><?php echo translate("indexli2", $localization) ?> <br>
                <small><?php echo translate("indexsm2", $localization) ?></small>
                </li>
                <li><?php echo translate("indexli3", $localization) ?> <br>
                <small><?php echo translate("indexsm3", $localization) ?></small>
                </li>
                <li><?php echo translate("indexli4", $localization) ?> <br>
                <small><?php echo translate("indexsm4", $localization) ?></small>    
                </li>
            </ul>
        </div>
    </div>
</body>
</html>