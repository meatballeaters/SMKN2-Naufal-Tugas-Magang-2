<?php
class Records {
	private $recordsTable = 'hanfood';
	public $id;
    public $name;
    public $pesanan;
	public $status;
	public $jam;
	public $bayar;
	private $conn;
	public function __construct($db){
        $this->conn = $db;
    }
	public function listRecords(){
		$sqlQuery = "SELECT * FROM ".$this->recordsTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR name LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR jam LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR status LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR pesanan LIKE "%'.$_POST["search"]["value"].'%") ';
		}
		if(!empty($_POST["order"])){
			$sqlQuery .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
		} else {
			$sqlQuery .= 'ORDER BY id DESC ';
		}
		if($_POST["length"] != -1){
			$sqlQuery .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}
		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->recordsTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;

		$displayRecords = $result->num_rows;
		$records = array();
		while ($record = $result->fetch_assoc()) {
			$rows = array();
			$rows[] = $record['id'];
			$rows[] = $record['name'];
			$rows[] = $record['pesanan'];
			$rows[] = $record['jam'];
			$rows[] = $record['bayar'];
			$rows[] = $record['status'];
			$rows[] = '<button type="button" name="view" id="'.$record["id"].'" class="btn btn-primary text-light btn-xs view">View</button>';
			// $rows[] = '<button type="button" name="update" id="'.$record["id"].'" class="btn btn-warning btn-xs update">Update</button>';
			// $rows[] = '<button type="button" name="delete" id="'.$record["id"].'" class="btn btn-danger btn-xs delete" >Delete</button>';
			$records[] = $rows;
		}
		$output = array(
			"draw"	=>	intval($_POST["draw"]),
			"iTotalRecords"	=> 	$displayRecords,
			"iTotalDisplayRecords"	=>  $allRecords,
			"data"	=> 	$records
		);
		echo json_encode($output);
	}
	public function getRecord(){
		if($this->id) {
			$sqlQuery = "SELECT * FROM ".$this->recordsTable."
			WHERE id = ?";
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->bind_param("i", $this->id);
			$stmt->execute();
			$result = $stmt->get_result();
			$record = $result->fetch_assoc();
			echo json_encode($record);
		}
	}
	// public function updateRecord(){
	// 	if($this->id) {
	// 		$stmt = $this->conn->prepare("UPDATE ".$this->recordsTable."SET name= ?, bayar = ?, pesanan = ?, status = ?, jam = ?
	// 		WHERE id = ?");
	// 		$this->id = htmlspecialchars(strip_tags($this->id));
	// 		$this->name = htmlspecialchars(strip_tags($this->name));
	// 		$this->bayar = htmlspecialchars(strip_tags($this->bayar));
	// 		$this->pesanan = htmlspecialchars(strip_tags($this->pesanan));
	// 		$this->status = htmlspecialchars(strip_tags($this->status));
	// 		$this->jam = htmlspecialchars(strip_tags($this->jam));
	// 		$stmt->bind_param("sisssi", $this->name, $this->bayar, $this->pesanan, $this->status, $this->jam, $this->id);
	// 		if($stmt->execute()){
	// 			return true;
	// 		}
	// 	}
	// }
	// public function addRecord(){
	// 	if($this->name) {
	// 		$stmt = $this->conn->prepare("INSERT INTO ".$this->recordsTable."(`name`, `bayar`, `pesanan`, `status`, `jam`)
	// 		VALUES(?,?,?,?,?)");
	// 		$this->name = htmlspecialchars(strip_tags($this->name));
	// 		$this->bayar = htmlspecialchars(strip_tags($this->bayar));
	// 		$this->pesanan = htmlspecialchars(strip_tags($this->pesanan));
	// 		$this->status = htmlspecialchars(strip_tags($this->status));
	// 		$this->jam = htmlspecialchars(strip_tags($this->jam));
	// 		$stmt->bind_param("sisss", $this->name, $this->bayar, $this->pesanan, $this->status, $this->jam);
	// 		if($stmt->execute()){
	// 			return true;
	// 		}
	// 	}
	// }
	// public function deleteRecord(){
	// 	if($this->id) {
	// 		$stmt = $this->conn->prepare("DELETE FROM ".$this->recordsTable."
	// 		WHERE id = ?");
	// 		$this->id = htmlspecialchars(strip_tags($this->id));
	// 		$stmt->bind_param("i", $this->id);
	// 		if($stmt->execute()){
	// 			return true;
	// 		}
	// 	}
	// }
}
?>