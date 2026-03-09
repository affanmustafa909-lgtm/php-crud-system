<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body>


    <div class="container">
        <div class="row">
            <h2 class="text-center text-primary my-2">Our Products (CRUD) </h2>

            <div>
                <a href="index.php" class='btn btn-success my-3'>Add New Products</a>
            </div>

            <?php
            include 'conn.php';


            $view = "SELECT * FROM `add_product`";

            $query = mysqli_query($conn, $view);

            while ($result = mysqli_fetch_array($query)) {




            ?>


                <!-- Table for displaying products -->


                <table class="table table-striped table-bordered table-hover text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($result = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $i++; ?>
                                </th>
                                <td><img src="uploads/<?php echo $result['p_image']; ?>" width="100px" alt="">
                                </td>
                                <td>
                                    <?php echo $result['product_Name']; ?>
                                </td>
                                <td>
                                    <?php echo $result['product_Des']; ?>
                                </td>
                                <td>
                                    <?php echo $result['price']; ?>
                                </td>
                                <td>
                                    <a href="update.php?id=<?php echo $result['id']; ?>"><i class="far fa-edit ms-3"></i></a>
                                    <a href="delete.php?id=<?php echo $result['id']; ?>"><i class="far fa-trash-alt ms-3 text-danger"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

            <?php
            }
            ?>

        </div>
    </div>

</body>

</html>