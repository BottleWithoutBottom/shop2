<?php
function getUsers():array {
    $sql = "SELECT * FROM users";
    $query = getQuery($sql);
    return $query->fetchAll();
}

function getUser(string $login): ?array {
    $sql = "SELECT * FROM users WHERE login = :login";
    $query = getQuery($sql, ['login' => $login]);
    $user = $query->fetch();
    return $user === false ? null : $user;
}


function regUser(array $info = []):bool {
    $login = $info['login'];
    $password = $info['password'];
    $phone = $info['phone'];
    $email = $info['email'];
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT users (login, password, phone, email) VALUES(:login, :password, :phone, :email)";
    $query = getQuery($sql, [
        'login' => $login,
        'password' => $passwordHash,
        'phone' => $phone,
        'email' => $email
    ]);
    return true;
}