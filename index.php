<!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
        <p>
            <?php

            $age = 16;

            if($age <16){
                print "You can't buy anyhing, oh no!";
            }
            elseif($age <18){
                print "Y'all can get specs.";
            }
            elseif($age < 21){
                print "Mugs. Get you some!";
            }
            else{
                print "You can buy everything. Gz!";
            }
            ?>
        </p>
    </body>
</html>
