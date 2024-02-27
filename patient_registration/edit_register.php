<?php
include('config/config.php');
 $sql = " SELECT * from patient WHERE patient_id='".$_GET['patient_id']."'"; 
 $result = $conn->query($sql);
 $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<meta http-equiv="X-UA-Compatible" content="ie=edge" >
<title>Patient Registration Form</title>
<link rel="stylesheet" href="main.css">
</head>
<body>
<section class="container">
<header>Patient Registration Form</header>
<form action="query.php" method="post">
<div class="input-box">
    <label>Patient name</label>
    <input type="text" id="patient_name" name="patient_name" placeholder="Enter name" required value="<?php echo $row['patient_name'];?>" />
</div>
  <div class="input-box">
    <label>Mobile number</label>
    <input type="text" id="mobile_number" name="mobile_number" placeholder="Enter number" required value="<?php echo $row['mobile_number']; ?>" />
  </div>
  <div class="input-box">
    <label>Patient age</label>
    <input type="text" id="patient_age" name="patient_age" placeholder="Enter age" required value="<?php echo $row['patient_age']; ?>" />
  </div>
  <div class="input-box">
    <label>Blood group</label>
    <input type="text" id="blood_group" name="blood_group" placeholder="Enter blood group" required value="<?php echo $row['blood_group']; ?>" />
  </div>
  <div class="input-box">
    <label>Weight</label>
    <input type="text" id="weight" name="weight" placeholder="Enter Weight" required value="<?php echo $row['weight']; ?>" /> 
    
  </div>
  <input type="hidden" name="action" value="update_register"/>
  <input type="hidden" name="patient_id" value="<?php echo $row['patient_id'];?>" />
  <button type="submit">Update</button>
</form>
</section>
</body>
</html>


