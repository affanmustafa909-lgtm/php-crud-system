<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product form</title>
</head>

<body>
 


    <?php   

include 'conn.php';


if(isset($_POST['submit'])){
    $productName = $_POST['pname'];
    $desp = $_POST['pdes'];
    $price = $_POST['Price'];
    $image = $_FILES['pimage'];
    $fileName = $image['name'];
     move_uploaded_file($image['tmp_name'],'upload/'.$fileName);


     $addRecord = "INSERT INTO `add_product`( `product_Name`, `product_Des`, `price`, `p_image`) 
     VALUES ('$productName','$desp','$price','$fileName')";

     $query = mysqli_query($conn, $addRecord);

}



?>




    <h1>Add New Products</h1>

    <form action="" method="post" enctype="multipart/form-data">

        <label for="">Enter product Name</label>
        <input type="text" name="pname"> <br> <br>

        <label for="">Enter Product Description</label>
        <input type="text" name="pdes"> <br> <br>

        <label for="">Enter Product Price</label>
        <input type="text" name="Price"> <br> <br>

        <label for="">Upload product Image</label>
        <input type="file" name="pimage"> <br> <br>

        <input type="submit" value="Add Product" name="submit">

    </form>

</body>

</html>