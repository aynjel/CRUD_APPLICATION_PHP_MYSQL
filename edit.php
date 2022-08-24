<!DOCTYPE html>
<html>

<head>
	<title>IM 2 - Edit - Final Project</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/v4-shims.css">
	<style>
		body {
			background-color: #1b1717;
			color: #f8ede3;
		}

		input.in {
			width: 20rem;
			margin: 2% auto 0;
		}
	</style>
	<!-- <style>
		body{
			background-color: #325288;
			color: white;
		}
		form{
			width: 20rem;
		}
	</style> -->
</head>

<body>

	<div class="text-center mb-5 mt-5">
		<?php
			include('connect.php');
			$id = $_GET['id'];
			$query=mysqli_query($conn,"select * from `user` where id='$id'");
			$row=mysqli_fetch_array($query);
		?>
		<h2 class="text-center mb-5"><i class="fas fa-user-edit fa-2x"></i> Edit</h2>
		<form class="d-block mx-auto" method="post" action="update.php?id=<?php echo $id; ?>">

			<input class="form-control in text-center" type="text" value="<?php echo $row['firstname']; ?>"
				name="firstname">
			<label class="form-label">Firstname:</label>

			<input class="form-control in text-center" type="text" value="<?php echo $row['lastname']; ?>"
				name="lastname">
			<label class="form-label">Lastname</label>
			<div class="m-3 mt-5">
				<a href="edit-user-table.php" class="btn btn-outline-light mr-3">Back</a>
				<button class="btn btn-success" type="submit" name="submit">Save</button>
			</div>
		</form>
	</div>
	<!-- bootstrap -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
		integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
	</script>
	<!-- bootstrap -->
</body>

</html>