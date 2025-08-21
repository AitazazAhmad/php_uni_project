<?php
include 'dbcon.php';
if (isset($_POST['submit_contact'])) {
    $f_name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    if ($f_name == "" || empty($f_name)) {
        header('location:index.html?message=you need to fill in the  name');
    } else {
        $query = "insert into `contact_us` (`name` , `phone_number` , `email` , `message`) values ('$f_name' , '$phone' , '$email' , '$message')";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("query failed" . mysqli_error());
        } else {
            header('location:index.html?insert_msg=your data has been added successfully!');
        }
    }
}
?>