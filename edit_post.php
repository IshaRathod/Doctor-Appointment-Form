<?php
include "con_task.php";

$id = $_POST['id'];

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$phone = $_POST["phone"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];
$city = $_POST["city"];
$state = $_POST["state"];
$pincode = $_POST["pincode"];
$email = $_POST["email"];
$previous_application = $_POST["previous_application"];
$department = $_POST["department"];
$procedure = $_POST["procedure"];
// $date = $_POST["date"];
$status = 1;
$created_date = date('Y-m-d h:i:s');

$query = "UPDATE userdata SET firstname = '$firstname', lastname='$lastname', dob='$dob', gender='$gender', phone='$phone',address1='$address1',address2='$address2',city='$city',state='$state',pincode='$pincode',email='$email',previous_application='$previous_application',department='$department',procedure='$procedure', WHERE id = $id";

$executeQuery = $connection->query($query);
if($executeQuery){
    header("Location: table.php?msg=ID $id updated") ;
    //echo "Record Inserted Successfully";
} else {
    header("Location: task.php?msg=You have some errors in your form data");
}
