<?php 
include 'include/db.php';

$current_date =date('Y-m-d');
$update_query = "UPDATE `airlines` SET `date_deleted`='". $current_date."' WHERE airline_id=" . $_GET['id'];

$res = mysqli_query($conn, $update_query);

if($res){
	header('Location: index.php');
}else {
	die('Delete failed' . mysqli_error($conn));
}