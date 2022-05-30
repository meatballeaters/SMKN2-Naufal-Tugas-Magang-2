<?php @include 'config.php'; 
session_start();
if(!isset($_SESSION['user_name'])){  
   header('location:../login/login_form.php');
}
?>
<?php include('inc/header.php');?>
<title>Data Pelanggan</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
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
						<h4>You are not admin, so you only can see the data.</h4>
					</div>
				</div>
			</div>
		</div>
<!--  -->
	<center><h2 style="color: white;">Data Customer</h2></center>
			<div class="panel-heading">
			</div>
		<table id="recordListing" class="table table-bordered table-striped-dark text-light" style="width:100%;">
			<thead>
				<tr>
					<th>No. Order</th>
					<th>Cust. Name</th>
					<th>Orders</th>
					<th>Orders Time</th>
					<th>Total</th>
					<th>Payment Status</th>
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
						<h4 class="modal-title"><i class="fa fa-plus"></i>Details Data</h4>
    				</div>
    				<div class="modal-body">
						<div class="form-group">
							<label for="name" class="control-label">Nama Pelanggan</label>
							<input type="text" class="form-control" id="name" name="name" disabled>
						</div>
						<div class="form-group"
							<label for="pesanan" class="control-label">Pesanan</label>
							<input type="text" class="form-control" id="pesanan" name="pesanan" required disabled>
						</div>
						<div class="form-group">
							<label for="lastname" class="control-label">Jam Pesan</label>
							<input type="text" class="form-control"  id="jam" name="jam" required disabled>
						</div>
						<div class="form-group">
							<label for="bayar" class="control-label">Total Pembayaran</label>
							<input type="number" class="form-control" id="bayar" name="bayar" disabled>
						</div>
						<div class="form-group">
							<label for="lastname" class="control-label">Status Pembayaran</label>
							<input type="text" class="form-control" id="status" name="status" disabled>
						</div>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
</div>
<?php include('inc/footer.php');?>