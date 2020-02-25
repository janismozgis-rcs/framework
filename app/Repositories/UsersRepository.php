<?php

class UsersRepository
{
    public static function getUserByEmail(string $email): ?User
    {
        $query = DB::$connection->prepare("SELECT * FROM users WHERE email = :email");
        $query->execute(['email' => $email]);

        $user = $query->fetchObject('User');

        if ($user) {
            return $user;
        }

        return null;
    }

    public static function createUser(array $data): void
    {
        $query = DB::$connection->prepare("INSERT INTO userss SET email = :email, first_name = :firstName, last_name = :lastName, password = :password");
        $query->execute([
            'email' => $data['email'],
            'firstName' => $data['first-name'],
            'lastName' => $data['last-name'],
            'password' => $data['password'],
        ]);
    }
}