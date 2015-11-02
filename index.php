<!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
        <p>
            <?php
                for($i=1; $i<30; $i++){
                    $product = "No products";
                    if($i % 2 == 0){
                        $product = "Specs";
                        if($i % 4 == 0){
                            $product = "Sausage rolls and specs";
                    }
                    elseif($i % 3 == 0){
                        $product = "Mugs";
                    }
                    echo  $product . " are available on the " . $i . "th day of the month.</br>";
                }
            ?>
        </p>
    </body>
</html>
