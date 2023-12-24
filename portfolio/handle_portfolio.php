<?php
function addPortfolioItem($conn) {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];

        // File upload handling
        $targetDir = "uploads/";
        $imageName = uniqid() . '_' . basename($_FILES["image"]["name"]);
        $targetFile = $targetDir . $imageName;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if the file is an image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            // Check file size (you can modify this value as needed)
            if ($_FILES["image"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
            } else {
                // Allow only certain file formats (add more if needed)
                $allowedExtensions = ["jpg", "jpeg", "png", "gif"];
                if (!in_array($imageFileType, $allowedExtensions)) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                } else {
                    // Check if the "uploads" directory exists or create it
                    if (!file_exists($targetDir)) {
                        mkdir($targetDir, 0777, true);
                    }

                    // Check if the directory has proper permissions
                    if (!is_writable($targetDir)) {
                        echo "Error: The directory is not writable.";
                    } else {
                        // Upload the file
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                            // Insert data into the database
                            $sql = "INSERT INTO portfolio_items (title, description, image) VALUES ('$title', '$description', '$targetFile')";
                            if (mysqli_query($conn, $sql)) {
                                
                                echo "New record added successfully";
                            } else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                }
            }
        } else {
            echo "File is not an image.";
        }
    }
}
?>
