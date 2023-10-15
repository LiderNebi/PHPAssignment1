<?php

// Database and header connected.
include "Includes/header.php";
require_once("database.php");

// Fetching records from our table named employee_info
$sql = "SELECT * FROM employee_info";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Records</title>
    <link href="CSS/style.css" rel="stylesheet">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Position</th>
                <th>Hours Worked</th>
                <th>Hourly Rate</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['first_name'] ?></td>
                    <td><?= $row['last_name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['position'] ?></td>
                    <td><?= $row['hours_worked'] ?></td>
                    <td><?= $row['hourly_rate'] ?></td>
                    <td><?= $row['address'] ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
<?php
include "Includes/footer.php";
?>
</html>