<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Logical Operator</title>
    </head>
    <body>
        <form action="logicaloperator.php" method="post">
            <h3>Order Item</h3>
            <label>Productname : </label>
            <input type="text" name="productname"><br><br>
            <label>Quantity : </label>
            <input type="text" name="productquantity"><br><br>
            <label>Price : </label>
            <input type="text" name="productprice"><br><br>
            <input type="submit" value="order">
        </form>
    </body>
</html>
<?php
    $productname = $_POST["productname"];
    $productquantity = $_POST["productquantity"];
    $productprice = $_POST["productprice"];
    $total = null;

    if($productname == "pizza" && $productprice == 50.00){
        $total = $productquantity * $productprice;
        echo "You ordered small size pizza, and a total of {$total}.";
    }
    else if($productname == "burger" && $productprice == 50.00){
        $total = $productquantity * $productprice;
        echo "You ordered small size burger, and a total of {$total}.";
    }
    else if($productname == "chicken" && $productprice == 50.00){
        $total = $productquantity * $productprice;
        echo "You ordered small size chicken, and a total of {$total}.";
    }
    else if($productname == "pasta" && $productprice == 50.00){
        $total = $productquantity * $productprice;
        echo "You ordered small size pasta, and a total of {$total}.";
    }
    else {
        echo "Error : Invalid Orders.";
    }
?>