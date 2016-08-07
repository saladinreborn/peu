<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<title>Login Page</title>
<style>
body {
    background: url('/../assets/img/login_pic.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}

.judul {
    width: 100%;
    height: 50px;
    background: url('') no-repeat;
    margin: 30px auto;
    text-align: center;
    color: #ecf0f1;
    font-family: "Verdana", Sans-serif;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #ecf0f1;
    border-radius: 5px;
    border-top: 5px solid #3498db;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 18px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('/../assets/img/user_ico.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('/../assets/img/user_ico.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('/../assets/img/pass_ico.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('/../assets/img/pass_ico.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid  #3498db;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #3498db;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #3498db;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 16px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #2980b9;
}

</style>
</head>

<body>
<br>
<div class='judul'><p><h2>SISTEM INFORMASI MANAJEMEN KK PEUGEOT</h2></p></div>
<div class="login-block">
    <h1>Login</h1>
    <form action="<?php echo site_url('login/do_login');?>" method="post">
    <input type="text" value="" name="username" placeholder="Username" id="username" />
    <input type="password" value="" name="password" placeholder="Password" id="password" />
    <button>Masuk</button>

</form>
</div>
</body>

</html>