
<body>
    <div class="login_box">
        <div class="login_box_left">
            <p class="login_title">Регистрация</p>
            <form action="" class="form_login" method="post">
                <input type="text" class="<?php if(isset($h["error"]["user"]["login"])){echo "input_login_e\""." placeholder='".$h["error"]["user"]["login"]."'";}else{echo "input_login\" placeholder=\"Логин\"";}?>"  name="login">
                <input type="text" class="<?php if(isset($h["error"]["user"]["name"])){echo "input_login_e\""." placeholder='".$h["error"]["user"]["name"]."'";}else{echo "input_login\" placeholder=\"Имя\"";}?>"   name="name">
                <input type="email" class="<?php if(isset($h["error"]["user"]["mail"])){echo "input_login_e\""." placeholder='".$h["error"]["user"]["mail"]."'";}else{echo "input_login\" placeholder=\"Почта\"";}?>"  name="mail">
                <input type="password" class="<?php if(isset($h["error"]["user"]["password"])){echo "input_login_e\""." placeholder='".$h["error"]["user"]["password"]."'";}else{echo "input_login\" placeholder=\"Пароль\"";}?>" name="password">
                <input type="password" class="<?php if(isset($h["error"]["user"]["password2"])){echo "input_login_e\""." placeholder='".$h["error"]["user"]["password2"]."'";}else{echo "input_login\" placeholder=\"Повторите пароль\"";}?>" name="password2">
                <button class="button_login" name="go" value="est">Продолжить</button>
            </form>
        </div>
        <div class="login_box_right">
            <img class="login_box_right_img" src="/src/img/rl2white.png" alt="">
            <p class="login_box_right_text">Если вы уже зарегистрированы, то войдите в свой аккаунт</p>
            <a class="login_box_right_button" href="/user/auth/">Войти</a>
        </div>
    </div>
</body>
</html>

