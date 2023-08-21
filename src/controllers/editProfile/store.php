<?php

namespace Models;
use PDO;
use Exception;
include 'views/Editprofile.view.php';
include 'views/partials/head.php';
include 'views/partials/nav.php';
include 'views/partials/banner.php';

class EditProfile extends Database
{
    public function editProfile (){
         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $newFirstName = $_POST['firstname'];
        $newLastName = $_POST['lastname'];
        $newNickname = $_POST['nickname'];
        $newEmail = $_POST['email'];
        $newPassword = $_POST['password'];
        $newPasswordConfirm = $_POST['passwordConfirm'];
    
        $user['firstName'] = $newFirstName;
        $user['lastName'] = $newLastName;
        $user['nickname'] = $newNickname;
        $user['email'] = $newEmail;
    }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Generate a random confirmation token
    $confirmation_token = bin2hex(random_bytes(32));

    $new_email = $_POST["new_email"];

    $subject = "Email Change Confirmation";
    $message = "Click the following link to confirm your email change: ";
    $message .= "http://" . $confirmation_token;

    $headers = "From: your@example.com";
    mail($new_email, $subject, $message, $headers);

    echo "Email sent successfully! Check your inbox to see your email change confirmation.";
    }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_FILES["photo"]["error"] == UPLOAD_ERR_OK) {
        $targetDir = "uploads/"; // Set the target directory to store uploaded images
        $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
        
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Upload error: " . $_FILES["photo"]["error"];
    }
}
