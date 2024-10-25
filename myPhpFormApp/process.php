<?php
// Function to sanitize input
function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Initialize variables for storing sanitized inputs
$name = $email = $age = "";
$errors = [];

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate the name
    if (empty($_POST['name'])) {
        $errors[] = "Name is required.";
    } else {
        $name = sanitizeInput($_POST['name']);
    }

    // Sanitize and validate the email
    if (empty($_POST['email'])) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    } else {
        $email = sanitizeInput($_POST['email']);
    }

    // Sanitize and validate the age
    if (empty($_POST['age'])) {
        $errors[] = "Age is required.";
    } elseif (!is_numeric($_POST['age'])) {
        $errors[] = "Age must be a number.";
    } else {
        $age = sanitizeInput($_POST['age']);
    }

    // File upload handling
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $uploadedFile = $_FILES['file']['tmp_name'];
        $destination = 'uploads/' . basename($_FILES['file']['name']);

        // Move uploaded file to the uploads directory
        if (move_uploaded_file($uploadedFile, $destination)) {
            echo "File uploaded successfully!<br>";
        } else {
            $errors[] = "Failed to upload file.";
        }
    } else {
        $errors[] = "No file uploaded or there was an error.";
    }

    // Display errors or success message
    if (empty($errors)) {
        echo "<h2>Form submitted successfully!</h2>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Age: $age<br>";
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>
