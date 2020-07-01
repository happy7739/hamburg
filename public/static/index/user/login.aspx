<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="login.aspx.cs" Inherits="Web.user.login" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="../logoico.ico" />
    <title>登录-哆唻客后台管理系统</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
    <style type="text/css">
        html, body
        {
            height: 100%;
        }
        .box
        {
            /*filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#6699FF', endColorstr='#6699FF'); /!* IE *!/*/ /*background-image:linear-gradient(bottom, #6699FF 0%, #6699FF 100%);*/ /*background-image:-o-linear-gradient(bottom, #6699FF 0%, #6699FF 100%);*/ /*background-image:-moz-linear-gradient(bottom, #6699FF 0%, #6699FF 100%);*/ /*background-image:-webkit-linear-gradient(bottom, #6699FF 0%, #6699FF 100%);*/ /*background-image:-ms-linear-gradient(bottom, #6699FF 0%, #6699FF 100%);*/
            background-image: url("img/bg-login.png");
            background-repeat: no-repeat;
            background-size: 100%;
            margin: 0 auto;
            position: relative;
            width: 100%;
            height: 100%;
            -moz-background-size: 100%;
            -webkit-background-size: 100%;
            -o-background-size: 100%;
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='img/bg-login.png',  sizingMethod='scale');
        }
        .login-box
        {
            width: 100%;
            max-width: 500px;
            height: 370px;
            position: absolute;
            top: 50%;
            margin-top: -170px; /*设置负值，为要定位子盒子的一半高度*/
            margin-left: 30%;
        }
        @media screen and (min-width:500px)
        {
            .login-box
            {
                left: 50%; /*设置负值，为要定位子盒子的一半宽度*/
                margin-left: -250px;
            }
        }
        .form
        {
            width: 100%;
            max-width: 500px;
            height: 245px;
            margin: 25px auto 0px auto;
            padding-top: 25px;
        }
        .login-content
        {
            height: 270px;
            width: 100%;
            max-width: 500px;
            background-color: rgba(255, 250, 2550, .6);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99FFFAFA,endColorstr=#99FFFAFA); /*IE8支持*/
            float: left;
        }
        .input-group
        {
            margin: 0px 0px 30px 0px !important;
        }
        .form-control, .input-group
        {
            height: 40px;
        }
        .form-group
        {
            margin-bottom: 0px !important;
        }
        .login-title
        {
            padding: 20px 10px;
            background-color: rgba(0, 0, 0, .6);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000); /*IE8支持*/
        }
        .login-title h1
        {
            margin-top: 10px !important;
        }
        .login-title small
        {
            color: #fff;
        }
        .link p
        {
            line-height: 20px;
            margin-top: 30px;
        }
        .btn-sm
        {
            padding: 8px 24px !important;
            font-size: 16px !important;
        }
        .text-white
        {
            color: white;
        }
    </style>
</head>
<body>
    <div class="box">
        <br />
        <h1 class="text-center text-white">
            <span class="glyphicon glyphicon-leaf"></span>&nbsp;&nbsp;哆唻客后台管理系统</h1>
        <div class="login-box">
            <div class="login-title text-center">
                <h1>
                    <small>登录</small></h1>
            </div>
            <div class="login-content ">
                <div class="form">
                    <form id="loginform" method="post" runat="server">
                    <div class="form-group">
                        <div class="col-xs-12 ">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" id="username" name="username" class="form-control" placeholder="用户名"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 ">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" id="password" name="password" class="form-control" placeholder="密码" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-4 col-xs-offset-4 " style="margin: 0 37%;">
                            <a href="#" class="btn btn-sm btn-info" name="submit" onclick="document.getElementById('loginform').submit();return false">
                                <span class="glyphicon glyphicon-off"></span>登录</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
