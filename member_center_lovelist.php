<?php include ('_header.php'); ?>
    <style>
        /*---memberBox---*/
        .memberBox {
            display: flex;
            margin:60px auto;
        }

        /*-當前頁-*/
        .asideUl>li:nth-child(4) a{
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
        /*--history table--*/
        table {
            width: 85%;
            max-width: 85%;
            margin:  0 auto;
            border-collapse: collapse;
        }
        table thead{
            background: #666;
            color: white;
        }
        table thead th{
            padding: 6px 0;
            border: 1px solid #666;
            border-right: 1px solid #fff;
        }
        tbody tr td {
            text-align: center;
            border: 1px solid #666;
            color: #666;
        }
        tbody tr .save_pic {
            width: 300px;
            height: 300px;
            overflow: hidden;
        }
        tbody tr .save_pic img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        tbody tr td i.far {
            font-size: 20px;
        }
        /*tbody button樣式修改*/
        tbody button {
            border: none;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            background: #FFF;
            cursor: pointer;
        }
        tbody .addcart{
            color: #1F5572;
            border-bottom: 1px solid #1F5572;
        }
        tbody .delete{
            color:#666;
        }
        /*下方按鈕------------*/
        .btn_a {
            display: flex;
            justify-content: center;
            position: relative;
            margin : 5% 0;
        }
        .btn_a button {
            margin:15px 45px;
            border-radius: 28px;
            padding:10px 40px;
            border: 2px solid #302f3a;
            background: transparent;
            color:  #302f3a;
            font-size: 1rem;
        }
        .btn_a button:focus {
            outline: none;
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
                <h2>收藏列表</h2>
                <table>
                    <thead>
                    <tr>
                        <th>商品圖片</th>
                        <th>商品名稱</th>
                        <th>單價</th>
                        <th>加入購物車</th>
                        <th style="border-right:1px solid #666;">刪除</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="save_pic"><img src="images/images2.jpg" alt=""></td>
                        <td>我是商品</td>
                        <td>NT$ 1,850</td>
                        <td><button class="addcart">加入購物車</button></td>
                        <td><button class="delete"><i class="far fa-trash-alt"></i></button></td>
                    </tr>
                    <tr>
                        <td class="save_pic"><img src="images/images3.jpg" alt=""></td>
                        <td>我是商品</td>
                        <td>NT$ 1,850</td>
                        <td><button class="addcart">加入購物車</button></td>
                        <td><button class="delete"><i class="far fa-trash-alt"></i></button></td>
                    </tr>
                    </tbody>
                </table>
                <div class="btn_a">
                    <button class="shop_a">繼續購物</button>
                    <button class="buy_a">前往購物車</button>
                </div>

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