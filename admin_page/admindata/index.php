<?php include('inc/header.php');?>
<title>Data Admin</title>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/dataTables.bootstrap.min.css">
<script src="js/ajax.js"></script>
<?php include('inc/container.php');?>
<div class="container contact">
<!--  -->
	<button class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter"><span class="glyphicon glyphicon-info-sign"></span></button>
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content bg-dark text-light">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Information</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
					<div class="modal-body">
						<h4>You only can see the data, because "Update" tool is not available, LMAO.</h4>
					</div>
				</div>
			</div>
		</div>
<!--  -->
	<center><h2 style="color: white;">Data Admin</h2></center>
		<div class="panel-heading">
		<table id="recordListing" class="table table-bordered table-striped-dark text-light" style="width:100%;">
			<thead>
				<tr>
					<th>No.</th>
					<th>Name</th>
					<th>Email</th>
					<th>Password</th>
					<th>Role</th>
					<th></th>
				</tr>
			</thead>
		</table>
	</div>
<!--  -->
	<div id="recordModal" class="modal fade">
    	<div class="modal-dialog">
    		<form method="post" id="recordForm">
    			<div class="modal-content bg-dark text-light">
    				<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i></h4>
    				</div>
    				<div class="modal-body">
						<div class="form-group">
							<label for="name" class="control-label">Nama</label>
							<input type="text" class="form-control" id="name" name="name" disabled>
						</div>
						<div class="form-group"
							<label for="email" class="control-label">Email</label>
							<input type="text" class="form-control" id="email" name="email" disabled>
						</div>
						<div class="form-group">
							<label for="text" class="control-label">Kata sandi</label>
							<input type="text" class="form-control"  id="password" name="password" disabled>
						</div>
						<div class="form-group">
							<label for="text" class="control-label">Peran</label>
							<input type="text" class="form-control" id="user_type" name="user_type" disabled>
						</div>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
</div>
<?php include('inc/footer.php');?>