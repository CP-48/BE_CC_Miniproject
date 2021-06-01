<?php
    require './includes/common.php';
    // if(isset($_SESSION['email'])){
    //     header('location:home.php');
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './includes/links.php'; ?>
    <title>Reset Password | Mobile Shoppee</title>
</head>
<body>
     <!-- Header -->
     <?php
            include './includes/header.php';
        ?>
    <!-- Header End -->

    <!-- Main -->
    <div class="content">
        <center>
            <h3 class="">Password Recovery</h3>
            <p>We'll send you an Email with the password reset link.</p>
            <form action="reset-req.php" method="POST" class="form-inline">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                </div>
                <input type="submit" class="btn btn-info" name="submit" value="Submit">
            </form>
        </center>
    </div>
    <!-- Main End -->

    <!-- Footer -->
    <?php
        include './includes/footer.php';
    ?>
    <!-- Footer End -->
</body>
</html>