$(document).ready(function(){
	var dataRecords = $('#recordListing').DataTable({
		stateSave: true,
		"scrollX": true,
		"lengthChange": true,
		"processing":	true,
		"serverSide":	true,
		'processing': 	true,
		'serverSide': 	true,
		'serverMethod': 'post',
		"order":[],
		"ajax":{
			url:"ajax_action.php",
			type:"POST",
			data:{action:'listRecords'},
			dataType:"json"
		},
		"columnDefs":[
			{
				"targets":[0, 6, 7],
				"orderable": true,
			},
		],
		"pageLength": 5
	});
	$('#addRecord').click(function(){
		$('#recordModal').modal('show');
		$('#recordForm')[0].reset();
		$('.modal-title').html("<i class='fa fa-plus'></i> Add Record");
		$('#action').val('addRecord');
		$('#save').val('Add');
	});
	$("#recordListing").on('click', '.update', function(){
		var id = $(this).attr("id");
		var action = 'getRecord';
		$.ajax({
			url:'ajax_action.php',
			method:"POST",
			data:{id:id, action:action},
			dataType:"json",
			success:function(data){
				$('#recordModal').modal('show');
				$('#id').val(data.id);
				$('#name').val(data.name);
				$('#bayar').val(data.bayar);
				$('#pesanan').val(data.pesanan);
				$('#status').val(data.status);
				$('#jam').val(data.jam);
				$('.modal-title').html("<i class='fa fa-plus'></i> Edit Records");
				$('#action').val('updateRecord');
				$('#save').val('Save');
			}
		})
	});
	$("#recordListing").on('click', '.view', function(){
		var id = $(this).attr("id");
		var action = 'getRecord';
		$.ajax({
			url:'ajax_action.php',
			method:"POST",
			data:{id:id, action:action},
			dataType:"json",
			success:function(data){
				$('#recordModal').modal('show');
				$('#id').val(data.id);
				$('#name').val(data.name);
				$('#bayar').val(data.bayar);
				$('#pesanan').val(data.pesanan);
				$('#status').val(data.status);
				$('#jam').val(data.jam);
				$('.modal-title').html("<i class='fa fa-plus'></i> Details Data");
			}
		})
	});
	$("#recordModal").on('submit','#recordForm', function(event){
		event.preventDefault();
		$('#save').attr('disabled','disabled');
		var formData = $(this).serialize();
		$.ajax({
			url:"ajax_action.php",
			method:"POST",
			data:formData,
			success:function(data){
				$('#recordForm')[0].reset();
				$('#recordModal').modal('hide');
				$('#save').attr('disabled', false);
				dataRecords.ajax.reload(null, false);
			}
		})
	});
	$("#recordListing").on('click', '.delete', function(){
		var id = $(this).attr("id");
		var action = "deleteRecord";
		if(confirm("Are you sure you want to delete this record?")) {
			$.ajax({
				url:"ajax_action.php",
				method:"POST",
				data:{id:id, action:action},
				success:function(data) {
					dataRecords.ajax.reload(null, false);
				}
			})
		} else {
			return true;
		}
	});
});