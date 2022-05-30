<?php @include 'config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login/login_form.php');
}
?>
<?php include('inc/header.php');?>
<title>Data Pelanggan (Admin)</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
<script src="js/ajax.js"></script>
<?php include('inc/container.php');?>
<div class="container contact">
	<center><h2 style="color: white;">Data Customer</h2></center>
		<div class="panel-heading">
			<div class="row">
				<h3 class="panel-title"></h3>
				<button type="button" name="add" id="addRecord" class="btn btn-outline-primary text-light">Tambah data baru</button>
			</div>
		</div>
		<table id="recordListing" class="table table-bordered table-striped-dark text-light" style="width:100%;">
			<thead>
				<tr>
					<th>No. Pelanggan</th>
					<th>Nama Pelanggan</th>
					<th>Pesanan</th>
					<th>Waktu Pesan</th>
					<th>Total Pembayaran</th>
					<th>Status Pembayaran</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
		</table>
	</div>
	<div id="recordModal" class="modal fade">
    	<div class="modal-dialog">
    		<form method="post" id="recordForm">
    			<div class="modal-content bg-dark text-light">
    				<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i>Edit Data</h4>
    				</div>
    				<div class="modal-body">
						<div class="form-group">
							<label for="name" class="control-label">Nama Pelanggan</label>
							<input type="text" class="form-control" id="name" name="name">
						</div>
						<div class="form-group"
							<label for="pesanan" class="control-label">Pesanan</label>
							<input type="text" class="form-control" id="pesanan" name="pesanan" required>
						</div>
						<div class="form-group">
							<label for="lastname" class="control-label">Jam Pesan</label>
							<input type="text" class="form-control"  id="jam" name="jam" required>
						</div>
						<div class="form-group">
							<label for="bayar" class="control-label">Total Pembayaran</label>
							<input type="number" class="form-control" id="bayar" name="bayar">
						</div>
						<div class="form-group">
							<label for="lastname" class="control-label">Status Pembayaran</label>
							<input type="text" class="form-control" id="status" name="status">
						</div>
    				</div>
    				<div class="modal-footer">
    					<input type="hidden" name="id" id="id" />
    					<input type="hidden" name="action" id="action" value="" />
    					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
</div>
<?php include('inc/footer.php');?>