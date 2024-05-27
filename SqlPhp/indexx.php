<?php 
    /// red 
    require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/SqlPhp/style.css">
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>price</th>
        </tr>
        <?php

            $products = mysqli_query($connect,query:"SELECT * FROM 'products'");
            $products = mysqli_fetch_all($products);
           
            foreach($products as $product){
                ?>
            
                <tr>
                    <td><?= $product[0]?></td>
                    <td><?= $product[1]?></td>
                    <td><?= $product[2]?></td>
                    <td><?= $product[3]?></td>
                    <td><a href="update.php?id">update</a></td>
                </tr>
            
                <?php
              
            };
            
        ?>

       
        <tr>
            <td>1</td>
            <td>product 1</td>
            <td>Lorem ipsum dolor sit.</td>
            <td>1000</td>
        </tr>
    </table>
    <?php

        $products = mysqli_query($connect,query:"SELECT * FROM 'products'");
        $products = mysqli_fetch_all($products);
       
            
    ?>

    <form action="vendor/add.php" method="post">

        <h1>add</h1>
        <p>title</p>
        <input type="text" name="title">
        <p>description</p>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <p>price</p>
        <input type="numer" name="price">
        <button type="submit">add new product</button>
    </form>
</body>
</html>