<?php
include "con_task.php";

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

$query = "INSERT INTO userdata(firstname,lastname,dob,gender,phone,address1,address2,city,state,pincode,email,previous_application,department,procedure) VALUES ('$firstname','$lastname','$dob','$gender','$phone','$address1','$address2','$city','$state','$pincode','$email','$previous_application','$department','$procedure')";

// INSERT INTO userdata (agreement, choice_text, choice_value, is_checked)
// VALUES ('Yes, I Do', 'Yes, I Do', 'Yes, I Do', 1),
//        ('No, I Don\'t', 'No, I Don\'t', 'No, I Don\'t', 0);

$rs = $connection->query($query);

if($rs)
{
    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<title>Insertion Success</title>';
    // Include Bootstrap CSS
    echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">';
    echo '</head>';
    echo '<body>';
    // JavaScript for showing alert box
    echo '<script>';
    echo 'alert("Contact Records Inserted Successfully!");';
    echo 'window.location = "task.php";'; // Redirect to a page after showing the alert
    echo '</script>';
    echo '</body>';
    echo '</html>';
}

?>
