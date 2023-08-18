<?php

declare(strict_types=1);

namespace controllers;

use Exception;
use models\Database;

class AuthController
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function register(string $firstnameInput, string $lastnameInput, string $nicknameInput, string $emailInput, string $passwordInput)
    {
        if (empty($firstnameInput) || empty($lastnameInput) || empty($nicknameInput) || empty($emailInput) || empty($passwordInput)) {
            throw new Exception('Incomplete form');
        }

        $firstname = htmlspecialchars($firstnameInput);
        $lastname = htmlspecialchars($lastnameInput);
        $nickname = htmlspecialchars($nicknameInput);
        $email = filter_var($emailInput, FILTER_SANITIZE_EMAIL);
        $passwordHash = password_hash($passwordInput, PASSWORD_DEFAULT);

        $this->db->query(
            "
                INSERT INTO users (firstname, lastname, nickname, email, password) 
                VALUES (?, ?, ?, ?, ?)
            ",
            [$firstname, $lastname,  $email, $passwordHash]
        );

        $_SESSION['user'] = [
            'id' => $this->db->lastInsertId(),
            'nickname' => $nickname,
            'email' => $email
        ];

        http_response_code(302);
        header('location: /');
    }

    public function showRegistrationForm()
    {
        include 'views/partials/head.php';
        include 'views/partials/nav.php';
        include 'views/register.view.php';
        include 'views/partials/footer.php';
    }

    public function login(string $emailInput, string $passwordInput)
    {
        if (empty($emailInput) || empty($passwordInput)) {
            throw new Exception('Incomplete form');
        }

        $email = filter_var($emailInput, FILTER_SANITIZE_EMAIL);

        $stmt = $this->db->query(
            "SELECT * FROM users WHERE email = ?",
            [$email]
        );

        $user = $stmt->fetch();

        if (empty($user)) {
            throw new Exception('Incorrect email address');
        }

        if (password_verify($passwordInput, $user['password']) === false) {
            throw new Exception('Incorrect password');
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            // Send email to the user
            $to = $user['email'];
            $subject = "Subscription Confirmation";
            $message = "Thank you for subscribing!";

            if (mail($to, $subject, $message)) {
                echo "Email sent successfully! Check your inbox to see your subscription confirmation.";
            } else {
                echo "Email sending failed.";
            }
        }

        $_SESSION['user'] = [
            'id' => $user['id'],
            'email' => $user['email']
        ];

        // Redirect to home page
        http_response_code(302);
        header('location: /');
    }

    public function showLoginForm()
    {
        include 'views/partials/head.php';
        include 'views/partials/nav.php';
        include 'views/login.view.php';
        include 'views/partials/footer.php';
    }

    public function logout()
    {
        unset($_SESSION['user']);
        http_response_code(302);
        header('location: /');
    }
}