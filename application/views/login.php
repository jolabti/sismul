<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<meta charset="UTF-8">

<title>Login</title>
<style>
body {
    background: url('<?php echo base_url(); ?>gambar/loginbg.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: TimesNewRoman;
}

.logo {
    width: 213px;
    height: 36px;
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
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
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('<?php echo base_url(); ?>gambar/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #ffd  url('<?php echo base_url(); ?>gambar/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff  url('<?php echo base_url(); ?>gambar/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff  url('<?php echo base_url(); ?>gambar/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #faaaac;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #ff123c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #fa7b33;
}

.link{

    color: #5859aa;
    padding-top: 10px;
    margin-top: 10px;


}



</style>
</head>

<body>


<div class="login-block">

    <form method="post" action="<?php echo base_url(); ?>index.php/welcome/loginAdmin">
    <h1>Login</h1>
    <input type="text" name="username" placeholder="Username" id="username"   />
    <input type="password" name="password" placeholder="Password" id="password"   />
    <button>Login</button>
    <center>
    <a class="link" href="<?php echo base_url(); ?>index.php/welcome/signup">Belum daftar ?</a>
    </center>
    <div class="error logo"><?php echo validation_errors();?></div>


</div>
</body>

</html>
