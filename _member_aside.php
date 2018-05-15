<style>
    /*---左側aside memberBar---*/
    .memberBar {
        flex: 1;
        /*background-color: #b3daff;*/
    }
    .asideListTitle{
        font-weight: bold;
        font-size: 20px;
        color: #666666;
        text-align: left;
        padding: 0 0 35px 10px;
        border-bottom: 1px solid #666;
    }
    .asideUl>li>a{
        display: block;
        padding: 20px 10px;
        margin: 30px 0;
        color: #666666;
    }
    .asideUl>li>a:hover{
        background-color: #ffc833;
        color:#fff;
    }
</style>


<aside class="memberBar">
    <h2 class="asideListTitle">會員專區</h2>
    <ul class="asideUl">
        <li><a href="member_center_infor.html">修改會員資料</a></li>
        <li><a href="member_center_history.html">訂購紀錄</a></li>
        <li><a href="member_center_password.html">密碼修改</a></li>
        <li><a href="member_center_lovelist.html">收藏列表</a></li>
        <li><a href="">會員優惠</a></li>
    </ul>
</aside>