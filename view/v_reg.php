<form method="post">
    <div class="form-group">
        <label for="login">Введите ваше имя</label>
        <input type="text" name="login" id="name" value="<?=$regFields['login']?>">
    </div>
    <div class="form-group">
        <label for="pass">Введите пароль</label>
        <input type="password" name="password" id="pass" value="<?=$regFields['password']?>">
    </div>
    <div class="form-group">
        <label for="phone">Введите ваш телефон</label>
        <input type="text" name="phone" id="phone" value="<?=$regFields['phone']?>">
    </div>
    <div class="form-group">
        <label for="email">Введите ваш email</label>
        <input type="text" name="email" id="email" value="<?=$regFields['email']?>">
    </div>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>


    <? foreach($errors as $error): ?>
        <p class="reg-error"><?=$error?></p>
    <? endforeach;?>


</form>