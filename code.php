<?php
//    session_start();
 require 'dbcon.php';
if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con,$_POST['delete_student']);
    $query = "DELETE  FROM product WHERE id ='$student_id'";
    $qurey_run = mysqli_query($con,$query);
    if($qurey_run){
        $_SESSION['message'] = "Student Delete Successfully";
        header("LOCATION:index.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Student Not Delete update";
        header("LOCATION:index.php");
        exit(0);
    }
}
 if(isset($_POST['update_student'])){
    $student_id = mysqli_real_escape_string($con , $_POST['student_id']);
    $name = mysqli_real_escape_string($con , $_POST['name']);
    $email = mysqli_real_escape_string($con , $_POST['email']);
    $phone = mysqli_real_escape_string($con , $_POST['phone']);
    $course = mysqli_real_escape_string($con , $_POST['course']);
    $query = "UPDATE product SET name='$name',email='$email',phone='$phone',course='$course' WHERE id ='$student_id'";
    $qurey_run = mysqli_query($con,$query);
    if($qurey_run){
        $_SESSION['message'] = "Student update Successfully";
        header("LOCATION:index.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Student Not update";
        header("LOCATION:index.php");
        exit(0);
    }
 }
if(isset($_POST['save_student'])){
$name = mysqli_real_escape_string($con , $_POST['name']);
$email = mysqli_real_escape_string($con , $_POST['email']);
$phone = mysqli_real_escape_string($con , $_POST['phone']);
$course = mysqli_real_escape_string($con , $_POST['course']);
    $query = "INSERT INTO product (name,email,phone,course) 
    VALUES  ('$name','$email','$phone','$course')";
    $qurey_run = mysqli_query($con,$query);
    if($qurey_run){
        $_SESSION['message'] = "Student Created Successfully";
        header("LOCATION:student_create.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Student Not Created Successfully";
        header("LOCATION:student_create.php");
        exit(0);
    }
}
?>