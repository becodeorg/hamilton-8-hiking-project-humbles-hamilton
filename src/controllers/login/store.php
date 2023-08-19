
<?php
/*
namespace controllers;

use Exception;
use models\Database;

class AuthController 
{
    
    public function showLoginForm(): void
    {
        if (!empty($_GET['error_value'])){
        $error_value = $_GET['error_value'];
    }
        include_once 'partials/head.php';
        include_once 'partials/nav.php';
        include_once 'partials/banner.php';
        include_once 'views/login.view.php';        
        include_once 'partials/footer.php';
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
            throw new Exception('Incorrect email');
        }

        if (password_verify($passwordInput, $user['password']) === false) {
            throw new Exception('Incorrect password');
        }

        $_SESSION['user'] = [
            'id' => $user['id'],
            'email' => $email,
            'email' => $user['email']
        ];

        // Redirect to home page
        http_response_code(302);
        header('location: /');
    }
    
    public function loginVerification(array $POST): void
    {
        try{

        if(empty($_POST['email']) || empty($POST['password'])){
            throw new Exception("Incomplete form");
        }
        //filter
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception('Invalid email address');
        }
        //get user
        $user = user::getUserByEmail($email);
        if (empty($user)){
            throw new Exception("No existing account found");
        }

        if (!password_verify($POST['password'], $user['password'])) {
            throw new exception("Invalid password");
        }
        unset($_SESSION['user']);
        $_SESSION['user'] = array(
            "id" => $user['id'],
            "nickname" => $user['nickname'],
            "email" => $email
        );

        header('Location: /');
    }catch (Exception $e){
        $location = 'Location: /login?error_value=';
        $msg = $e->getMessage();

        switch ($msg){
            case "101":
                $location .= 'nodata';
                break;
            case "102":
                $location .= "nodb";
                break;
            case "201":
                $location .= "email";
                break;
            case "202":
                $location .= "pwd";
                break;
            default:
                header('Location: /error');
             }
             header($location);
        }
    }
    
    public function logout(): void
    {
        unset($_SESSION['user']);
        http_response_code(302);
        header('Location: /');
    }
}
*/

use core\Validator;

require basePath('/core/Validator.php');

$errors = [];

$savedText = [];

// User input
$userInput = [
    'email' => $_POST['email'],
    'password' => $_POST['password'],
];

if (!Validator::verifEmail($_POST['email'])) {
    $errors['email'] = 'Please provide a valid email address';
    $savedText['email'] = $_POST['email'];
}

if (empty($errors)) {
    try {
        $pdo = new PDO('dbname=hamilton-8-humbles');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

    $query = "SELECT * FROM `users` WHERE `email` = :email AND `password` = :password LIMIT 1";

    $loginStatement = $pdo->prepare($query);

    $loginStatement->execute([
        'email' => $userInput['email'],
        'password' => $userInput['password'],
    ]);

    $user = $loginStatement->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Successful login
        header('location: /');
        die();
    } else {
        // Invalid
        $errors['login'] = 'Invalid email or password';
    }
}

require basePath('views/login.view.php');
