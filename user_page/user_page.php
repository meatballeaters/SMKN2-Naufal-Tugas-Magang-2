<?php @include 'config.php'; 
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User page</title>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/sidenavbar.css">
</head>
<body style="background-color: black;">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="">Home</a>
  <a href="index.php">Customers</a>
  <a href="#">Review</a>
  <a href="#">About</a>
  <a href="../login/logout.php">Logout</a>
</div>
<span style="font-size:40px;cursor:pointer;color:white;margin-left:10px;" onclick="openNav()">&#9776;</span>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<div class="container">
   <div class="content">
      <h3><span>User</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['user_name']?></span></h1>
      <p>User page</p>
      <!-- <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a> -->
      <!-- <a href="../login/logout.php" class="btn">Logout</a>
      <a href="index.php" class="btn">Look the data</a> -->
   </div>
</div>
</body>
</html>