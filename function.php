<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Functiont</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body>
        <p>Order Foods</p>
        <p>------------------------------------------------</p>
        <form action="function.php" method="post">
            <label for="productname">Product : </label>
            <input type="text" name="productname"><br><br>
            <label for="quantity">Quantity : </label>
            <input type="number" name="quantity" min="1" value="1"><br><br>
            <label for="price">Size : </label>
            <select name="price" id="price">
                <option value="25">S - 25.00</option>
                <option value="50">M - 50.00</option>
                <option value="75">L - 75.00</option>
            </select><br><br>
            <input type="submit" name="submit" value="order">
        </form>
        <p>------------------------------------------------</p>
    </body>
</html>
<?php
    function total_amount() {
        if (!isset($_POST["submit"])) {
            return null;
        }
        $price = isset($_POST["price"]) ? floatval($_POST["price"]) : 0;
        $quantity = isset($_POST["quantity"]) ? intval($_POST["quantity"]) : 0;
        $product = isset($_POST["productname"]) ? htmlspecialchars($_POST["productname"]) : '';
        $total_amount = $quantity * $price;
        return [
            'product' => $product,
            'quantity' => $quantity,
            'unit_price' => $price,
            'total' => $total_amount
        ];
    }

    $result = total_amount();
    if ($result !== null) {
        echo "<p>Order summary:</p>";
        echo "<p>Product: " . $result['product'] . "</p>";
        echo "<p>Quantity: " . $result['quantity'] . "</p>";
        echo "<p>Unit price: " . number_format($result['unit_price'], 2) . "</p>";
        echo "<p><strong>Total: " . number_format($result['total'], 2) . "</strong></p>";
    }
?>