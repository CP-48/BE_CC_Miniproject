<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#myNav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>        
            <a href="index.php" class="navbar-brand">Mobile Shoppee</a>                
    </div>
    <div class="collapse navbar-collapse" id="myNav">
        <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['email'])) { ?>                
                <li class="dropdown text-center">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-shopping-cart"></span> Cart<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="cart.php" class="text-center">My Cart</a></li>
                        <li><a href="orders.php" class="text-center">My Orders</a></li>
                    </ul>
                </li>
                <!-- <li><a href="cart.php" class="text-center dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li> -->
                <li><a href="compare.php" class="text-center"><span class="glyphicon glyphicon-menu-left"></span><span class="glyphicon glyphicon-menu-right"></span> Compare</a></li>
                <li><a href="settings.php" class="text-center"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                <li><a href="logout.php" class="text-center"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>                                
            <?php } else { ?>
                <li><a href="about.php" class="text-center"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                <li><a href="contact.php" class="text-center"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                <li><a href="signup.php" class="text-center"><span class="glyphicon glyphicon-user"></span> Signup</a></li>
                <li><a href="" class="text-center" type="button" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <!-- <li><a href="login.php" class="text-center"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
            <?php } ?>
        </ul>
    </div>
</div>
</nav>


<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title text-center">
            Login
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="glyphicon glyphicon-remove"></span>
        </button>
        </h2>
      </div>
      <div class="modal-body">
            <form class="form" action="login_script.php" method="POST">
                <div class="form-group">
                    <p>Don't have an Account? <a href="signup.php">Register</a></p>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" pattern=".{6,}" placeholder="Enter Password" required>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary" >Login</button>
                </div>
                <div class="form-group">
                    <p><a href="reset-password.php">Forgot Password?</a></p>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>
