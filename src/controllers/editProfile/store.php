<?php

namespace Models;
use Exception;
include 'views/Editprofile.view.php';
include 'views/partials/head.php';
include 'views/partials/nav.php';
include 'views/partials/banner.php';

session_start();

class EditProfile extends Database
{
    public function updateUserFirstname(array $param): bool
    {
        $sql = "UPDATE Users SET firstname = :firstname WHERE uid = :uid";
        return Database::exec($sql, $param);
    }

    public function updateUserLastname(array $param): bool
    {
        $sql = "UPDATE Users SET lastname = :lastname WHERE uid = :uid";
        return Database::exec($sql, $param);
    }

    public function updateUserEmail(array $param): bool
    {
        $sql = "UPDATE Users SET email = :email WHERE uid = :uid";
        return Database::exec($sql, $param);
    }

    public function updateUserPassword(array $param): bool
    {
        $sql = "UPDATE Users SET password = :password WHERE uid = :uid";
        return Database::exec($sql, $param);
    }

    public function editProfile()
    {
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
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $editProfile = new EditProfile();
    $editProfile->editProfile();
}