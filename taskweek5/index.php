<?php
session_start(); // Start the session to store error messages

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $image = $_FILES['image'];
    // echo "<pre>";
    // print_r($image);
    // echo "</pre>";
    $target_dir = "uploads/";

    // Create directory if it doesn't exist
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    $target_file = $target_dir . basename($image["name"]);
    $uploadOk = 1; // initial value 
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image
    $check = getimagesize($image["tmp_name"]);
    if ($check === false) {
        $_SESSION['error'] = "File is not an image.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
        $_SESSION['error'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check file size (less than 1MB)
    if ($image["size"] > (1024 * 1024)) { // 1MB = 1024 * 1024 bytes
        $_SESSION['error'] = "Sorry, your file is too large. Maximum size is 1MB.";
        $uploadOk = 0;
    }

    // Proceed if no errors
    if ($uploadOk == 1) {
        if (move_uploaded_file($image["tmp_name"], $target_file)) {
            // Prepare data to store in JSON
            $data = [
                'name' => $name,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT), // Hash the password
                'image' => $target_file
            ];

            // Read existing data from JSON file
            $jsonFile = 'database.json';
            $existingData = [];
            if (file_exists($jsonFile)) {
                $existingData = json_decode(file_get_contents($jsonFile), true);
            }

            // Add new data to the existing data
            $existingData[] = $data;

            // Write back to JSON file
            file_put_contents($jsonFile, json_encode($existingData, JSON_PRETTY_PRINT));

            $_SESSION['success'] = "Registration successful! Image uploaded.";
            header("Location: display.php"); // Redirect to display page
            exit;
        } else {
            $_SESSION['error'] = "Sorry, there was an error uploading your image.";
        }
    } else {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}
// Display messages
$error = !empty($_SESSION['error']) ? $_SESSION['error'] : '';
$success = !empty($_SESSION['success']) ? $_SESSION['success'] : '';
session_unset(); // Clear session variables after displaying them
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
  </head>
  <body>
    <h2>Registration Form</h2>
    
    <?php if ($error) { echo "<p style='color:red;'>$error</p>"; } ?>
    <?php if ($success) { echo "<p style='color:green;'>$success</p>"; } ?>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="image">Upload Image:</label><br>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>
        
        <input type="submit" value="Register">
    </form>

  </body>
</html>

