<!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
        <p>
            <?php
            $wantedGood = "mugs";

            switch ($wantedGood)
                case "specs":
                    echo "You need to be 16 to buy specs.";
                    break;
                case "mugs":
                    echo "You need to be 18 to buy mugs.";
                    break;
                case "sausage rolls":
                    echo "You need to be 21 to buy sausage rolls.";
                    break;                
                default:
                    echo "Invalid entry, yo.";
            ?>
        </p>
    </body>
</html>
