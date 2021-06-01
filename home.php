<?php
    include './includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './includes/links.php'; ?>
    <title>Home | Mobile Shoppee</title>
</head>
<body>
    <!-- Header -->
    <?php
            include './includes/header.php';
            include './includes/check_if_added.php';
            $user_id = $_SESSION['user_id'];
            $email = $_SESSION['email'];
        ?>
    <!-- Header End -->

    <!-- Main -->
        <div class="content">
            <div class="jumbotron">
            <div class="container">
                    <?php
                        $email = $_SESSION['email'];
                        $query = "SELECT name FROM users WHERE email = '$email'";
                        $result = mysqli_query($con , $query) or die(mysqli_error($con));
                        $row = mysqli_fetch_array($result);
                        $name = $row ['name'];
                        echo "<h2 class='text-center'>Welcome, ".$name."</h1>";
                    ?>
                </div>
            <!-- <form  class="navbar-form text-center">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <input type="submit" class="btn btn-default">
            </form>                 -->
            </div>
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-md-3">
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>Brands</h4>
                                </div>
                                <div class="panel-body">
                                    <ul style="list-style:none">
                                        <li><a href="#apple" class="brand-a btn btn-default btn-block">Apple</a></li>
                                        <li><a href="#one-plus" class="brand-a btn btn-default btn-block">One Plus</a></li>
                                        <li><a href="#samsung" class="brand-a btn btn-default btn-block">Samsung</a></li>
                                        <li><a href="#redmi" class="brand-a btn btn-default btn-block">Redmi</a></li>
                                        <li><a href="#oppo" class="brand-a btn btn-default btn-block">Oppo</a></li>                                    
                                        <li><a href="#realme" class="brand-a btn btn-default btn-block">Realme</a></li>
                                        <li><a href="#sony" class="brand-a btn btn-default btn-block">Sony</a></li>
                                        <li><a href="#blackberry" class="brand-a btn btn-default btn-block">Blackberry</a></li>                                        
                                    </ul>
                                </div>
                            </div>                            
                        </div>
                    </div>

                    <div class="col-md-9">
                    <div class="panel-group">
                        <div class="panel panel-default" id="apple">
                            <div class="panel-heading"><h3>Apple</h3></div>    
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <img src="./img/iphone-7.jpg" class="img-responsive img-phone" alt="">
                                            </div>
                                            <div class="panel-footer">
                                                <h4 class="p-bold">iPhone 7</h4>
                                                <p>Battery : 3400mAH</p>
                                                <p>Camera : 12MP | 16MP Front Camera</p>
                                                <p>RAM : 8GB ROM:256GB</p>
                                                <p class="p-bold">Price : 29,999/-</p>
                                                <?php if(check_if_added_to_cart(1)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                    <div class="panel panel-default">
                                            <div class="panel-body">
                                                <img src="./img/iphone-8.jpg" class="img-responsive img-phone" alt="">
                                            </div>
                                            <div class="panel-footer">
                                                <h4 class="p-bold">iPhone 8</h4>
                                                <p>Battery : 3400mAH</p>
                                                <p>Camera : 20MP | 16MP Front Camera</p>
                                                <p>RAM : 8GB ROM:128GB</p>
                                                <p class="p-bold">Price : 41,999/-</p>
                                                <?php if(check_if_added_to_cart(2)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                    <div class="panel panel-default">
                                            <div class="panel-body">
                                                <img src="./img/iphone-xr.jpg" class="img-responsive img-phone" alt="">
                                            </div>
                                            <div class="panel-footer">
                                                <h4 class="p-bold">iPhone XR</h4>
                                                <p>Battery : 4085mAH</p>
                                                <p>Camera : 20MP + 16MP | 16MP Front Camera</p>
                                                <p>RAM : 8GB ROM:256GB</p>
                                                <p class="p-bold">Price : 53,999/-</p>
                                                <?php if(check_if_added_to_cart(3)) {
                                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                                } else {?>
                                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <img src="./img/iphone-xs-max.jpg" class="img-responsive img-phone" alt="">
                                            </div>
                                            <div class="panel-footer">
                                                <h4 class="p-bold">iPhone XS Max</h4>
                                                <p>Battery : 3400mAH</p>
                                                <p>Camera : 42MP + 20MP | 16MP Front Camera</p>
                                                <p>RAM : 8GB ROM:256GB</p>
                                                <p class="p-bold">Price : 99,999/-</p>
                                                <?php if(check_if_added_to_cart(4)) {
                                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                                } else {?>
                                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    

                        <!-- One Plus -->
                        <div class="panel panel-default" id="one-plus">
                            <div class="panel-heading"><h3>One Plus</h3></div>    
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <img src="./img/one-plus-3.jpg" class="img-responsive img-phone" alt="">
                                            </div>
                                            <div class="panel-footer">
                                                <h4 class="p-bold">One Plus 3T</h4>
                                                <p>Battery : 4000mAH</p>
                                                <p>Camera : 13MP +8MP | 20MP Front Camera</p>
                                                <p>RAM : 6GB ROM:64GB</p>
                                                <p class="p-bold">Price : 35,999/-</p>
                                                <?php if(check_if_added_to_cart(5)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                    <div class="panel panel-default">
                                            <div class="panel-body">
                                                <img src="./img/one-plus-6.jpg" class="img-responsive img-phone" alt="">
                                            </div>
                                            <div class="panel-footer">
                                                <h4 class="p-bold">One Plus 6</h4>
                                                <p>Battery : 4000mAH</p>
                                                <p>Camera : 48MP + 13MP + 8MP | 20MP Front Camera</p>
                                                <p>RAM : 6GB ROM:64GB</p>
                                                <p class="p-bold">Price : 40,999/-</p>
                                                <?php if(check_if_added_to_cart(6)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                    <div class="panel panel-default">
                                            <div class="panel-body">
                                                <img src="./img/one-plus-7T.jpg" class="img-responsive img-phone" alt="">
                                            </div>
                                            <div class="panel-footer">
                                                <h4 class="p-bold">One Plus 7T</h4>
                                                <p>Battery : 3800mAH</p>
                                                <p>Camera : 48MP +8MP + 16MP | 16MP Front Camera</p>
                                                <p>RAM : 8GB ROM:128GB</p>
                                                <p class="p-bold">Price : 35,999/-</p>
                                                <?php if(check_if_added_to_cart(7)) {                                    
                                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                                } else {?>                                    
                                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <img src="./img/one-plus-7T-pro.jpg" class="img-responsive img-phone" alt="">
                                            </div>
                                            <div class="panel-footer">
                                                <h4 class="p-bold">One Plus 7T Pro</h4>
                                                <p>Battery : 4085mAH</p>
                                                <p>Camera : 48MP +8MP + 16MP | 16MP Front Camera</p>
                                                <p>RAM : 8GB ROM:128GB</p>
                                                <p class="p-bold">Price : 47,999/-</p>
                                                <?php if(check_if_added_to_cart(8)) {
                                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                                } else {?>
                                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Samsung -->
                        <div class="panel panel-default" id="samsung">
                            <div class="panel-heading"><h3>Samsung</h3></div>    
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                        <div class="panel-body"><img src="./img/samsung-galaxy-a51.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                                            <div class="panel-footer">
                                                <h4 class="p-bold">Samsung Galaxy A51</h4>
                                                <p>Battery : 4200mAH</p>
                                                <p>Camera : 12MP + 8MP | 20MP Front Camera</p>
                                                <p>RAM : 8GB ROM:256GB</p>
                                                <p class="p-bold">Price : 25,250/-</p>
                                                <?php if(check_if_added_to_cart(9)) {
                                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                                } else {?>
                                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                    <div class="panel panel-default">
                                    <div class="panel-body"><img src="./img/samsung-galaxy-s-9.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                                            <div class="panel-footer">
                                                <h4 class="p-bold">Samsung Galaxy S9</h4>
                                                <p>Battery : 4200mAH</p>
                                                <p>Camera : 24MP + 16MP | 16MP Front Camera</p>
                                                <p>RAM : 8GB ROM:256GB</p>
                                                <p class="p-bold">Price : 30,999/-</p>
                                                <?php if(check_if_added_to_cart(10)) {
                                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                                } else {?>
                                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                    <div class="panel panel-default">
                                    <div class="panel-body"><img src="./img/samsung-galaxy-s10.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                                            <div class="panel-footer">
                                                <h4 class="p-bold">Samsung Galaxy S10</h4>
                                                <p>Battery : 3400mAH</p>
                                                <p>Camera : 20MP + 20MP| 16MP Front Camera</p>
                                                <p>RAM : 12GB ROM:1024GB</p>
                                                <p class="p-bold">Price : 1,29,999/-</p>
                                                <?php if(check_if_added_to_cart(11)) {
                                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                                } else {?>
                                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                        <div class="panel-body"><img src="./img/samsung-galaxy-s20-ultra.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                                            <div class="panel-footer">
                                                <h4 class="p-bold">Samsung Galaxy S20 </h4>
                                                <p>Battery : 3400mAH</p>
                                                <p>Camera : 48MP + 13MP + 8MP | 16MP Front Camera</p>
                                                <p>RAM : 8GB ROM:256GB</p>
                                                <p class="p-bold">Price : 97,999/-</p>
                                                <?php if(check_if_added_to_cart(12)) {
                                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                                } else {?>
                                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Redmi -->
                        <div class="panel panel-default" id="redmi">
                            <div class="panel-heading"><h3>Redmi</h3></div>    
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <img src="./img/mi-note-6.jpg" class="img-responsive img-phone" alt="">
                                            </div>
                                            <div class="panel-footer">
                                                <h4 class="p-bold">Redmi Note 6</h4>
                                                <p>Battery : 3600mAH</p>
                                                <p>Camera : 13MP | 16MP Front Camera</p>
                                                <p>RAM : 6GB ROM:32GB</p>
                                                <p class="p-bold">Price : 8,999/-</p>
                                                <?php if(check_if_added_to_cart(13)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                    <div class="panel panel-default">
                                            <div class="panel-body">
                                                <img src="./img/mi-note-7.jpg" class="img-responsive img-phone" alt="">
                                            </div>
                                            <div class="panel-footer">
                                                <h4 class="p-bold">Redmi Note 7 Pro</h4>
                                                <p>Battery : 3800mAH</p>
                                                <p>Camera : 13MP + 8MP  | 20MP Front Camera</p>
                                                <p>RAM : 6GB ROM:64GB</p>
                                                <p class="p-bold">Price : 14,999/-</p>
                                                <?php if(check_if_added_to_cart(14)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                    <div class="panel panel-default">
                                    <div class="panel-body"><img src="./img/mi-note-8.jpg" class="img-responsive img-phone" alt="Phone"></div>
                                            <div class="panel-footer">
                                                <h4 class="p-bold">Redmi Note 8</h4>
                                                <p>Battery : 4000mAH</p>
                                                <p>Camera : 48MP + 20MP + 16MP | 16MP Front Camera</p>
                                                <p>RAM : 6GB ROM:64GB</p>
                                                <p class="p-bold">Price : 9,999/-</p>
                                                <?php if(check_if_added_to_cart(15)) {
                                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                                } else {?>
                                                    <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                        <div class="panel-body"><img src="./img/mi-redmi-k20-pro.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                                            <div class="panel-footer">
                                                <h4 class="p-bold">Redmi K20 Pro</h4>
                                                <p>Battery : 3400mAH</p>
                                                <p>Camera : 48MP + 13MP + 8MP | 16MP Front Camera</p>
                                                <p>RAM : 8GB ROM:256GB</p>
                                                <p class="p-bold">Price : 29,999/-</p>
                                                <?php if(check_if_added_to_cart(16)) {
                                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                                } else {?>
                                                    <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Main End -->

    <!-- Footer -->
    <?php
        include './includes/footer.php';
    ?>
    <!-- Footer End -->
</body>
</html>