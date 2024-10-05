<?php
include 'dbinfo.php'; // this is the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $age = htmlspecialchars($_POST['age']);
    $yearlevel = htmlspecialchars($_POST['YearLevel']);
    $studentnumber = htmlspecialchars($_POST['StudentNumber']);

    // This is the mysql query command to call out the table that purpose to add a new records inside the table  from the database
    $sql = "INSERT INTO TBLinfo (username, email, pass, age, YearLevel, StudentNumber) 
            VALUES ('$username', '$email', '$password', '$age', '$yearlevel', '$studentnumber')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
