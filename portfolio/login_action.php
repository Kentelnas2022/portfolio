<?php
include 'dbcon.php';

//  authenticate user credentials
class UserAuthenticator {
    private $conn;

    // Constructor to set up the database connection
    public function __construct($connection) {
        $this->conn = $connection;
    }

    // method sa pag authenticate user by username and password
    public function authenticateUser($username, $password) {
        // SQL query fetch user data based on username
        $sql = "SELECT * FROM tb_reglog WHERE username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        // If user found
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $hashedPassword = $user['password'];

                //verify pass with hash
            if (password_verify($password, $hashedPassword)) {
    
                session_start();
                $_SESSION['user_id'] = $user['id'];

                if ($user['role'] == 'admin') {
                    header('Location: admin_dashboard.php');
                } else {
                    header('Location: user_dashboard.php');
                }

                $stmt->close();
                exit();
            } else {
                // Redirect with error message for incorrect password
                $this->redirectWithError("Incorrect password");
            }
        } else {
            // Redirect with error message for unregistered account
            $this->redirectWithError("This Account is not Registered.");
        }
    }

    // Method to redirect with error message
    private function redirectWithError($errorMessage) {
        header("Location: reglog.php?error=$errorMessage");
        exit();
    }
}

// Check if it's a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Create UserAuthenticator instance and authenticate user
    $userAuthenticator = new UserAuthenticator($conn);
    $userAuthenticator->authenticateUser($username, $password);
}

$conn->close();
?>
