<?php
/********************************
* FFXIBord installation script  *
*********************************/

$servername = "localhost";
$username = "root"; // Use a user with sufficient permissions
$password = "your_mysql_password";
// Connect without specifying a database name initially
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Read the SQL file content
$sql_queries = file_get_contents("install.sql");

// Execute multiple queries
if (mysqli_multi_query($conn, $sql_queries)) {
    echo "FFXIBord Installed! Please delete the install directory.!";
} else {
    echo "Error installing database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
