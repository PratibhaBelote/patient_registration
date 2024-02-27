<?php
    include('config/config.php');
?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>Patient Registration Form</title>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Patient Registration Form</h2>
    <p>Information of all patient</p>            
    <table class="table table-striped">
        <thead>
            <tr>
            <th>Sr. No.</th>
                <th>Patient name</th>
                <th>Mobile number</th>
                <th>Patient age</th>
                <th>Blood group</th>
                <th>Weight</th>    
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = " SELECT * from patient "; 
            $result = $conn->query($sql);
            $i=1;
            while($row = mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $row['patient_name'];?></td>
                <td><?php echo $row['mobile_number'];?></td>
                <td><?php echo $row['patient_age'];?></td>
                <td><?php echo $row['blood_group'];?></td>
                <td><?php echo $row['weight'];?></td>
                <td><a href="query.php?action=delete_registration&patient_id=<?php echo $row['patient_id'];?>">Delete</a>&nbsp;&nbsp;
                <a href="edit_register.php?action=edit_register&patient_id=<?php echo $row['patient_id'];?>">Edit</a></td>
            </tr>
            <?php $i++; } ?>
        </tbody>
     </table>
 </div>
</body>
</html>