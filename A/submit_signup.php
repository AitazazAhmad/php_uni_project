<?php
include 'dbcon.php';
if (isset($_POST['submit_signup'])) {
    $f_name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_pass'];


    if ($f_name == "" || empty($f_name)) {
        header('location:index.html?message=you need to fill in the first name');
    } else {
        $query = "insert into `sign_up` (`full_name` , `email` , `password` , `confirm_password`) values ('$f_name' , '$email' , '$password' , '$confirm_password')";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("query failed" . mysqli_error());
        } else {
            header('location:index.html?insert_msg=your data has been added successfully!');
        }
    }
}
?>