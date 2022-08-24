<?php
	$id=$_GET['id'];
	include 'connect.php';
	mysqli_query($conn,"delete from `user` where id='$id'");
	header('location:edit-user-table.php');
?>