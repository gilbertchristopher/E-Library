<?php 
    echo doctype('html5');
?>
<html>
    <head>
        <title>This is search result page</title>
    </head>
    <body>
        <?php
            //echo var_dump($searchres);
            for($i = 0;$i < count($searchres);$i++){
                echo $searchres[$i]->title;
                echo br();
            }
        ?>
    </body>
</html>