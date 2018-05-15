<?php include ('_header.php'); ?>

    <style>
        /*---memberBox---*/
        .memberBox {
            display: flex;
            margin:60px auto;
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
        /*---右側資料 memberMain---*/
        .topWelcome{
            margin-left:5%;
        }
        .topWelcome ul{
            display: flex;
        }
        .topWelcome ul li{
            padding: 0 2em;
            border-right: 2px solid #666;
            color: #666;
        }
        .li_span{
            color: #1f5572;
        }

        /*--table style--*/
        .table_infor{
            width: 45%;
            margin: 0 auto;
            color: #666;
        }
        .l_td{
            width:32%;
            height: 30px;
            text-align: left;
            padding-top:2.5em;
        }
        .r_td{
            width:68%;
            height: 30px;
            text-align: left;
            padding-top:2.5em;
            border-bottom: 1px solid #000;
        }
        .l_td1{
            width:20%;
            height: 30px;
            text-align: left;
        }
        .r_td1{
            width:80%;
            height: 30px;
            text-align: left;
            border-bottom: 1px solid #000;
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
                <div class="topWelcome">
                    <ul>
                        <li><p>親愛的 <span class="li_span">XXX</span> 您好</p></li>
                        <li><p>會員等級: <span class="li_span">一般會員</span></p></li>
                    </ul>

                </div>

                <h2>會員資料</h2>
                <table class="table_infor">
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td class="l_td1">電子郵件 </td>
                        <td class="r_td1">111</td>
                    </tr>
                    <tr>
                        <td class="l_td">姓名 </td>
                        <td class="r_td">222</td>
                    </tr>
                    <tr>
                        <td class="l_td">性別 </td>
                        <td class="r_td">333</td>
                    </tr>
                    <tr>
                        <td class="l_td">生日 </td>
                        <td class="r_td">444</td>
                    </tr>
                    <tr>
                        <td class="l_td">手機</td>
                        <td class="r_td">555</td>
                    </tr>
                    <tr>
                        <td class="l_td">地址</td>
                        <td class="r_td">666</td>
                    </tr>
                </table>
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