<?php
include_once 'config/Database.php';
include_once 'class/Records.php';
$database = new Database();
$db = $database->getConnection();
$record = new Records($db);
if(!empty($_POST['action']) && $_POST['action'] == 'listRecords') {
	$record->listRecords();
}
if(!empty($_POST['action']) && $_POST['action'] == 'getRecord') {
	$record->id = $_POST["id"];
	$record->getRecord();
}
?>