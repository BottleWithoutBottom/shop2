<?

include_once('model/auth.php');
$checkLogin = '/^[a-zA-Z]+\d*/';
$checkPass = '/[a-zA-Z0-9]{7,20}/';
$checkPhone = '/[0-9]{5,15}/';

$errors = [];

$regFields = [
    'login' => '',
    'password' => '',
    'phone' => '',
    'email' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $regFields['login'] = $_POST['login'];
    $regFields['password'] = $_POST['password'];
    $regFields['phone'] = $_POST['phone'];
    $regFields['email'] = $_POST['email'];

    if (!preg_match($checkLogin, $regFields['login']) ?? $regFields['login'] < 5) {
        $errors[] = 'Логин должен содержать в себе буквы латиницы и содержать не менее 5 символов';
    } else if(!preg_match($checkPass, $regFields['password'])) {
        $errors[] = 'Пароль может содержать в себе латинские буквы, цифры и быть не короче 5 символов';
    } else if(!preg_match($checkPhone, $regFields['phone'])) {
        $errors[] = 'Телефон может содержать в себе только цифры и быть не менее 5 символов';
    }

    else {
        $errors = [];
        $_SESSION['reg.success'] = true;
        regUser($regFields);
        header("Location:$BASE_URL");
        exit();
    }
}

$title = 'Регистрация';
$content = template('v_reg', [
    'title' => $title,
    'BASE_URL' => $BASE_URL,
    'errors' => $errors,
    'regFields' => $regFields
]);