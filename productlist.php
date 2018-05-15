<?php include ('_header.php'); ?>
    <style>
        .advertising{
            background:url("images/bg3.jpg") no-repeat 50% 50%;
            width:100%;
            height:380px;
            /*background:#cccccc;*/
            border:1px solid #ccc;
            margin-bottom:40px;
            background-size: cover;
        }
        /*-- article2 kind--*/
        .kind{
            width:100%;
            /*height:300px;*/
            /*border:1px solid #ccc;*/
            margin-bottom:40px;
        }
        .kindUl{
            display: flex;
            flex-wrap: wrap;
        }
        .kind.scroll{
            position:fixed;
            top:50px;
            left:0;
            right:0;
            background:#f7f7f7;
            z-index:50;
            margin: 0 auto;
        }
        .kindUl>li>a{
            padding:10px 0 10px 16px;
        }
        .kindUl .fas{
            margin-left:8px;
            padding-right:12px;
            border-right: 1px solid #888888;
        }
        /*--aside 篩選--*/
        .filter{
            /*background:yellow;*/
            /*flex:0 0 17rem;*/
            margin-bottom:80px;
            width:17rem;
            float: left;
        }
        .filterBox{
            padding:0 20px 10px 20px;
            color:#888;
        }
        .filterBox>ul>li{
            padding:9px 0;
        }
        .filterTitle.bigKingTitle{
            padding-top:0;
        }
        .filterTitle{
            padding:15px 0;
            color:#666;
            font-weight: 900;
            font-size: 20px;
        }
        .smallKind{
            color:#ffc833;
            font-size: 18px;
            text-shadow: 0 0 3px rgba(255, 248, 94, 0.48);
        }
        .checkboxFliter{
            padding:9px 0;
        }
        .checkboxFliter input[type=checkbox]{
            margin-right: 15px;
        }
        .checkboxFliter input[type=text]{
            padding:3px 8px;
            border-radius:2px;
            border:1px solid #888;
        }
        /*-- article3 product--*/
        .product{
            /*width:100%;*/
            /*height:600px;*/
            /*border:1px solid #ccc;*/
            margin-bottom:40px;
            display: flex;
            flex-wrap: wrap;
        }
        .breadcrumb{
            flex:0 0 100%;
            margin:0 1.3% .5% 1.3%;
            color:#666;
        }
        .productgroup{
            flex: 1;
            /*height:600px;*/
            /*border:1px solid #ccc;*/
            margin-bottom:40px;
            display: flex;
            flex-wrap: wrap;
        }
        .productBox{
            /*width:15.5%;*/
            /*min-width: 220px;*/
            margin:.5% 1.3%;
            flex: 0 1 200px;
            /*height:300px;*/
            /*background: #ffc833;*/
            border:1px solid #e9e9e9;
            border-radius: 3px;
            overflow: hidden;
            box-shadow: 1px 1px 10px #e9e9e9;
        }
        .productBox:hover{
            position: relative;
            top:-2px;
        }
        .itemImg{
            display: block;
            width: 200px;
            height: 200px;
            /*background: url("images/bg1.jpg") no-repeat center center;*/
            /*background-size: cover;*/
        }
        .itemImg>img{
            width:100%;
            object-fit: cover;
        }
        .itemInforBox{
            padding:5px 6px;
            font-size: 14px;
        }
        .itemName{
            display: block;
            letter-spacing: .5px;
            color:#666;
            height:38px;
            overflow: hidden;
        }
        .itemIconFlex{
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #e9e9e9;
            padding:6px 0;
        }
        .itemPrice{
            width: 40%;
            display: block;
            color: #ff3333;
            margin:5px 0;
        }
        .shopIcon{
            display: flex;
        }
        .shopIcon>figure{
            width: 16px;
            height:16px;
            object-fit: cover;
            margin:0 1px;
        }
        .shopIcon>figure>img{
            width:100%;
            /*margin:0 5px;*/
        }
        .itemComment{
            display: block;
            font-size:12px;
            color:#888;
            margin:8px 0 5px 0;
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
        <article class="advertising">
            <div class="slide"></div>
            <!--<h2 style="text-align: center">廣告Slider</h2>-->
        </article>


        <article class="kind">
            <!--<h2 style="text-align: center">商品分類</h2>-->
            <ul class="kindUl">
                <li><a href="">美妝<i class="fas fa-angle-down"></i></a></li>
                <li><a href="">保健<i class="fas fa-angle-down"></i></a></li>
                <li><a href="">食品<i class="fas fa-angle-down"></i></a></li>
                <li><a href="">旅遊<i class="fas fa-angle-down"></i></a></li>
                <li><a href="">婦幼<i class="fas fa-angle-down"></i></a></li>
                <li><a href="">3C<i class="fas fa-angle-down"></i></a></li>
                <li><a href="">家電<i class="fas fa-angle-down"></i></a></li>
                <li><a href="">服飾<i class="fas fa-angle-down"></i></a></li>
                <li><a href="">內衣<i class="fas fa-angle-down"></i></a></li>
                <li><a href="">鞋包配飾<i class="fas fa-angle-down"></i></a></li>
                <li><a href="">精品/錶<i class="fas fa-angle-down"></i></a></li>
                <li><a href="">日用品<i class="fas fa-angle-down"></i></a></li>
                <li><a href="">居家生活<i class="fas fa-angle-down"></i></a></li>
                <li><a href="">書店<i class="fas fa-angle-down"></i></a></li>
                <li><a href="">運動休閒<i class="fas fa-angle-down"></i></a></li>
                <li><a href="">家俱寢飾<i class="fas fa-angle-down"></i></a></li>
                <li><a href="">車用百貨<i class="fas fa-angle-down"></i></a></li>
            </ul>
        </article>

        <!--左側篩選列 start-->
        <aside class="filter">
            <div class="filterBox">
                <div class="filterTitle bigKingTitle">美妝</div>
                <ul>
                    <li class="smallKind">美妝保養</li>
                    <li><a href="">臉部保養</a></li>
                    <li><a href="">卸妝/洗面乳</a></li>
                    <li><a href="">化妝水/噴霧</a></li>
                    <li><a href="">精華液</a></li>
                    <li><a href="">乳液/乳霜</a></li>
                    <li><a href="">眼唇保養</a></li>
                    <li><a href="">面膜</a></li>
                    <li><a href="">防曬</a></li>
                    <li class="smallKind">洗沐美體</li>
                    <li><a href="">洗髮護髮</a></li>
                    <li><a href="">專業沙龍髮品</a></li>
                    <li><a href="">沐浴乳/手工皂/香皂</a></li>
                    <li><a href="">染髮造型</a></li>
                    <li><a href="">私密保養</a></li>
                    <li><a href="">美容電器</a></li>
                    <li><a href="">牙膏牙刷</a></li>
                    <li><a href="">嬰幼兒洗沐保養</a></li>
                </ul>
            </div>
            <div class="filterBox">
                <div class="filterTitle">運送方式</div>
                <div class="checkboxFliter"><label><input type="checkbox">全家</label></div>
                <div class="checkboxFliter"><label><input type="checkbox">7 - 11</label></div>
                <div class="checkboxFliter"><label><input type="checkbox">黑貓宅急便</label></div>
                <div class="checkboxFliter"><label><input type="checkbox">萊爾富</label></div>
                <div class="checkboxFliter"><label><input type="checkbox">中華郵政</label></div>
                <div class="checkboxFliter"><label><input type="checkbox">賣家宅配</label></div>
            </div>
            <div class="filterBox">
                <div class="filterTitle">服務與促銷</div>
                <div class="checkboxFliter"><label><input type="checkbox">免運費</label></div>
                <div class="checkboxFliter"><label><input type="checkbox">目前有折扣</label></div>
                <div class="checkboxFliter"><label><input type="checkbox">多件優惠</label></div>
                <div class="checkboxFliter"><label><input type="checkbox">信用卡</label></div>
            </div>
            <div class="filterBox">
                <div class="filterTitle">價格範圍</div>
                <div class="checkboxFliter"><input type="text" placeholder="$ 最小值"></div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |
                <div class="checkboxFliter"><input type="text" placeholder="$ 最大值"></div>
            </div>
        </aside>
        <!--左側篩選列 end-->

        <!--<h2>推薦商品</h2>-->
        <article class="product">
            <div class="breadcrumb">首頁 > 美妝 > 洗沐美體 > 牙膏牙刷</div>
            <!--<h2 style="text-align: center;display: block">推薦商品</h2>-->
            <div class="productgroup">
                <div class="productBox">
                    <a href="product_detail.html">
                        <div class="itemImg"><img src="images/bg1.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">OUTERSPACE官方SSSSEXY兩穿吊帶波浪裙</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 2,080</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (20)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/item2.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">【24H出貨】韓版皮帶磁扣掀頂蓋皮革側背包/中型...</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 299</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (20)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/item3.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">刷色割破牛仔褲(附腰帶)</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 450</span>
                                <span class="shopIcon">
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (400)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/item4.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">《Bogazy輕旅行★超值三件組》冰封行者PC可加大...</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 6,880</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (1169)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/item5.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">【N.F】涼感彈性混色男女運動排汗衫-男女款/四色可選</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 99</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (125)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/item6.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">2017韓版秋裝新款百搭條紋長袖ulzzang襯衣寬鬆顯瘦襯衫外套19441</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 179</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (499)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/bg1.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">OUTERSPACE官方SSSSEXY兩穿吊帶波浪裙</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 2,080</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (20)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/bg1.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">OUTERSPACE官方SSSSEXY兩穿吊帶波浪裙</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 2,080</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (20)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/bg1.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">OUTERSPACE官方SSSSEXY兩穿吊帶波浪裙</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 2,080</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (20)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/bg1.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">OUTERSPACE官方SSSSEXY兩穿吊帶波浪裙</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 2,080</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (20)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/bg1.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">OUTERSPACE官方SSSSEXY兩穿吊帶波浪裙</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 2,080</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (20)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/bg1.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">OUTERSPACE官方SSSSEXY兩穿吊帶波浪裙</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 2,080</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (20)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/bg1.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">OUTERSPACE官方SSSSEXY兩穿吊帶波浪裙</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 2,080</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (20)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/item2.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">【24H出貨】韓版皮帶磁扣掀頂蓋皮革側背包/中型...</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 299</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (20)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/item3.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">刷色割破牛仔褲(附腰帶)</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 450</span>
                                <span class="shopIcon">
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (400)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/item4.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">《Bogazy輕旅行★超值三件組》冰封行者PC可加大...</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 6,880</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (1169)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/item5.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">【N.F】涼感彈性混色男女運動排汗衫-男女款/四色可選</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 99</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (125)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/item6.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">2017韓版秋裝新款百搭條紋長袖ulzzang襯衣寬鬆顯瘦襯衫外套19441</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 179</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (499)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/bg1.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">OUTERSPACE官方SSSSEXY兩穿吊帶波浪裙</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 2,080</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (20)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/item2.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">【24H出貨】韓版皮帶磁扣掀頂蓋皮革側背包/中型...</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 299</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (20)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/item3.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">刷色割破牛仔褲(附腰帶)</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 450</span>
                                <span class="shopIcon">
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (400)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/item4.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">《Bogazy輕旅行★超值三件組》冰封行者PC可加大...</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 6,880</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (1169)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/item5.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">【N.F】涼感彈性混色男女運動排汗衫-男女款/四色可選</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 99</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (125)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/item6.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">2017韓版秋裝新款百搭條紋長袖ulzzang襯衣寬鬆顯瘦襯衫外套19441</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 179</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (499)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/bg1.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">OUTERSPACE官方SSSSEXY兩穿吊帶波浪裙</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 2,080</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (20)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/item2.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">【24H出貨】韓版皮帶磁扣掀頂蓋皮革側背包/中型...</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 299</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (20)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/item3.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">刷色割破牛仔褲(附腰帶)</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 450</span>
                                <span class="shopIcon">
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (400)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/item4.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">《Bogazy輕旅行★超值三件組》冰封行者PC可加大...</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 6,880</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (1169)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/item5.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">【N.F】涼感彈性混色男女運動排汗衫-男女款/四色可選</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 99</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (125)</span>
                        </div>

                    </a>
                </div>
                <div class="productBox">
                    <a>
                        <div class="itemImg"><img src="images/item6.jpg" alt=""></div>
                        <div class="itemInforBox">
                            <span class="itemName">2017韓版秋裝新款百搭條紋長袖ulzzang襯衣寬鬆顯瘦襯衫外套19441</span>
                            <div class="itemIconFlex">
                                <span class="itemPrice">$ 179</span>
                                <span class="shopIcon">
                                    <figure><img src="images/711icon.jpg" alt=""></figure>
                                    <figure><img src="images/familyicon.png" alt=""></figure>
                                </span>
                            </div>
                            <span class="itemComment">評價 (499)</span>
                        </div>

                    </a>
                </div>
            </div>
        </article>
    </section>
    <!--container end-->

    <!--footer start-->
    <?php include('_footer.php'); ?>
    <!--footer end-->
</div>
<!--wrap end-->


<script>
    //---nav scroll fixed---

    let searchForm = $('.searchForm');
    let phone = $('.searchFormPhone');
    let mainMenu = $('.mainMenu');

    phone.hide();

    $(window).scroll(function(){
        let scrollNow = $(window).scrollTop();
        console.log(scrollNow);

        if(scrollNow >= 100){
            // searchForm.hide();
            searchForm.css('opacity','0');
            phone.show();
            mainMenu.css('background','#f7f7f7')
        }else{
            // searchForm.show();
            searchForm.css('opacity','1');
            phone.hide();
            mainMenu.css('background','#fff')
        }

        if(scrollNow >= 380){
            $('.kind').addClass('scroll');
            $('.kindUl').css({
                'width':'75%',
                'margin':'0 auto',
                'transition':'0s'
            });
        }else{
            $('.kind').removeClass('scroll');
            $('.kindUl').css('width','100%');
        }

    });


</script>
</body>
</html>