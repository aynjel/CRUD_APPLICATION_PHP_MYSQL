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
        thead{
            font-weight: bold;
        }
    </style>
</head>

<body>
<a type="button" class="btn btn-primary m-3" href="index.php">
                            <i class="fas fa-home"></i>
                        </a>
    <div class="d-flex justify-content-center mt-5">
        <form action="addUser.php" method="POST" class="m-5">
            <table class="table table-hover text-white text-center table-bordered">
                <thead>
                    <td><label for="" class="form-label">Firstname</label></td>
                    <td><label for="" class="form-label">Lastname</label></td>
                </thead>
                <tbody>
                    <td><input type="text" name="firstname" class="form-control text-center"></td>
                    <td><input type="text" name="lastname" class="form-control text-center"></td>
                </tbody>
            </table>
            <input type="submit" name="add" value="Submit" class="btn btn-outline-light mt-4 d-block mx-auto">
        </form>
    </div>
    <div class="mx-5">
        <table class="container table">
            <tr class="d-flex justify-content-center mb-5">
                <td>
                    <button type="button" class="btn btn-warning mx-auto d-block mt-5" data-toggle="modal"
                        data-target="#staticBackdrop">
                        <i class="fas fa-users fa-2x"></i>
                    </button>
                </td>

                <td>
                    <a type="button" class="btn btn-warning mx-auto d-block mt-5" href="edit-user-table.php">
                    <i class="fas fa-users-cog fa-2x"></i>
                    </a>
                </td>
            </tr>
        </table>
    </div>


    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable text-dark">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-users fa-2x"></i> Users List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-dark table-hover text-center table-bordered">
                        <thead>
                            <tr>
                                <td>Firstname</td>
                                <td>Lastname</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                   include 'connect.php';
                                    
                                    $sql="SELECT * FROM user;";
                                    
                                    try{
                                        $result = mysqli_query($conn,$sql);
                                        
                                        while($row=mysqli_fetch_assoc($result)){ 
                                ?>
                            <tr>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>

                                <?php
                                        }
                                    }
                                    catch(mysqli_sql_exception $error){
                                        mysqli_close($connection);
                                        echo $error.mysqli_error($conn);
                                    }
                                    
                                    mysqli_close($conn);
                                
                                ?>

                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
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