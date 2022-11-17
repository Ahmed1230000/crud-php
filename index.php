<?php
session_start();
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CURD | Aplication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Details
                        <a href="student_create.php" class="btn btn-primary float-end">Add student</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Student Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Course</th>
                                    <th>ِAction</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query =  "SELECT *FROM product";
                                $qurey_run = mysqli_query($con,$query);
                                if(mysqli_num_rows($qurey_run) > 0){
                                    foreach($qurey_run as $student){                                       
                                        ?>
                                            <tr>
                                                <td><?= $student['id'];?></td>
                                                <td><?= $student['name'];?></td>
                                                <td><?= $student['email'];?></td>
                                                <td><?= $student['phone'];?></td>
                                                <td><?= $student['course'];?></td>
                                                <td>
                                                    <a href="student_view.php?id=<?= $student['id'];?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="student_edit.php?id=<?= $student['id'];?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_student" value="<?=$student['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                }else{
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>