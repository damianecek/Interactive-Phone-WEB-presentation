<?php
    session_start();
?>
    <?php include '../includes/header.php' ?>
    <h1 class="nadpis" style="margin-top: 40px;"><?php echo translate("comh", $localization) ?></h1>
    <div class="comment">
        <form method="post" action="../scripts/com.php">
            <p><?php echo translate("comi1", $localization) ?></p>
            <input type="text" name="name" required pattern="(?=.*[a-z]).{3,}">
            <br>
            <p><?php echo translate("comi2", $localization) ?></p>
            <textarea name="comment" rows="5" cols="40" required pattern="(?=.*[a-z]).{3,}" ></textarea>
            <br>
            <input type="submit" name="submit" value="<?php echo translate("comi3", $localization) ?>">
        </form>
    </div>
    <h1 class="nadpis" style="margin-top: 40px;"><?php echo translate("nav7", $localization) ?></h1>
    <div class="comments">
        <?php
    $content = file("../scripts/comments.txt"); 
    if($content != null){
        foreach($content as $line){
            $split = explode(";;",$line);
            $name = $split[0];
            $comment = $split[1];
            echo '<div class="cell"><p>' .translate("comi1", $localization). ': '.$name.'</p><p>' .translate("comi2", $localization). ': '.$comment.'</p></div>';
    }
    }
    ?>
    </div>

</body>
</html>