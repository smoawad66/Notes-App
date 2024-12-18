<?php

namespace Core;

class Authenticator
{

    public function attempt($email, $password)
    {
        $user = App::resolve(Database::class)->query("SELECT * FROM users WHERE email = ?", [$email])->find();

        if ($user && password_verify($password, $user['password'])) {
            $this->login($user);
            return true;
        }
        return false;
    }

    public function login($user)
    {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
        ];

        session_regenerate_id(true);
    }

    public function logout(){Session::destroy();}
}
