<?php
	include('connect.php');
	$id=$_GET['id'];
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	
	mysqli_query($conn,"update `user` set firstname='$firstname', lastname='$lastname' where id='$id'");

	header('location:edit-user-table.php');
	
?>