<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IM 2 - Final Project</title>
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

        a.add {
            width: 4rem;
        }
    </style>
</head>

<body>
<div class="text-center m-5"><i class="fas fa-users-cog fa-4x"></i></div>

    <div class="d-flex justify-content-center mt-5 container">
    
        <table class="table table-dark table-hover text-center table-bordered">
            <thead>
                <tr>
                    <td><i class="far fa-user fa-2x"></i> <i class="fas fa-hashtag"></i></td>
                    <td>Firstname</td>
                    <td>Lastname</td>
                </tr>
            </thead>
            <tbody>

                <?php
					include 'connect.php';
					$query=mysqli_query($conn,"select * from `user`");
					while($row=mysqli_fetch_array($query)){
						?>
                <tr>
                    <td scope="col"><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td>
                        <a class="btn btn-info" href="edit.php?id=<?php echo $row['id']; ?>"><i class="fas fa-edit"></i> Edit</a>
                        <a class="btn btn-outline-danger" href="delete.php?id=<?php echo $row['id']; ?>"><i class="fas fa-trash-alt"></i> Remove</a>
                    </td>
                </tr>
                <?php
					}
				?>

            </tbody>
        </table>

    </div>
    <a href="main.php" class="btn btn-outline-light d-block mx-auto mt-4 add"><i class="fas fa-user-plus fa-2x"></i></a>
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