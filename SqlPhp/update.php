<?php

    require_once('connect.php');

    $product_id = $_GET['id'];
    $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");
    $product = mysqli_fetch_assoc($product)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>

<body>

    <form action="vendor/upd.php" method="post">
        <input type="hidden" name="id" id="">
        <h1>add</h1>
        <p>title</p>
        <input value="<?$product['title']?>" type="text" name="title">
        <p>description</p>
        <textarea name="description" id="" cols="30" rows="10"><?$product['description']?></textarea>
        <p>price</p>
        <input type="numer" value="<?$product['price']?>" name="price">
        <button type="submit">update</button>
    </form>
    
</body>
</html>