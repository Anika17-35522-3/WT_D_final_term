<?php 
include 'main_header.php';
include 'controllers/UserController.php';
?>
<!--login starts -->
<div class="center-login">
<h1 class="text text-center">Login</h1>
<h2 class="text-danger"><?php echo $err_db;?></h2>
<form action="" method="post" class="form-horizontal form-material">
<div class="form-group">
<h3 class="text">Username</h3> 
<input type="text" name="uname" value="<?php echo $uname;?>" class="form-control">
<span class="text-danger"><?php echo $err_uname;?></span>
</div>
<div class="form-group">
<h3 class="text">Password</h3> 
<input type="password" name="pass"  class="form-control">
<span class="text-danger"><?php echo $err_pass;?></span>
</div>
<div class="form-group text-center">
<input type="submit" name="btn_login" class="btn btn-danger" value="Login" class="form-control">
</div>
<div class="form-group text-center">
<a href="signup.php" >Not registered yet? Sign Up</a>
</div>
</form>
</div>
<!--login ends -->
<?php include 'main_footer.php';?>