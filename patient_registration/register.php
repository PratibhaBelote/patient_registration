<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>Patient Registration Form</title>
<link rel="stylesheet" href="main.css">
</head>
<body>
<section class="container">
<header>Patient Registration Form</header>
<form action="query.php" method="post">
  <div class="input-box">
    <label>Patient name</label>
    <input type="text" id="patient_name" name="patient_name" placeholder="Enter name" required />
  </div>
  <div class="input-box">
    <label>Mobile number</label>
    <input type="text" id="mobile_number" name="mobile_number" placeholder="Enter number" required />
  </div>
  <div class="input-box">
    <label>Patient age</label>
    <input type="text" id="patient_age" name="patient_age" placeholder="Enter age" required />
  </div>
  <div class="input-box">
    <label>Blood group</label>
    <input type="text" id="blood_group" name="blood_group" placeholder="Enter blood group" required />
  </div>
  <div class="input-box">
    <label>Weight</label>
    <input type="text" id="weight" name="weight" placeholder="Enter Weight" required />
  </div>
  <input type="hidden" name="action" value="register"/>
  <button type="submit">Submit</button>
</form>
</section>
</body>
</html>



<!-- 
 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>Patient Registration Form</title>
<link rel="stylesheet" href="main.css">
<script>
  function validateForm() {
    var patientName = document.getElementById("patient_name").value.trim();
    var mobileNumber = document.getElementById("mobile_number").value.trim();
    var patientAge = document.getElementById("patient_age").value.trim();
    var bloodGroup = document.getElementById("blood_group").value.trim();
    var weight = document.getElementById("weight").value.trim();

    // Check if any field is empty
    if (patientName === "" || mobileNumber === "" || patientAge === "" || bloodGroup === "" || weight === "") {
      alert("All fields are required");
      return false; // Prevent form submission
    }

    // Check if mobile number is valid
    if (!/^\d{10}$/.test(mobileNumber)) {
      alert("Mobile number must be a 10-digit number");
      return false; // Prevent form submission
    }

    // Check if patient age is a number
    if (isNaN(patientAge) || parseInt(patientAge) <= 0) {
      alert("Patient age must be a valid number greater than zero");
      return false; // Prevent form submission
    }

    // Check if weight is a number
    if (isNaN(weight) || parseFloat(weight) <= 0) {
      alert("Weight must be a valid number greater than zero");
      return false; // Prevent form submission
    }

    return true; // Allow form submission
  }
</script>
</head>
<body>
<section class="container">
<header>Patient Registration Form</header>
<form action="query.php" method="post" onsubmit="return validateForm()">
  <div class="input-box">
    <label>Patient name</label>
    <input type="text" id="patient_name" name="patient_name" placeholder="Enter name" required />
  </div>
  <div class="input-box">
    <label>Mobile number</label>
    <input type="text" id="mobile_number" name="mobile_number" placeholder="Enter number" required />
  </div>
  <div class="input-box">
    <label>Patient age</label>
    <input type="text" id="patient_age" name="patient_age" placeholder="Enter age" required />
  </div>
  <div class="input-box">
    <label>Blood group</label>
    <input type="text" id="blood_group" name="blood_group" placeholder="Enter blood group" required />
  </div>
  <div class="input-box">
    <label>Weight</label>
    <input type="text" id="weight" name="weight" placeholder="Enter Weight" required />
  </div>
  <input type="hidden" name="action" value="register"/>
  <button type="submit">Submit</button>
</form>
</section>
</body>
</html> -->
