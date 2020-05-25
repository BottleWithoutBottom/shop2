<?php
include_once('core/getTemplate.php');
include_once('init.php');


include_once('core/parseUrl.php');

session_start();

$userToken = $_SESSION['token'] ?? $_COOKIE['token'] ?? null;
$user = null;

if ($userToken !== null) {
    $session = getSession($userToken);
    $user = getUserById($session['user_id']);

    if ($user === null) {
        unset($_SESSION['token']);
        setcookie('token', '', time() - 1, $BASE_URL);
    }
}

$regSuccessful = false;
if (isset($_SESSION['reg.success'])) {
    $regSuccessful = true;
    unset($_SESSION['reg.success']);
}
$BASE_URL = '/shop/';
$url = $_GET['someShopUrl'];
$routes = include('routes.php');
$routeRes = parseUrl($url, $routes);
$cname = $routeRes['controller'];
define('URL_PARAMS', $routeRes['params']);
$controllerPath = "controller/$cname.php";
$title = '404';
$content = '';

if (file_exists($controllerPath)) {

    include($controllerPath);
}

$html = template('templates/v_main', [
    'title' => $title,
    'content' => $content,
    'BASE_URL' => $BASE_URL,
    'regSuccessful' => $regSuccessful,
    'user' => $user,
    'userToken' => $userToken
]);

echo $html;


