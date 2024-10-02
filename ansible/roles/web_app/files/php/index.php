<?php
$servername = "db";
$username = getenv('MYSQL_USER') ?: 'test_user';
$password = getenv('MYSQL_PASSWORD') ?: 'test_password';
$dbname = getenv('MYSQL_DATABASE') ?: 'test_db';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

if ($result === false) {
    echo "Connection failed:" . $conn->error;
    exit;
}

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>