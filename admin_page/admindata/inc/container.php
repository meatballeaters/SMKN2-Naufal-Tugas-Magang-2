</head>
<body style="background-color:black;color:white;">
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" style="padding-left: 20px; padding-right: 20px;">
      <a class="navbar-brand text-white">Data |<b> Admin</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      </button>            
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="../admin_page.php"><span class="glyphicon glyphicon-home"></span> Home</a>
          </li>
          <li class="nav-item dropdown">
          <a href="#" class="dropdown-toggle text-light" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data</a>
            <ul class="dropdown-menu">
              <li><a href="../../admin_page/index.php">Customer</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="">Data Pengguna</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../login/logout.php" style="color: red;" onclick="return confirm('Are you sure want to logout?')"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
          </li>
        </ul>
      </div>
  </nav> -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../admin_page.php">Home</a>
  <a href="../../admin_page/index.php">Customers</a>
  <a href="">Admin/User data</a>
  <a href="#">Review</a>
  <a href="#">About</a>
  <a href="../../login/logout.php">Logout</a>
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
<!-- <div class="container" style="min-height:500px;"> -->