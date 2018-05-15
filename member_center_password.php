<?php include ('_header.php'); ?>
    <style>
        /*---memberBox---*/
        .memberBox {
            display: flex;
            margin:60px auto;
        }

        /*-當前頁-*/
        .asideUl>li:nth-child(3) a{
            background-color: #ffc833;
            color:#fff;
        }

        /*---右側資料 memberMain layout---*/
        .memberMain {
            flex: 5;
            text-align: center;
            /*background-color: #ed9da0;*/
        }
        .memberMain h2 {
            margin: 50px auto;
            font-weight: bold;
            color: #666;
        }
        /*---右側資料 from---*/
        .form_infor {
            width: 60%;
            min-width: 500px;
            margin: 0 auto;
            /*padding-left: 5%;*/
        }
        .memberInforDiv {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-content: center;
            margin-top: 2em;
        }
        .memberLabel1 {
            color: #666;
            font-size: 16px;
            text-align: left;
            flex: 1;
            padding-right: 5%;
            margin-bottom: 3em;
        }
        .memberInput1 {
            /* width: 60%;
            height: 30px; */
            background-color: transparent;
            color: #666;
            border: none;
            border-bottom: 1px solid #666;
            flex: 3;
            margin-bottom: 3em;
        }
        .memberLabel {
            color: #666;
            font-size: 16px;
            text-align: left;
            width: 18%;
        }
        .memberInput, .memberSelect {
            background-color: transparent;
            color: #666;
            border: none;
            border-bottom: 1px solid #666;
            width: 82%;
            height: 30px;
        }
        .memberInput:focus {
            outline: none;
        }
        .memberBtn{
            margin:80px 45px;
            border-radius: 28px;
            padding:10px 40px;
            border: 2px solid #302f3a;
            background: transparent;
            color:  #302f3a;
            font-size: 1rem;
        }
        button:focus {
            outline: none;
        }
        /*small_warning--------------------*/
        small.warning{
            color:#ed1c24;
            /* width:100%; */
            padding:5px 0 0 50px;
            /* display:none; */
        }
        .noneSmall{
            margin-top: 5px ;
            width:300px;
            height:14px;
        }
    </style>
</head>
<body>
<!--wrap start-->
<div class="wrap">
    <!--header start-->
    <?php include ('header.php'); ?>
    <!--header end-->

    <!--container start-->
    <section class="container">
        <div class="memberBox">

            <!--aside 左側邊攔start-->
            <?php include ('_member_aside.php'); ?>
            <!--aside end-->

            <!--memberMain 右側資料start-->
            <section class="memberMain">
                <h2>修改密碼</h2>
                <form name="form_infor" class="form_infor" method="post" action="" onsubmit="">
                    <div class="memberInforDiv">
                        <label for="email" class="memberLabel1">電子郵件 </label>
                        <input type="text" class="memberInput1" name="email" id="email" value="" placeholder=""
                               disabled="disabled">
                        <!-- <small id="emailWarning" class="form-text text-muted warning">請填寫正確的電郵</small>                                                                                                                             -->
                    </div>
                    <p style="text-align:right; color:#666">(*為必填)</p>
                    <div class="memberInforDiv">
                        <label for="oldPassword" class="memberLabel">
                            <span class="yellow_star">*</span>原始密碼:</label>
                        <input type="password" class="memberInput" name="password" id="oldPassword" value="" placeholder="請輸入密碼(6~12位字元)">
                        <div class="noneSmall">
                            <small id="passwordWarning" class="warning">請輸入6~12位字元之密碼</small>
                        </div>
                    </div>
                    <div class="memberInforDiv">
                        <label for="newPassword" class="memberLabel">
                            <span class="yellow_star">*</span>輸入新密碼:</label>
                        <input type="password" class="memberInput" name="password" id="newPassword" value="" placeholder="請輸入密碼(6~12位字元)">
                        <div class="noneSmall">
                            <small id="passwordWarning" class="warning">請輸入6~12位字元之密碼</small>
                        </div>
                    </div>
                    <div class="memberInforDiv">
                        <label for="newPassword2" class="memberLabel">
                            <span class="yellow_star">*</span>新密碼確認:</label>
                        <input type="password" class="memberInput" name="password" id="newPassword2" value="" placeholder="請輸入密碼(6~12位字元)">
                        <div class="noneSmall">
                            <small id="password_sureWarning" class="warning">請再次確認密碼</small>
                        </div>
                    </div>

                    <button type="submit" class="memberBtn">確認送出</button>
                </form>
            </section>
            <!--memberMain 右側資料end-->

        </div>
    </section>
    <!--container end-->

    <!--footer start-->
    <?php include ('_footer.php'); ?>
    <!--footer end-->
</div>
<!--wrap end-->

<script>


</script>
</body>
</html>