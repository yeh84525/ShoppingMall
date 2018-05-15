<?php include ('_header.php'); ?>
    <style>
        body{
            background-color: #ddd;
        }
        /*------menu------*/
        .mainMenu{
            width:100%;
            /*background: antiquewhite;*/
            height:50px;
            display: flex;
            justify-content: space-between;
        }
        .menuLeft{
            width:20%;
            /*background: aqua;*/
        }
        .menuRight{
            display: flex;
            width:80%;
            /*background: aquamarine;*/
            align-items: center;
            justify-content: flex-end;
        }
        .menuUl{
            display: flex;
        }
        .menuList{
            flex:1 1 auto;
            padding:3px 25px;
            border-right:1px solid #ccc ;
        }
        .menuList:hover a{
            /*color:#ffe009;*/
            color:#ffc833;
        }
        /*------container------*/
        .container{
            width:75%;
            margin:30px auto;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .register, .login{
            flex: 0 0 40%;
            height:600px;
            margin:40px 3%;
            border:1px solid #ffc833;
        }
        .tittle{
            width:75%;
            margin:40px auto;
            display: flex;
            justify-content: space-between;
            align-items: center;

        }
        .line1{
            width:125px;
            height:1px;
            background:linear-gradient(to left,#ffc833,#ddd);
        }
        .line2{
            width:125px;
            height:1px;
            background:linear-gradient(to right,#ffc833,#ddd);
        }

        .inpItem{
            margin:30px auto 0 auto;
            text-align: center;
        }
        .inpItem>input{
            width:55%;
            border:none;
            border-bottom:1px solid #ffc833;
            background-color: #ddd;
            font-size: 16px;
            padding:5px;
            letter-spacing: 2px;
        }
        .formRegister, .formLogin{
            width:90%;
            margin:0 auto;
            text-align: right;
        }
        .formRegister>button , .formLogin>button{
            border:2px solid #ffc833;
            background-color: #ddd;
            padding:5px 10px;
            border-radius:5px;
            font-size:14px;
            margin:40px 60px 0 auto;
            cursor: pointer;
        }
        .keepLoginItem{
            margin: 30px auto 0 auto;
            display: flex;
            justify-content:space-around;
            width:300px;
            cursor: pointer;
        }
    </style>

</head>
<body>
<div class="wrap">
    <!--header start-->
    <header>
        <div class="nav">
            <div class="mainMenu">
                <div class="menuLeft">
                    <h1><a href="index.html">LOGO</a></h1>
                </div>
                <!--menu  start-->
                <div class="menuRight">
                    <ul class="menuUl">
                        <li class="menuList"><a href="member_center.html">會員中心</a></li>
                        <li class="menuList"><a href="member_center_history.html">訂單查詢</a></li>
                        <li class="menuList"><a>購物車</a></li>
                        <li class="menuList"><a href="member_center_lovelist.html">喜好清單</a></li>
                        <li class="menuList"><a>客服中心</a></li>
                        <li class="menuList"><a>關於我</a></li>
                        <li class="menuList"><a href="registered.html">登入</a></li>
                    </ul>
                </div>
                <!--menu  end-->
            </div>
        </div>
    </header>
    <!--header end-->

    <section class="container">

        <!--註冊 start-->
        <div class="register">
            <div class="tittle">
                <div class="line1"></div>
                <h2>會員註冊</h2>
                <div class="line2"></div>
            </div>

            <form action="" method="post" class="formRegister" onsubmit="return checkFormRegister()">
                <div class="inpItem">
                    <label for="register_username">*帳號:</label>
                    <input type="text" name="register_username" id="register_username" placeholder="請輸入Email">
                    <small></small>
                </div>

                <div class="inpItem">
                    <label for="register_password1">*密碼:</label>
                    <input type="password" name="register_password1" id="register_password1" placeholder="請輸入至少6位數的密碼">
                    <small></small>
                </div>

                <div class="inpItem">
                    <label for="register_password2">*確認密碼:</label>
                    <input type="password" name="register_password2" id="register_password2" placeholder="請重複輸入密碼">
                    <small></small>
                </div>


                <button type="submit">註冊</button>
            </form>
        </div>
        <!--註冊 end-->

        <!--登入 start-->
        <div class="login">
            <div class="tittle">
                <div class="line1"></div>
                <h2>會員登入</h2>
                <div class="line2"></div>
            </div>

            <form action="" method="post" class="formLogin" onsubmit="return checkFormLogin()">
                <div class="inpItem">
                    <label for="login_username">帳號:</label>
                    <input type="text" name="login_username" id="login_username" placeholder="請輸入Email" >
                    <small></small>
                </div>

                <div class="inpItem">
                    <label for="login_password">密碼:</label>
                    <input type="password" name="login_password" id="login_password" placeholder="請輸入您的密碼">
                    <small></small>
                </div>

                <div class="keepLoginItem">
                    <label for="login_keepLogin">
                        <input type="checkbox" name="login_keepLogin" id="login_keepLogin" value=""> 記住密碼
                    </label>
                    <a href="">忘記密碼 ?</a>
                </div>

                <button type="submit"><a href="member_center.html">登入</a></button>
            </form>

        </div>

        <!--登入 end-->

    </section>


    <!--footer start-->
    <?php include('_footer.php'); ?>
    <!--footer end-->
</div>

<script>
    let login_username = document.querySelector('#login_username');
    let login_password = document.querySelector('#login_password');
    let register_username = document.querySelector('#register_username');
    let register_password1 = document.querySelector('#register_password1');
    let register_password2 = document.querySelector('#register_password2');

    let checkFormLogin = function () {
        if(! login_username.value){
            return false;
        }
        if(! login_password.value){
            return false;
        }
        return true;
    };

    let checkFormRegister = function () {
        if(! register_username.value){
            return false;
        }
        if(! register_password1.value){
            return false;
        }
        if(! register_password2.value){
            return false;
        }
        if(register_password2.value !== register_password1.value){
            return false;
        }
        return true;
    };

</script>
</body>
</html>