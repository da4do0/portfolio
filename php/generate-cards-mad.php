<?php

    require_once('connessione-admin.php');

    $sql = "SELECT path, title, subtitle, link  
            from idee";

    if($result = $connessione-> query($sql)){
        while($row = $result -> fetch_assoc()){

        ?>
            <a href="<?php echo $row["link"]; ?>">
                <div class="box-card">
                    <div class="box-image">
                        <img src="<?php echo "img-upload-mad\\" .$row["path"];?>"/>
                    </div>
                    <div class="infobox">
                        <p><?php echo $row["title"];?></p>
                        <p><?php echo $row["subtitle"];?></p>
                    </div>
                </div>
            </a>
        <?php
        }
    }

?>