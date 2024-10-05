<?php
include 'dbinfo.php'; // this is the database connection

$sql = "SELECT * FROM TBLinfo"; // Adjust this query as necessary
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='user-info'>";
        echo "<p><strong>Username:</strong> " . htmlspecialchars($row['username']) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($row['email']) . "</p>";
        echo "<p><strong>Password:</strong> " . htmlspecialchars($row['pass']) . "</p>";
        echo "<p><strong>Age:</strong> " . htmlspecialchars($row['age']) . "</p>";
        echo "<p><strong>YearLevel:</strong> " . htmlspecialchars($row['YearLevel']) . "</p>";
        echo "<p><strong>StudentNumber:</strong> " . htmlspecialchars($row['StudentNumber']) . "</p>";
        echo "</div><hr>";
    }
} else {
    echo "No data found.";
}

mysqli_close($conn);
?>
