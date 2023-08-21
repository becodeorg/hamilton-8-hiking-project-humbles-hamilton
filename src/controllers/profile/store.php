<?php
/*
use PDO;

require 'partials/head.php'; 
require 'partials/nav.php'; 
require 'partials/banner.php'; 
require 'views/profile.view.php';


class Profile
{

    public function getUserById(string|int $id): array|bool
    {
        $sql = "SELECT * FROM Users WHERE id = :id";
        $result = Database::query($sql, ["id" => $id]);
        return $result->fetch();
    }

    public function getUserByEmail(string $email): array|bool
    {
        $sql = "SELECT * FROM Users WHERE email = :email";
        $result = Database::query($sql, ["email" => $email]);
        return $result->fetch();
    }

}
require 'partials/footer.php';

*/

require 'partials/head.php'; 
require 'partials/nav.php'; 
require 'partials/banner.php'; 
require 'views/profile.view.php';
require 'Database.php';

session_start();

function getUserById(int|string $id): array|bool
{
    $sql = "SELECT * FROM Users WHERE id = :id";
    $result = Database::query($sql, ["id" => $id]);
    return $result->fetch();
}

function getUserByEmail(string $email): array|bool
{
    $sql = "SELECT * FROM Users WHERE email = :email";
    $result = Database::query($sql, ["email" => $email]);
    return $result->fetch();
}

require 'partials/footer.php';