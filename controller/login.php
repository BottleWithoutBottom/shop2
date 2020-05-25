<?php
include_once('model/auth.php');
include_once('model/sessions.php');

$auth = [
    'login' => '',
    'password' => '',
    'remember' => ''
];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $auth['login'] = $_POST['login'];
    $auth['password'] = $_POST['password'];
    $auth['remember'] = $_POST['remember'];
    $user = getUser($auth['login']);

    if (password_verify($auth['password'], $user['password']) ) {
        $token = random_bytes(128);
        $token16 = bin2hex($token);
        $token16 = substr($token16, 0, 128);
        addSession($user['user_id'], $token16);
        $_SESSION['token'] = $token16;
        if ($auth['remember']) {
            setcookie('token', $token16, time() + 20, $BASE_URL);
        }
        header("Location:$BASE_URL");
        exit();


    } else {
        echo 'dumbass';
    }
}

$title = 'Войти';
$content = template('v_login', [
    'auth' => $auth
]);