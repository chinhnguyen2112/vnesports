<link rel="stylesheet" href="/assets/css/css_sidebar.css">
<style>
    .guest_post {
        background: #8dc642;
        margin-bottom: 20px;
        border-radius: 16px;
        padding: 10px 0;
    }

    .guest_post p {
        color: #fff;
        font-size: 18px;
        font-weight: 600;
        text-align: center;
        margin-bottom: 5px;
    }

    .guest_post a {
        font-size: 20px;
        font-weight: 700;
        display: block;
        text-align: center;
        color: #000;
    }
</style>
<div class="sidebar_content">
    <div class="sidebar_box">
        <div class="box_heading">
            <a href="#">Liên Kết Hữu Ích</a>
        </div>
        <div class="box_content_sidebar">
            <ul>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    Game Bắn Súng
                    <strong>
                        <a href="/csgo/">CSGO</a>
                    </strong>
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    Khám Phá
                    <strong>
                        <a href="/pubg/">PUBG</a>
                    </strong>
                    Phiên Bản Mới
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    Bóng Đá
                    <strong>
                        <a href="/fifa-online-4/">Fifa Online 4</a>
                    </strong>
                    Đỉnh Cao
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    Garena
                    <strong>
                        <a href="/lien-quan-mobile/">Liên Quân Mobile</a>
                    </strong>
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    Khám Phá
                    <strong>
                        <a href="/lien-minh-huyen-thoai/">LMHT</a>
                    </strong>
                    Việt Nam
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    News
                    <strong>
                        <a href="/valorant/">Valorant</a>
                    </strong>
                    Riot Games
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    Gaming Philippines
                    <strong>
                        <a rel="dofollow" href="https://tobet88.org/">TOBET88</a>
                    </strong>

                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    <strong>
                        <a target="_blank" rel="dofollow" href="https://mu88.tips/">MU88</a>
                    </strong>
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    <strong>
                        <a target="_blank" rel="dofollow" href="https://ketquabongda.io/">ketquabongda</a>
                    </strong>
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    <strong>
                        <a target="_blank" rel="dofollow" href="https://123b.cx">123b</a>
                    </strong>
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    <strong>
                        <a target="_blank" rel="dofollow" href="https://xoilack.co/">xôi lạc tv</a>
                    </strong>
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    <strong>
                        <a target="_blank" rel="dofollow" href="https://eduvlog.org/">xoilac tv trực tiếp bóng đá</a>
                    </strong>
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    <strong>
                        <a target="_blank" rel="dofollow" href="https://corgipals.org/">cakhia tv trực tiếp bóng đá</a>
                    </strong>
                </li>
                <!-- <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    Tải phần mềm tại
                    <strong>
                        <a rel="nofollow" href="https://kashi.com.vn/">Kashi.com.vn</a>
                    </strong>
                </li> -->
            </ul>
        </div>
    </div>
    <!-- <div class="guest_post">
        <p>Tải phần mềm tại</p>
        <a rel="nofollow" href="https://kashi.com.vn/">Kashi.com.vn</a>
    </div> -->
    <div class="hot_news">
        <div class="box_heading">
            <a href="#">
                <img src="/images/icons8-fire-30.png" />
                Tin Mới Nóng
            </a>
        </div>
        <div class="box_content_sidebar">
            <ul>
                <?php foreach ($blog_new as $key => $val) { ?>
                    <li class="item_hot_news">
                        <a href="/<?= $val['alias'] ?>"><?= $val['title'] ?></a>
                    </li>
                <?php } ?>
            </ul>
            <div class="see_more_news">
                <button class="btn_see_more">
                    <a href="/">Xem thêm tin mới nhất Vnesports</a>
                </button>
            </div>
        </div>
    </div>
</div>