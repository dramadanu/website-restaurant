<?php 
    @include 'config.php';

    if (isset($_GET['id'])) {
        $id_product = $_GET['id'];
        $sqlProduct = mysqli_query($conn,"SELECT * FROM products where id = $id_product");
        $fetchProduct = mysqli_fetch_array($sqlProduct);
        $name = $fetchProduct['name'];
        $image = $fetchProduct['image'];
        $price = $fetchProduct['price'];

        $sqlInsertCart = mysqli_query($conn,"INSERT INTO cart 
        VALUES ('', '$name', '$price', '$image', 1)");
        header("location: checkout.php");
    }
?>