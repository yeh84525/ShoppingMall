<?php include ('_header.php'); ?>
    <style>


        /*---memberBox---*/
        .memberBox {
            display: flex;
            margin:60px auto;
        }
        /*-當前頁-*/
        .asideUl>li:nth-child(1) a{
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
            /* flex: 1; */
            width: 12%;
        }
        .memberInput, .memberSelect {
            background-color: transparent;
            color: #666;
            border: none;
            border-bottom: 1px solid #666;
            /* flex: 3; */
            width: 88%;
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
            padding:5px 0 0 25px;
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
            <? include ('_member_aside.php'); ?>
            <!--aside end-->

            <!--memberMain 右側資料start-->
            <section class="memberMain">
                <h2>修改會員資料</h2>
                <form name="form_infor" class="form_infor" method="post" action="" onsubmit="">
                    <div class="memberInforDiv">
                        <label for="email" class="memberLabel1">電子郵件 </label>
                        <input type="text" class="memberInput1" name="email" id="email" value="" placeholder=""
                               disabled="disabled">
                        <!-- <small id="emailWarning" class="form-text text-muted warning">請填寫正確的電郵</small>                                                                                                                             -->
                    </div>
                    <p style="text-align:right; color:#666">(*為必填)</p>
                    <div class="memberInforDiv">
                        <label for="nickname" class="memberLabel"><span class="yellow_star">*</span>姓名: </label>
                        <input type="text" class="memberInput" name="nickname" id="nickname" value="" placeholder="">
                        <div class="noneSmall">
                            <small id="nameWarning" class="warning">請填寫兩個字以上的姓名</small>
                        </div>
                    </div>
                    <div class="memberInforDiv">
                        <label class="memberLabel">&nbsp;性別: </label>
                        <select class="memberSelect" id="registerGender">
                            <option value="1"></option>
                            <option value="2">男</option>
                            <option value="3">女</option>
                        </select>
                        <div class="noneSmall"></div>
                    </div>
                    <div class="memberInforDiv">
                        <label for="birthday" class="memberLabel">&nbsp;生日: </label>
                        <input type="text" class="memberInput" name="birthday" id="birthday" value=""
                               placeholder="">
                        <div class="noneSmall"></div>
                    </div>
                    <div class="memberInforDiv">
                        <label for="mobile" class="memberLabel"><span class="yellow_star">*</span>手機: </label>
                        <input type="text" class="memberInput" name="mobile" id="mobile" value="" placeholder="">
                        <div class="noneSmall">
                            <small id="mobileWarning" class="warning">請輸入十位數的手機號碼</small>
                        </div>
                    </div>
                    <div class="memberInforDiv">
                        <label for="address" class="memberLabel"><span class="yellow_star">*</span>地址: </label>
                        <input type="text" class="memberInput" name="address" id="address" value="" placeholder="">
                        <div class="noneSmall">
                            <small id="addressWarning" class="warning">請填寫十個字以上的地址</small>
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