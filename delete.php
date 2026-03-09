<?php


include 'conn.php';

$sid = $_GET['id'];

$delete = "DELETE FROM `add_product` WHERE id='$sid'";

$query = mysqli_query($conn, $delete);

 if($query){
        header('location: view.php');
    }
 



?>