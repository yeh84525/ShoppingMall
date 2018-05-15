<?php include ('_header.php'); ?>

    <style>
        /*---memberBox---*/
        .memberBox {
            display: flex;
            margin:60px auto;
        }
        /*-當前頁-*/
        .asideUl>li:nth-child(2) a{
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
        /*--radio--*/
        .memberMain h3{
            margin: 100px auto;
            font-size: 20px;
            color: #c1272d;
            font-weight: normal;
        }
        .dateRange ul{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .dateRange ul li{
            padding: 10px 30px 0 30px;
            color: #666;
        }
        /*--history table--*/
        .table_history{
            width:100%;
            margin: 100px auto 100px auto;
            color: #666;
        }
        table caption{
            text-align: left;
        }
        table {
            width: 80%; /*y改*/
            max-width: 80%; /*y改*/
            margin: 0 auto;
            margin-top: 30px;
            border-collapse: collapse;
        }
        table thead tr th {
            background: #666;/*f改*/
            color: #fff;
            padding: 6px 0;
            border: 1px solid #666;/*f改*/
            border-right: 1px solid #fff;
        }
        .delect_a {
            border-right: 1px solid #666;/*f改*/
        }
        .buyList td {
            text-align: center;
            height: 200px;
            border: 1px solid #666;/*f改*/
        }
        .total td{
            text-align: center;
            /* height: 50px; */
            border: 1px solid #666;/*f改*/
            padding: 10px 0;
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
            <?php include ('_member_aside.php'); ?>
            <!--aside end-->

            <!--memberMain 右側資料start-->
            <section class="memberMain">
                <h2>查詢訂購紀錄</h2>
                <div class="dateRange">
                    <form action="">
                        <ul>
                            <li><input type="radio" name="radio-btn" value="now" checked="checked" />&nbsp;最近</li>
                            <li><input type="radio" name="radio-btn" value="one" />&nbsp;一個月內</li>
                            <li><input type="radio" name="radio-btn" value="tree"/>&nbsp;三個月內</li>
                            <li><input type="radio" name="radio-btn" value="six"/>&nbsp;六個月內</li>
                        </ul>
                    </form>
                </div>
                <table class="table_history">
                    <caption>訂單編號:20180101</caption>
                    <thead>
                    <tr>
                        <th scope="col">日期</th>
                        <th scope="col">商品圖片</th>
                        <th scope="col">商品名稱</th>
                        <th scope="col">數量</th>
                        <th scope="col">單價</th>
                        <th scope="col">小計</th>
                        <th scope="col">狀態</th>
                        <th class="delect_a" scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="buyList">
                        <td>111</td>
                        <td>1111</td>
                        <td>111</td>
                        <td>111</td>
                        <td>111</td>
                        <td>111</td>
                        <td>111</td>
                        <td><a href="">取消訂單</a></td>
                    </tr>
                    <tr class="buyList">
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@fat</td>
                        <td>@fat</td>
                        <td>@fat</td>
                        <td>@fat</td>
                        <td><a href="">取消訂單</a></td>
                    </tr>
                    <tr class="total">
                        <td colspan="6"></td>
                        <td colspan="2">總金額 : </td>
                    </tr>
                    </tbody>
                </table>
                <table class="table_history">
                    <caption>訂單編號:20180102</caption>
                    <thead class="thead-dark_a">
                    <tr>
                        <th scope="col">日期</th>
                        <th scope="col">商品圖片</th>
                        <th scope="col">商品名稱</th>
                        <th scope="col">數量</th>
                        <th scope="col">單價</th>
                        <th scope="col">小計</th>
                        <th scope="col">狀態</th>
                        <th class="delect_a" scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="buyList">
                        <td>111</td>
                        <td>1111</td>
                        <td>111</td>
                        <td>111</td>
                        <td>111</td>
                        <td>111</td>
                        <td>111</td>
                        <td>
                            <a href="">取消訂單</a>
                        </td>
                    </tr>
                    <tr class="total">
                        <td colspan="6"></td>
                        <td colspan="2">總金額 : </td>
                    </tr>
                    </tbody>
                </table>

                <!--<div class="toTop">-->
                <!--<div class="tr"></div>-->
                <!--<h5>TOP</h5>-->
                <!--</div>-->
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