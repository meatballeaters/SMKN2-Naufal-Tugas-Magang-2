<?php
include_once 'config/Database.php';
include_once 'class/Records.php';
$database = new Database();
$db = $database->getConnection();
$record = new Records($db);
if(!empty($_POST['action']) && $_POST['action'] == 'listRecords') {
	$record->listRecords();
}
if(!empty($_POST['action']) && $_POST['action'] == 'addRecord') {
	$record->name = $_POST["name"];
    $record->bayar = $_POST["bayar"];
    $record->pesanan = $_POST["pesanan"];
	$record->status = $_POST["status"];
	$record->jam = $_POST["jam"];
	$record->addRecord();
}
if(!empty($_POST['action']) && $_POST['action'] == 'getRecord') {
	$record->id = $_POST["id"];
	$record->getRecord();
}
if(!empty($_POST['action']) && $_POST['action'] == 'updateRecord') {
	$record->id = $_POST["id"];
	$record->name = $_POST["name"];
    $record->bayar = $_POST["bayar"];
    $record->pesanan = $_POST["pesanan"];
	$record->status = $_POST["status"];
	$record->jam = $_POST["jam"];
	$record->updateRecord();
}
if(!empty($_POST['action']) && $_POST['action'] == 'deleteRecord') {
	$record->id = $_POST["id"];
	$record->deleteRecord();
}
?>