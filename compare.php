<?php
    include './includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './includes/links.php'; ?>
    <title>Compare | Mobile Shoppee</title>
</head>
<body>
    <!-- Header -->
    <?php
        require './includes/header.php';
    ?>
    <!-- !Header -->

    <!-- Main -->
        <div class="content">
            <h2 class="text-center">Compare Phones</h2>
            
            <div class="row">
                <div class="col-md-12 col-md-offset-4">                
                    <!-- <form action="compare_script.php" method="POST" class="form-inline">
                    
                    </form>
                     -->
                    <form action="compare_script.php" class="form-inline" method="POST">                        
                    <div class="form-group">
                        <select name="mobile1" class="select">
                        <option value="">Choose a Phone</option>
                            <?php                                
                                $select_all_phones = "SELECT * from products";                
                                $result = mysqli_query($con , $select_all_phones) or die(mysqli_error($con));
                                while($row=mysqli_fetch_array($result)){                                      
                                    echo "<option value='{$row['pid']}'>";
                                    echo $row['name'];
                                    echo "</option>";    
                                 }?>
                        </select>
                    </div>
                        <div class="form-group">
                        <select name="mobile2">
                        <option value="">Choose a Phone</option>
                            <?php                                
                                $select_all_phones = "SELECT * from products";                
                                $result = mysqli_query($con , $select_all_phones) or die(mysqli_error($con));
                                while($row=mysqli_fetch_array($result)){                                      
                                    echo "<option value='{$row['pid']}'>";
                                    echo $row['name'];
                                    echo "</option>";    
                                 }?>
                        </select>
                        </div>                    
                        <div class="form-group">
                        <input type="submit" class="btn btn-info btn-compare" value="Compare" name="submit">
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <br>

            <div class="row">   
            <div class="col-xs-12">
            <div class="container">
            <?php if(isset($_GET['name1']) && isset($_GET['price1']) && isset($_GET['battery1']) && isset($_GET['cameraBack1']) && isset($_GET['cameraFront1']) && isset($_GET['ram1']) && isset($_GET['rom1'])  ) {?>
             <table class="table table-striped table-bordered table-responsive table-hover" style="overflow-x:hidden;">
                <thead>
                    <th></th>
                    <th>
                        <?php 
                            $id1=$_GET['id1'];
                            $select_mobile_1 = "SELECT * FROM products WHERE pid = $id1";
                            $result_mobile_1 = mysqli_query($con , $select_mobile_1) or die (mysqli_error($con));
                            $row_1 = mysqli_fetch_array($result_mobile_1);
                            $image1 = $row_1['image'];
                            echo '<img src="data:image/jpeg;base64,'.base64_encode($image1).'"class="img-responsive img-phone"/>';
                        ?>
                    </th>
                    <th>
                    <?php 
                            $id2=$_GET['id2'];
                            $select_mobile_2 = "SELECT * FROM products WHERE pid = $id2";
                            $result_mobile_2 = mysqli_query($con , $select_mobile_2) or die (mysqli_error($con));
                            $row_2 = mysqli_fetch_array($result_mobile_2);
                            $image2 = $row_2['image'];
                            echo '<img src="data:image/jpeg;base64,'.base64_encode($image2).'"" height="200" class="img-responsive img-phone""/>';
                        ?>
                    </th>
                </thead>
                <tbody>                    
                    <tr>
                        <td class="p-bold">Name</td>
                        <td><?php echo $_GET['name1'] ?></td>
                        <td><?php echo $_GET['name2'] ?> </td>
                    </tr>
                    <tr>
                        <td class="p-bold">Price</td>
                        <td><?php echo "₹ ".$_GET['price1'] ?></td>
                        <td><?php echo "₹ ".$_GET['price2'] ?> </td>
                    </tr>
                    <tr>
                        <td class="p-bold">Battery</td>
                        <td><?php echo $_GET['battery1'] ?></td>
                        <td><?php echo $_GET['battery2'] ?> </td>
                    </tr>
                    <tr>
                        <td class="p-bold">Camera Back</td>
                        <td><?php echo $_GET['cameraBack1'] ?></td>
                        <td><?php echo $_GET['cameraBack2'] ?> </td>
                    </tr>
                    <tr>
                        <td class="p-bold">Camera Front</td>
                        <td><?php echo $_GET['cameraFront1'] ?></td>
                        <td><?php echo $_GET['cameraFront2'] ?> </td>
                    </tr>
                    <tr>
                        <td class="p-bold">RAM</td>
                        <td><?php echo $_GET['ram1'] ?></td>
                        <td><?php echo $_GET['ram2'] ?> </td>
                    </tr>
                    <tr>
                        <td class="p-bold">ROM</td>
                        <td><?php echo $_GET['rom1'] ?></td>
                        <td><?php echo $_GET['rom2'] ?> </td>
                    </tr>
                </tbody>
             </table>
            <?php }?>
            </div>
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