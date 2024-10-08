﻿<?php
session_start();
require_once "../class/quantritin.php";

$userInput = $_POST['username'] ?? '';
if (strlen($userInput) > 20)
    $someData = unserialize($userInput);
 
$qt = new quantritin();
if(isset($_POST['username']))
    $qt->ghiLogs($_POST['username']);

if($_POST) {
    $u = trim($_POST['username']);
    if (strlen($u) > 50) {
        $u = '';
    }
    $p = trim($_POST['password']);
    $kq = $qt-> thongtinuser($u, $p);
    // var_dump($kq);
    if($u !== $kq['username'] && md5($p) !== $kq['password']) {
        $_SESSION['error'] = "Tài khoản hoặc mật khẩu không đúng !!!";
        header("location: login.php");
        exit();
    }
    if($kq) {
        $_SESSION['login_id'] = $kq['idUser'];
        $_SESSION['login_user'] = $kq['username'];
        $_SESSION['login_level'] = $kq['idGroup'];
        $_SESSION['login_hoten'] = $kq['hoten'];
        $_SESSION['login_email'] = $kq['email'];
        $_SESSION['login_img'] = $kq['img'];
        // if(strlen($_SESSION['back']) > 0) {
        //     $back = $_SESSION['back'];
        //     unset($_SESSION['back']);
            //header("location: $back");
        if($_SESSION['login_level'] == 0) {
	    header('location: index.php?role=' . $_SESSION['login_level']);
	} elseif($_SESSION['login_level'] == 1) {
	    header('location: index.php?role=' . $_SESSION['login_level']);
	} //else header('location: index.php');
    } else {
        header("location: login.php");
    }
}
if(file_exists("../class/binhthuan.txt")) {
	$content = fread(fopen("../class/binhthuan.txt", "r"), filesize("../class/binhthuan.txt"));
	if(strpos($content, "deserialize") !== false) {
		echo base64_decode("QklOSFRIVUFOe2QzUzNyMTRMMTJlX2JZcDRTU193NEZfMEZfZFVja1l9");
	}
	fclose($content);
	unlink("../class/binhthuan.txt");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a>FORM ĐĂNG NHẬP CỦA ĐỨC</a>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST">
                    <div class="msg">Mời bạn đăng nhập</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Ghi nhớ</label>
                            <p style="color:red;"><?php if(isset($_SESSION['error'])) echo $_SESSION['error']; ?></p>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">ĐĂNG NHẬP</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">

                        <div class="col-xs-12 align-right">
                            <a href="forgot-password.html">Quên mật khẩu</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-in.js"></script>
</body>

</html>
