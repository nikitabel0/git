<?php

    require_once '../connect.php';

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    
    mysqli_query($connect, query:"INSERT INTO `products` (`id`, `title`, `price`, `description`) VALUES (NULL, '$title', '$price', '$description')");

    header('Location: /');