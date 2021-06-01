<?php
    $code = $_POST['code'];
    $CODE = "OFF";
    // echo $code;
    // echo $CODE;
    if(strcmp($code , $CODE)!=0){
        $error = "<span class='red'>Invalid Code</span>";
        header("location:cart.php?error=".$error);
    }else{
        $m=1;
        header("location:cart.php?discount=".$m);
    }
?>