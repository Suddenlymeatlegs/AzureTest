<!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
        <p>
            <?php
                $provisionedActivity = array("Specs", "Drugs", "Rock and Roll");
                foreach($provisionedActivity as $x){
                    print "<p>$x</p>";
                }
            ?>
        </p>
    </body>
</html>
