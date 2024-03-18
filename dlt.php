<?php
include "con_task.php";
if (isset($_GET['id'])) {
    $stu_id = $_GET['id'];
    $sql = "DELETE FROM userdata WHERE id ='$stu_id'";
     $result = $connection->query($sql);
     if ($result == TRUE) {
        echo '<div class="alert alert-success" role="alert">Record deleted successfully.</div>';
        header('Location: table.php');
    }else{
        echo "Error:" . $sql . "<br>" . $con_task->error;
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Appointment Form</title>
    <style>
        /* body {
    font-family: Arial, sans-serif;
} */

body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .form-container {
            width: 50%;
            margin: auto;
            padding: 20px 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

/* .container {
    width: 50%;
    margin: auto;
} */

h1 {
    text-align: center;
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
select,
textarea {
    width: 100%;
    padding: 5px;
    margin-bottom: 15px;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 15px;
}

.row > * {
    flex: 1;
    margin-right: 10px;
    margin-bottom: 10px;
}

input[type="date"],
input[type="tel"],
input[type="email"],
select[name="gender"],
select[name="previous_application"],
select[name="procedure"],
select[name="department"] {
    width: 80%;
    padding: 5px;
    margin-bottom: 15px;
    
}

.calendar,
.time-slot {
    width: 100%;
    padding: 5px;
    margin-bottom: 15px;
}

.btn {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    margin-top: 10px;
    width: 100%;
}

.btn:hover {
    background-color: #45a049;
}
    </style>
</head>
<body>
    <div class="form-container">
    <div class="container">
        <h1>Doctor Appointment Form</h1>
        <form>
            <div class="row">
                <label>First Name:</label>
                <input type="text" name="firstname" required>
            </div>
            <div class="row">
                <label>Last Name:</label>
                <input type="text" name="lastname" required>
            </div>
            <div class="row">
                <label>Date of Birth:</label>
                <input type="date" name="dob" required>
            </div>
            <div class="row">
                <label>Gender:</label>
                <select name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="row">
                <label>Phone Number:</label>
                <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
            </div>
            <div class="row">
                <label>Address:</label>
                <input type="text" name="address1" required>
            </div>
            <div class="row">
                <label>Street Address Line 2:</label>
                <input type="text" name="address2">
            </div>
            <div class="row">
                <label>City:</label>
                <input type="text" name="city" required>
            </div>
            <div class="row">
                <label>State:</label>
                <input type="text" name="state" required>
            </div>
            <div class="row">
                <label>Pincode:</label>
                <input type="number" name="pincode" required>
            </div>
            <div class="row">
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="row">
                <label>Have you ever applied to our facility before?</label>
                <select name="previous_application" required>
                    <option value="">Select an option</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="row">
                <label>Which department would you like to get an appointment from?</label>
                <input type="text" name="department" required>
            </div>
            <div class="row">
                <label>Which procedure do you want to make an appointment for?</label>
                <select name="procedure" required>
                    <option value="">Select a procedure</option>
                    <option value="medical_examination">Medical Examination</option>
                    <option value="doctor_check">Doctor Check</option>
                    <option value="result">Result</option>
                    <option value="check_up">Check-up</option>
                </select>
            </div>
            <div class="row">
                <label>Preferred Appointment Date:</label>
                <input type="date" name="preferred_date" required>
            </div>
            
            
            <div class="row">
                <input type="submit" value="Submit" class="btn">
            </div>
        </form>
        </div>
    </div>
</body>
</html>