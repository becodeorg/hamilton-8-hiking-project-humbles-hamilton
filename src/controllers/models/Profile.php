<?php
namespace models;
use PDO;
use models\Database;

require 'partials/head.php'; 
require 'partials/nav.php'; 
require 'partials/banner.php'; 
require 'views/profile.view.php';


class Profile extends Database
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

    public function insertNewUser(array $param): array|bool
    {
        $sql = "
            INSERT INTO
            Users
            (
                firstname, lastname, nickname, email, password
            )
            VALUES
            (
                :firstname, :lastname, :nickname, :email, :password
            )
        ";
        $result = Database::exec($sql, $param);
        return [
            "bool" => $result,
            "uid" => Database::lastInsertId()
        ];
    }

}