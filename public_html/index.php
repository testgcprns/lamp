<h1>Technical Exam!</h1>
<h4>Attempting MySQL connection from php...</h4>

<?php
$host = 'mysql'; // mysql container
$user = 'root'; // using root to connect to MySQL
$pass = 'rootpassword';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL successfully!";
}

?>
