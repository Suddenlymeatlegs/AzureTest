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
                    print "You need to be 16 to buy specs.";
                    break;
                case "mugs":
                    print "You need to be 18 to buy mugs.";
                    break;
                case "sausage rolls":
                    print "You need to be 21 to buy sausage rolls.";
                    break;                
                default:
                    print "Invalid entry, yo.";
            ?>
        </p>
    </body>
</html>
