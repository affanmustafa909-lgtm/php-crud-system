<?php



$username = "root";
$password = "";
$server = "localhost";
$database = "affan_new";

// connection query

$conn = mysqli_connect($server, $username, $password, $database);

if($conn){
    ?>
    <script>
        // alert ("Connection Successful");
    </script>
    <?php
}
else{
    ?>
    <script>
        // alert ("No Connection");
    </script>

    <?php
}

?>