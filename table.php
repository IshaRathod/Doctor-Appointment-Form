<?php
    include "con_task.php";
    $query = "SELECT * FROM userdata";
    $execute = $connection->query($query);

    $record = array();

    if ($execute->num_rows > 0) {
        while ($row = $execute->fetch_assoc()) {
            $record[] = $row;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="new.css"></link> -->
    <!-- Include Bootstrap CSS link in your HTML file -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="table.css">
</head>
<body>
    <div class="container">
        <div class="row">
    <table id="example" class="display">
        <thead class="thead-dark">
            <tr class="trow">
                <th>ID</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>dob</th>
                <th>gender</th>
                <th>phone</th>
                <th>address1</th>
                <th>address2</th>
                <th>city</th>
                <th>state</th>
                <th>pincode</th>
                <th>email</th>
                <th>previous_application</th>
                <th>department</th>
                <th>procedure</th>
             
                <th>Edit</th>
                <th>Delete</th>
                <th>New</th>
            </tr>
        </thead>
        <tfoot>
          
        <?php if (!empty($record)): ?>
            <?php foreach ($record as $value) : ?>
                <tr>
                    <td><?php echo $value['id']; ?><td>
                    <td><?php echo $value['firstname']; ?><td>
                    <td><?php echo $value['lastname']; ?><td>
                    <td><?php echo $value['dob']; ?><td>
                    <td><?php echo $value['gender']; ?><td>
                    <td><?php echo $value['phone']; ?><td>
                    <td><?php echo $value['address1']; ?><td>
                    <td><?php echo $value['address2']; ?><td>
                    <td><?php echo $value['city']; ?><td>
                    <td><?php echo $value['state']; ?><td>
                    <td><?php echo $value['pincode']; ?><td>
                    <td><?php echo $value['email']; ?><td>
                    <td><?php echo $value['previous_application']; ?><td>
                    <td><?php echo $value['department']; ?><td>
                    <td><?php echo $value['procedure']; ?><td>
                   
                    
                    <!-- <td><a href="edit.php?id=<?php echo $value['id']; ?>">Edit</a> | <a href="delete.php=<?php echo $value['id']; ?>">Delete</a></td> -->
                    <td><a class="btn btn-info" href="edit.php?id=<?php echo $value['id']; ?>">Edit</a>
                     &nbsp;
                     <a class="btn btn-danger" href="dlt.php?id=<?php echo $value['id']; ?>"onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                     <a class="btn btn-info" href="datapost.php?id=<?php echo $value['id']; ?>">New</a></td>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php else: ?>
            <tr>
                <td colspan="10" style="text-align: center;">No Records Found</td>
            </tr>
        <?php endif; ?>      
        </tfoot>
    </table>
        </div>
    </div>

</body>
</html>
