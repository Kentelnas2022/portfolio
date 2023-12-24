<?php
include 'dbcon.php';

// user registration
class UserRegistration {
    private $conn;

    // set up database
    public function __construct($connection) {
        $this->conn = $connection;
    }

    // Method to register a new user
    public function registerUser($username, $email, $password) {
        // Hash the password using bcrypt
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // SQL query to insert user data into the database
        $sql = "INSERT INTO tb_reglog (username, email, password) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $username, $email, $password_hash);

        // execute the query and handle success or failure
        if ($stmt->execute()) {
            header('Location: register_success.php');
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}

// Check if it's a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the POST data
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Create UserRegistration instance and register the user
    $userRegistration = new UserRegistration($conn);
    $userRegistration->registerUser($username, $email, $password);
}

// Close the database connection
$conn->close();
?>
