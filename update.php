<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    include 'conn.php';
    $aid = $_GET['id'];

    $view = "SELECT * FROM `add_product` WHERE id='$aid'";

    $query = mysqli_query($conn, $view);

    $data = mysqli_fetch_array($query);


    if (isset($_POST['submit'])) {
        $productName = $_POST['pname'];
        $desp = $_POST['pdes'];
        $price = $_POST['Price'];
        $image = $_FILES['pimage'];
        $fileName = $image['name'];
        move_uploaded_file($image['tmp_name'], 'uploads/' . $fileName);

        $update = "UPDATE `add_product` SET `product_Name`='$productName',`product_Des`='$desp',`price`='$price',`p_image`='$fileName' WHERE id='$aid'";

        $query = mysqli_query($conn, $update);

        if ($query) {
            header('location: view.php');
        }
    }

    ?>

    <h1>Update Products</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Enter Product Name</label>
        <input type="text" name="pname" value='<?php echo $data['product_Name']; ?> '> <br> <br>

        <label for="">Enter Product Description</label>
        <input type="text" name="pdes" value='<?php echo $data['product_Des']; ?> '> <br> <br>

        <label for="">Enter Product Price</label>
        <input type="text" name="Price" value='<?php echo $data['price']; ?> '> <br> <br>

        <label for="">Upload Product Image</label>
        <input type="file" name="pimage" value='<?php echo $data['p_image']; ?> '> <br> <br>

        <input type="submit" value="Update Product" name="submit">
    </form>




</body>

</html>