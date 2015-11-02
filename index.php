<!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
        <p>
            <?php
                for($i; $i<30; $i++){
                    $product = "No products";
                    if($i % 4 == 0){
                        $product = "Sausage rolls and specs";
                    }
                    elseif($i % 3 == 0){
                        $product = "Mugs";
                    }
                    elseif($i % 2 == 0){
                        $products = "Specs";
                    }
                    echo $product . " are available on the " . $i . "th day of the month."
                }
            ?>
        </p>
    </body>
</html>
