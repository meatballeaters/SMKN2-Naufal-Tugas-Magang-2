$(document).ready(function(){
	var dataRecords = $('#recordListing').DataTable({
		"lengthChange": false,
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
				// "targets":[0, 6, 7],
				"orderable": true,
			},
		],
		"pageLength": 5
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
			}
		})
	});
});