<?php include ('_header.php'); ?>
    <style>
        /*---article1---*/
        .productTop{
            display: flex;
            flex-wrap: wrap;
            /*background-color: #1F5572;*/
        }
        .productTopL{
            flex: 1;
            /*background: #ed1c24;*/
        }
        .productImg{
            border: 1px solid #666666;
            max-width: 500px;
            max-height: 500px;
            overflow: hidden;
            margin: 20px auto 0 auto;
        }
        .productImg>img{
            width: 100%;
            object-fit: cover;
        }
        .productSmallImg{
            width: 100%;
            display: flex;
            margin: 30px auto 0 auto;
            justify-content: center;
            align-items: center;
        }
        .productSmallImg img{
            border: 1px solid #888888;
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin: 0 .5%;
        }
        .productSmallImg>a{
            width: 30px;
            margin: 0 .5%;
            text-align: center;
            font-size: 26px;
            color: #666666;
        }
        .productTopR{
            flex: 1;
            /*background: aquamarine;*/
        }
        .productTopR_R{
            padding:20px 40px;
        }
        .productTopR_R p{
            margin:20px 0;
        }
        /*button--------*/
        .qtyBox{
            display: flex;
            align-items: center;
            justify-content: left;
            margin-top: .5em;
        }
        .qtyLable_y{
            color: #666;
        }
        .qtySelect_y{
            color: #000;
            font-weight:bold;
            font-size: 16px;
            border: none;
            border-bottom: 1px solid #666;
            width:200px;
            height: 30px;
            padding: 0 0 0 15%;
            cursor: pointer;
        }
        /*Select:focus{*/
        /*outline: none;*/
        /*}*/
        .buyBtn{
            width: 260px;
            background-color: #ffc833;
            font-size: 20px;
            letter-spacing: 5px;
            color: #fff;
            text-shadow: 0 0 1px #0000005d;
            border: 2px solid #ffc833;
            border-radius: 50px;
            padding: 10px 30px;
            margin-top: 1em;
            cursor: pointer;
        }
        .buyBtn:hover{
            background-color: #e8b136;
            text-shadow: 0 0 1px #0000004d;
            border: 2px solid #e8b136;
            filter: drop-shadow(0 0 1px #0000004d) ;
        }
        .blueBtn_y p{
            display:block;
            text-align:center;
            font-size: 18px;
            font-weight: bold;
            letter-spacing: 3px;
            float: left;
        }

        /*---article2---*/
        .productInfo>ul{
            display: flex;
            justify-content: center;
            border-bottom: 1px solid #888;
            margin-top:20px;
        }
        .productInfo>ul>li>a{
            display: block;
            padding:10px 30px;
            border:1px solid #666;
            border-radius:20px 20px 0 0;
            border-bottom:none;
            font-size: 21px;
            font-weight: bold;
        }
        .productInfo>ul>li>a:hover{
            background:#666 ;
            color: #fff;
        }
        .tagArea{
            margin:0 auto;
            /*background: #ffc833;*/
            /*height:400px;*/
            width:85%;
        }
        .areaText{
            padding:40px 60px;
            color:#666;
            text-align: justify;
        }

        /*---  article2->Q&A  ---*/
        .anqBox{
            display: flex;
            flex-direction: row;
            min-height: 100px;
            border-bottom: 1px solid #888;
            padding:20px 0;
        }
        .questionNum{
            flex: .5 1 auto;
            /*background: #ed1c24;*/
            margin:0 2% 0 5% ;
            text-align: right;
        }
        .questionInfor{
            flex: 10 ;
            margin:0 0 0 5% ;
            /*background: #ffc833;*/
        }
        .question{
            margin-bottom: 20px;
        }
        .question span:nth-child(2):before{
            padding-left:30px ;
            content: "(";
        }
        .question span:nth-child(2):after{
            content: ")";
        }
        .question>p{
            margin-top:20px;
        }
        .answer{
            background: #f6f6f6;
            padding:15px 40px;
        }
        .answer>p>span{
            margin-right:20px;
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

        <!--article1 start-->
        <article class="productTop">
            <div class="productTopL">
                <figure class="productImg">
                    <img src="images/5560577.jpg" alt="">
                </figure>
                <div class="productSmallImg">
                    <a href=""><i class="fas fa-angle-left"></i></a>
                    <img src="images/5560577.jpg" alt="">
                    <img src="images/5560577.jpg" alt="">
                    <img src="images/5560577.jpg" alt="">
                    <img src="images/5560577.jpg" alt="">
                    <a href=""><i class="fas fa-angle-right"></i></a>
                </div>

            </div>
            <div class="productTopR">
                <div class="productTopR_R">
                    <h3>【芬拿 FINCA LA NAVA】有機橄欖油洋芋片3包組合 180g x 3(原味+迷迭香起士+煙燻甜椒)</h3>
                    <p>
                        超大材積TOSHIBA 東芝186公升變頻電冰箱 典雅銀 GR-M25TBZ(S)<br>
                        壓縮機10年保固<br>
                        靜音變頻馬達<br>
                        無邊框設計<br>
                        Bio混合除臭裝置<br>
                        大型蔬果箱/保鮮室設計<br><br>

                        ※館長貼心小叮嚀:<br>
                        ★訂購前請先確定門／樓梯間的寬度<br>
                        (請依據冰箱本體尺寸做丈量)<br>
                        事先量好可以加速安裝的效率喔！<br>
                    </p>
                    <p>
                        付款方式：
                        信用卡<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;現金 (ATM、餘額、銀行支付)<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;全家、OK、萊爾富取貨付款<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7-11取貨付款
                    </p>
                    <p>
                        運送方式：
                        7-11取貨付款 60元<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;全家、OK、萊爾富取貨付款 60元<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;宅急便「黑貓PAY貨到付款」 80元<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;離島寄送 150元
                    </p>
                    <div class="productPrice_y">
                        <p class="price_y">NT. 2180</p>
                        <br>
                        <!--<button class="addBtn_y blueBtn_y">-->
                        <!--<div class="addBtnPic_y"></div>-->
                        <!--<p>加入收藏</p>-->
                        <!--</button>-->
                        <div class="buyForm2_y">
                            <form action="">
                                <div class="qtyBox">
                                    <label for="qty" class="qtyLable_y">數量</label>
                                    <select class="qtySelect_y" id="qty">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                    </select>
                                </div>
                                <br>
                                <button class="buyBtn">立即購買</button>
                                <button class="buyBtn">加入購物車</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <!--article1 end-->


        <!--article2 start-->
        <article class="productInfo">
            <ul class="">
                <li><a data-tag="tag1">商品說明</a></li>
                <li><a data-tag="tag2">商品規格</a></li>
                <li><a data-tag="tag3">問與答(0)</a></li>
                <li><a data-tag="tag4">最新評價</a></li>
            </ul>

            <div class="tagArea" id="tag1">
                <div class="areaText">
                    ❤️日本十大必買電器之一,孝親自用兩相宜🎈 <br>
                    <br>
                    👉下單再折價$400🎉<br>
                    <br>
                    👍舒適的按摩功能,輕便精巧外型的3D按摩椅墊。<br>
                    👉加裝力道穩定的按摩球與加熱功能。<br>
                    👉座墊具有加熱跟震動功能。<br>
                    👌隨行手感按摩師,攜帶方便,重量3.98kg,4公分厚度<br>
                    <br>
                    ✔️適用於客廳沙發、餐廳或和室椅子、辦公室椅子上或置於車輛後座上使用💯<br>
                    <br>
                    💪超省電,使用一次20分鐘的電費只需約0.02元 (關閉加熱器功能)<br>
                    <br>
                    附：AC變壓器、電源線、坐墊緩衝墊、搖控器、說明書保證書。<br>
                    <br>
                    🎉歡迎母親節買就送Doctor Air 紓壓椅🎈🎈<br>
                    <br>
                    ⚠️商品過大，超商不收，一律賣家宅配⚠️<br>
                    🚚賣家宅配免運費🚚🚚🚚<br>
                    <br>
                    ✔️公司貨保固1年💯<br>
                    <br>
                    👉👉下單再折$400🎉</div>
            </div>

            <div class="tagArea" id="tag2">
                <div class="areaText">國家產地<br>
                    其他<br>
                    零食類別<br>
                    餅乾/洋芋片<br>
                    規格組合<br>
                    3件組-5件組<br>
                    國家認證<br>
                    歐盟有機認證USDA有機認證<br>
                    包裝<br>
                    袋裝<br>
                    商品規格<br>
                    ◆成份：有機馬鈴薯、特級冷壓初榨橄欖油、天然海鹽<br>
                    ◆有機認證機構：SHC<br>
                    ◆重(容)量：100g<br>
                    ◆規格：18x7x30 cm<br>
                    ◆原產地(國)：西班牙<br>
                    ◆保存期限：11月<br>
                    ◆以消費者收受日起算,至少距有效日期前90日以上<br>
                    ◆商品已投保華南產物保險公司產品責任險1千萬元整<br>
                    ◆食品業者登錄字號為：F-128178040-00000-3<br>
                    ◆負責廠商名稱：保灃國際股份有限公司<br>
                    ◆負責廠商地址：新北市汐止區康寧街151號7樓<br>
                    ◆負責廠商電話：02-86951186<br>
                    ◆投保產品責任險字號：華南產物保險1400-062050279<br><br>

                    ◆成份：有機(馬鈴薯、特級冷壓初榨橄欖油、起士、迷迭香)、天然海鹽<br>
                    ◆有機認證機構：SHC<br>
                    ◆重(容)量：100g<br>
                    ◆規格：18x7x30 cm<br>
                    ◆原產地(國)：西班牙<br>
                    ◆保存期限：11月<br>
                    ◆以消費者收受日起算,至少距有效日期前90日以上<br>
                    ◆商品已投保華南產物保險公司產品責任險1千萬元整<br>
                    ◆食品業者登錄字號為：F-128178040-00000-3<br>
                    ◆負責廠商名稱：保灃國際股份有限公司<br>
                    ◆負責廠商地址：新北市汐止區康寧街151號7樓<br>
                    ◆負責廠商電話：02-86951186<br>
                    ◆投保產品責任險字號：華南產物保險1400-062050279<br><br>

                    ◆成份：有機(馬鈴薯、特級冷壓初榨橄欖油、煙燻甜椒)、天然海鹽<br>
                    ◆有機認證機構：SHC<br>
                    ◆重(容)量：100g<br>
                    ◆規格：18x7x30 cm<br>
                    ◆原產地(國)：西班牙<br>
                    ◆保存期限：11月<br>
                    ◆以消費者收受日起算,至少距有效日期前90日以上<br>
                    ◆商品已投保華南產物保險公司產品責任險1千萬元整<br>
                    ◆食品業者登錄字號為：F-128178040-00000-3<br>
                    ◆負責廠商名稱：保灃國際股份有限公司<br>
                    ◆負責廠商地址：新北市汐止區康寧街151號7樓<br>
                    ◆負責廠商電話：02-86951186<br>
                    ◆投保產品責任險字號：華南產物保險1400-062050279
                </div>
            </div>

            <div class="tagArea" id="tag3">
                <div class="areaText">
                    <div class="anqBox">
                        <div class="questionNum">
                            <p>問題2</p>
                        </div>
                        <div class="questionInfor">
                            <div class="question">
                                <span>kla***</span> <span>2018-04-30 11:27:24</span>
                                <p>賣家您好～首先很高興能夠購買您的商品，請務必幫我拿一組全新的，且確認商品訂單規格正確無誤，盡快幫我妥善包裝後寄出喔！希望能盡快收到，並使用它！感恩^^</p>
                            </div>
                            <div class="answer">
                                <p><span>答覆:</span>好的，謝謝購買!</p>
                            </div>
                        </div>
                    </div>

                    <div class="anqBox">
                        <div class="questionNum">
                            <p>問題1</p>
                        </div>
                        <div class="questionInfor">
                            <div class="question">
                                <span>yyy*****</span> <span>2018-04-29 21:51:38</span>
                                <p>請問這好吃嗎??還有庫存嗎???</p>
                            </div>
                            <div class="answer">
                                <p><span>答覆:</span>有的，請問需要多少數量?</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tagArea" id="tag4">
                <div class="areaText">最新評價最新評價最新評價最新評價最新評價
                    最新評價最新評價最新評價最新評價最新評價最新評價最新評價最新評價
                    最新評價最新評價最新評價最新評價最新評價最新評價最新評價最新評價
                    最新評價最新評價最新評價最新評價最新評價最新評價最新評價最新評價
                    最新評價最新評價最新評價最新評價最新評價最新評價最新評價最新評價
                    最新評價最新評價最新評價最新評價最新評價最新評價最新評價最新評價
                    最新評價最新評價最新評價最新評價最新評價最新評價最新評價最新評價
                    最新評價最新評價最新評價最新評價最新評價最新評價最新評價最新評價
                    最新評價最新評價最新評價最新評價最新評價最新評價最新評價最新評價
                    最新評價最新評價最新評價最新評價最新評價最新評價最新評價最新評價
                    最新評價最新評價最新評價最新評價最新評價最新評價最新評價最新評價
                    最新評價最新評價最新評價最新評價最新評價最新評價最新評價最新評價
                    最新評價最新評價最新評價最新評價最新評價最新評價最新評價最新評價</div>
            </div>

        </article>
        <!--article2 end-->


    </section>
    <!--container end-->

    <!--footer start-->
    <?php include ('_footer.php'); ?>
    <!--footer end-->
</div>
<!--wrap end-->

<script>
    //tags
    $('.tagArea').hide();
    $('.tagArea:first').show();
    let thisTag = $('.productInfo ul li a');
    thisTag.eq(0).css({
        'background':'#666',
        'color':'#fff'
    });
    let changeTag = function (){
        $('.tagArea').hide();
        let dataTag = $(this).attr('data-tag');
        $('#'+dataTag).fadeIn();
        thisTag.css({
            'background':'none',
            'color':'#888'
        });

        $(this).css({
            'background':'#666',
            'color':'#fff'
        })

    };
    thisTag.on('click',changeTag);
</script>
</body>
</html>