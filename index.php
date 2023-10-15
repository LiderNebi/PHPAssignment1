<?php
// Database and header connected.
include "Includes/header.php";
require_once("database.php");

// Validation for submission
if(isset($_POST['Button'])){
    // Fetching data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $hours_worked = $_POST['hours_worked'];
    $wage = $_POST['wage'];
    $address = $_POST['address'];

   // An array for errors
    $errors = [];
  // Email validation
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "Invalid email format";
    }
  // Hours worked can not be negative and needs to be numeric
    if(!is_numeric($hours_worked) || $hours_worked < 0){
        $errors[] = "Invalid hours worked";
    }
  // Wage can't be negative, and needs to be number
    if(!is_numeric($wage) || $wage < 0){
        $errors[] = "Invalid wage value";
    }
    // Name, lastname and position can not be skipped
    if(empty($first_name) || empty($last_name) || empty($position)){
        $errors[] = "Required fields are empty";
    }
    //If there are no errors we can proceed
    if(empty($errors)){
      $sql = "INSERT INTO employee_info (first_name, last_name, email, position, hours_worked, hourly_rate, address) VALUES ('$first_name', '$last_name', '$email', '$position', $hours_worked, $wage, '$address')";
      //run the query
      if($conn->query($sql) === TRUE) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $conn->error;
      }
    } else {
       // Show error
        foreach($errors as $error){
            echo $error . "<br>";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link href="CSS/style.css" rel="stylesheet">
</head>



<body>
  <div class="form-box">
<form action="index.php" method="post" class="form">
        <label for="first_name" class="MyTable">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name" class="MyTable">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="email" class="MyTable">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="position" class="MyTable">Position:</label>
        <input type="text" id="position" name="position" required><br><br>

        <label for="hours_worked" class="MyTable">Hours Worked:</label>
        <input type="number" id="hours_worked" name="hours_worked" required><br><br>

        <label for="wage" class="MyTable">Hourly Rate: </label>
        <input type="number" id="wage" name="wage" required><br><br>

        <label for="address" class="MyTable">Address:</label>
        <textarea name="address" rows="7" cols="60"> </textarea> <br><br>

        <input type="submit" name="Button" value="Add Hours" class="button">
        
    </form>
</div>
</body>
<?php
include "Includes/footer.php";
$conn->close();
?>