<?php
// Database connection settings
$host = 'localhost'; // your database host
$db = 'account'; // your database name
$user = 'root'; // your database username
$pass = ''; // your database password

// Create a database connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle registration when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Basic validation
    if (empty($username) || empty($password) || empty($confirm_password)) {
        echo "All fields are required.";
    } elseif ($password !== $confirm_password) {
        echo "Passwords do not match.";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Check if username already exists
        $checkUser = $conn->query("SELECT * FROM users WHERE username='$username'");
        if ($checkUser->num_rows > 0) {
            echo "Username already taken.";
        } else {
            // Insert new user into the database
            $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
            if ($conn->query($sql) === TRUE) {
                echo "Registration successful! You can now log in.";
            } else {
                echo "Error: " . $conn->error;
            }
        }
    }
}
$conn->close();
?>
