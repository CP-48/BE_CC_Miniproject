<?php
    require './includes/common.php';
    if(isset($_POST['submit'])){
        $mobile1 = $_POST['mobile1'];
        $mobile2 = $_POST['mobile2'];

        // echo $mobile1." ".$mobile2;

        $select_mobile_1 = "SELECT * FROM products WHERE pid = '$mobile1'";
        $select_mobile_2 = "SELECT * FROM products WHERE pid = '$mobile2'";

        $result_mobile_1 = mysqli_query($con , $select_mobile_1) or die (mysqli_error($con));
        $result_mobile_2 = mysqli_query($con , $select_mobile_2) or die (mysqli_error($con));

        $row_1 = mysqli_fetch_array($result_mobile_1);
        $name1 = $row_1['name'];
        $price1 = $row_1['price'];
        $battery1 = $row_1['battery'];
        $cameraBack1 = $row_1['camera back'];
        $cameraFront1 = $row_1['camera front'];
        $ram1 = $row_1['ram'];
        $rom1 = $row_1['rom'];
        $image1 = $row_1['image'];
        
        // echo '<img src="data:image/jpeg;base64,'.base64_encode($image1).'" height="200" width="200"/>';

        // echo "<img src='{'$image1'}'>";


        $row_2 = mysqli_fetch_array($result_mobile_2);
        $name2 = $row_2['name'];
        $price2 = $row_2['price'];
        $battery2 = $row_2['battery'];
        $cameraBack2 = $row_2['camera back'];
        $cameraFront2 = $row_2['camera front'];
        $ram2 = $row_2['ram'];
        $rom2 = $row_2['rom'];
        $image2 = $row_2['image'];

        header("location:compare.php?name1=".$name1."&price1=".$price1."&battery1=".$battery1."&cameraBack1=".$cameraBack1."&cameraFront1=".$cameraFront1."&ram1=".$ram1."&rom1=".$rom1."&name2=".$name2."&price2=".$price2."&battery2=".$battery2."&cameraBack2=".$cameraBack2."&cameraFront2=".$cameraFront2."&ram2=".$ram2."&rom2=".$rom2."&id1=".$mobile1."&id2=".$mobile2);
    }
?>