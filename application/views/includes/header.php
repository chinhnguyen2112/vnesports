<div class="main_header ">
    <div class="header_bot body_width">
        <!-- <img class="show_menu_mobile" src="/images/icon_menu_gray.png" alt="icon menu gray" > -->
        <div class="btn_submenu_top" id="btn_submenu_top" onclick="show_menu_mobile(this,1)">
            <span id="line_span"></span>
        </div>
        <div class="top_header" id="top_header" style="display:block">
            <div class="flex">
                <a href="/">
                    <img src="/images/logo.png" alt="logo" class="img_logo_bot_header">
                </a>
                <div class="top_right_header">
                    <form class="search_pc" id="search" method="get" action="/search">
                        <img class="img_search_pc" id="img_search_pc" src="/images/icon_search.png" alt="icon search" />
                        <input class="input_pc" id="search_input" type="text" autocomplete="off" name="search" placeholder="Tìm kiếm" />
                    </form>
                    <div class="btn_top_header">
                        <a class="btn_login" href="/">
                            <img src="/images/icon_account.png" alt="icon account">
                            Đăng Nhập
                        </a>
                        <div class="noti">
                            <img src="/images/icon_noti.png" alt="icon notification">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_menu">
            <div class="list_menu">
                <a class="img_home home_gray" href="/"><span></span></a>
                <a class="icon_hidden" href="/" style="display: none"><img src="/images/fa-icon.png"></a>
                <!-- <a class="img_home home_white" href="/"><img src="/images/icon_home_white.png" alt="icon home white"></a> -->
                <!-- <div class="this_menu">
                    <span><a href="/">Trang chủ</a></span>
                </div> -->
                <?php $menu_cate_parent = chuyen_muc(['parent' => 0]);
                foreach ($menu_cate_parent as $val) {
                    $menu_cate = chuyen_muc(['parent' => $val['id']]); ?>
                    <div class="this_menu">
                        <span><a href="/<?= $val['alias'] ?>/"><?= $val['name'] ?></a></span>
                        <?php if ($menu_cate != null) { ?>
                            <div class="menu_con">
                                <?php foreach ($menu_cate as $val1) { ?>
                                    <p><a href="/<?= $val1['alias'] ?>/"><?= $val1['name'] ?></a></p>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
                <!-- <img src="/images/menu_mb.svg" alt="show menu" class="img_show_menu" onclick="show_menu(this,1)"> -->
                <div class="btn_show_menu">
                    <a class="img_show_menu" onclick="show_menu(this,1)">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="all_menu_drop">
            <div class="content_menu">
                <div class="header_cont_menu">
                    <form class="search_mobile" id="search" method="get" action="/search">
                        <img class="img_search_mobile" id="img_search_pc" src="/images/icon_search.png" alt="icon search" />
                        <input class="input_mobile" id="search_input" type="text" autocomplete="off" name="search" placeholder="Tìm kiếm" />
                    </form>
                    <span>Tất cả chuyên mục</span>
                    <a class="btn_close_menu" onclick="show_menu(this,2)">
                        <span>Đóng</span>
                        <img src="/images/icon_cancel.png" alt="icon cancel">
                    </a>
                </div>
                <div class="content_left">
                    <?php $menu_cate_parent = chuyen_muc(['parent' => 0]);
                    foreach ($menu_cate_parent as $val) {
                        $menu_cate = chuyen_muc(['parent' => $val['id']]); ?>
                        <div class="item_content_left">
                            <span><a href="/<?= $val['alias'] ?>/"><?= $val['name'] ?></a></span>
                            <?php if ($menu_cate != null) { ?>
                                <div class="item_child">
                                    <?php foreach ($menu_cate as $val1) { ?>
                                        <p><a href="/<?= $val1['alias'] ?>/"><?= $val1['name'] ?></a></p>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="content_right">
                    <?php foreach ($page as $vall) { ?>
                        <div class="item_page">
                            <a href="/<?= $vall['alias'] ?>/"><?= $vall['title'] ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main_content">