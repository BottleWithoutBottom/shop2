<?php

function addSession($user_id, $token):bool {

    $sql = "INSERT sessions (user_id, token) VALUES(:user_id, :token)";
    $params = [
        'user_id' => $user_id,
        'token' => $token
    ];
    getQuery($sql, $params);
    return true;
}

function getSession($token): ?array {
    $sql = "SELECT * FROM sessions WHERE token=:token";
    $query = getQuery($sql, ['token' => $token]);
    $session = $query->fetch();
    return $session === false ? null : $session;
}

function deleteSession($user):bool {
    unset($user);
    unset($_SESSION['token']);
    setcookie('token', '', time() - 1, $BASE_URL);
    return true;
}


