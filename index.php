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
                    }
                    elseif($i % 3 == 0){
                        $product = "Mugs";
                    }
                    elseif($i % 2 == 0){
                        $products = "Sausage Rolls and Specs";
                    }
                    echo <p>$product . " are available on the " . $i . "th day of the month."</p>;
                }
            ?>
        </p>
    </body>
</html>
