

<header>
    <div class="nav">
        <div class="mainMenu">
            <div class="menuLeft">
                <h1><a style="color:#888;" href="_index.php">LOGO</a></h1>
            </div>
            <!--手機搜尋表單start-->
            <form class="searchFormPhone">
                <input class="searchBarPhone" type="text" placeholder="搜尋商品">
                <a class="searchBtnPhone">
                    <img class="searchIconPhone" src="images/search.svg" alt="">
                </a>
            </form>
            <!--手機搜尋表單end-->

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
        <!--搜尋表單start-->
        <form style="" class="searchForm">
            <input class="searchBar" type="text" placeholder="搜尋商品">
            <a class="searchBtn">
                <img class="searchIcon" src="images/search.svg" alt="">
            </a>
        </form>
        <!--搜尋表單end-->
    </div>
</header>

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
