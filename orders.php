<?php
    include './includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './includes/links.php'; ?>
    <title>Orders | Mobile Shoppee</title>
</head>
<body>
    <!-- Header -->
    <?php
        require './includes/header.php';  
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT products.name , products.price , users_products.status ,users_products.purchase_timestamp FROM users_products JOIN products ON users_products.product_id = products.pid and users_products.user_id = '$user_id'";
        $result = mysqli_query($con , $sql) or die (mysqli_error($con));
        $i=1;
    ?>
    <!-- !Header -->

    <!-- Main -->
        <div class="content">
          <div class="container">              
          <div class="row">
            <div class="jumbotron">
                <div class="container">
                    <h1 class="text-center" style="font-size:40px;">Orders</h1>
                </div>            
            </div>          
        </div>
        <table class="table table-striped table-responsive table-hover">
            <tr>
                <th>Sr No</th>
                <th>Name</th>
                <th>Price</th>
                <th>Status</th>
                <th>Time</th>
            </tr>
        <?php while($row=mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['status'] ?></td>
                <td><?php echo $row['purchase_timestamp'] ?></td>
            </tr>
        <?php } ?>
        </table>        
    </div>
          </div>
        </div>
    <!-- !Main -->

    <!-- Footer -->
    <?php
        require './includes/footer.php';
    ?>  
    <!-- !Footer -->
</body>
</html>