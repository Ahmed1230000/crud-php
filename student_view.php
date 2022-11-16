<?php
// session_start();
require 'dbcon.php';
include 'code.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Student
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                            if(isset($_GET['id'])){
                                $student_id = mysqli_real_escape_string($con,$_GET['id']);
                                $quary = "SELECT *FROM product WHERE id='$student_id'";
                                $qurey_run = mysqli_query($con,$quary);
                                if(mysqli_num_rows($qurey_run) > 0 ){
                                    $student = mysqli_fetch_array($qurey_run);
                                    ?>
                                    <form action="" method="POST">
                                        <input type="hidden" name="student_id" value="<?=$student['id'];?>">
                                        <p type="hidden" name="student_id" value="<?=$student['id'];?>">

                                        </p>
                                            <div class="mb-3">
                                                <label>Student Name</label>
                                                
                                                <p type="text" name="name" class="form-control">
                                                <?=$student['name'];?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Student email</label>
                                                <p type="text" name="email" class="form-control">
                                                <?=$student['email'];?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Student phone</label>
                                                <p type="text" name="phone" class="form-control">
                                                <?=$student['phone'];?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Student course</label>
                                                <p type="text" name="course" class="form-control">
                                                <?=$student['course'];?>
                                                </p>
                                            </div>
                                    </form>
                                    <?php
                                }else{
                                    echo 'Not found data';
                                }
                            }
                        ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>