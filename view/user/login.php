
<body>
    <div class="login_box">
        <div class="login_box_right">
            <img class="login_box_right_img" src="/src/img/rl2white.png" alt="">
            <p class="login_box_right_text">Если вы ещё не зарегистрированы, то перейдите к регистрации</p>
            <a class="login_box_right_button" href="/user/register/">Регистрация</a>
        </div>
        <div class="login_box_left">
            <p class="login_title">Вход</p>
            <form action="" class="form_login" method="post">
            <input type="text" class="<?php 
                if(isset($h["error"]["user"]["login"]))
                {
                    echo "input_login_e\""." placeholder='".$h["error"]["user"]["login"]."'";
                }
                else
                {
                    echo "input_login\" placeholder=\"Логин\"";
                }?>"  <?php if(isset($h["user"]["data"]["login"]) )echo "value='".$h["user"]["data"]["login"]."'";?> name="login">
                <input type="password" <?php if(isset($h["user"]["data"]["password"]) )echo "value='".$h["user"]["data"]["password"]."'";?> class="<?php if(isset($h["error"]["user"]["password"])){echo "input_login_e\""." placeholder='".$h["error"]["user"]["password"]."'";}else{echo "input_login\" placeholder=\"Пароль\"";}?>" name="password">
                <button class="button_login" name="go" value="est">Продолжить</button>
            </form>
        </div>
        
    </div>
</body>
</html>