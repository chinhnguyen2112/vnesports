<div class="main_header ">
    <div class="header_bot body_width">
        <div class="top_header" id="top_header" style="display:block">
            <div class="flex">
                <a href="/">
                    <img src="/images/logo.png" alt="logo" class="img_logo_bot_header">
                </a>
                <div class="top_right_header">
                    <form class="search_pc" id="search_pc" method="get" action="/search">
                        <img class="img_search_pc" src="/images/icon_search.png" alt="search">
                        <input class="input_pc" type="text" autocomplete="off" name="search" placeholder="Tìm kiếm">
                    </form>
                    <div class="btn_top_header">
                        <a class="btn_login" href="/" title="Đăng nhập">
                            <img src="/images/icon_account.png" alt="Đăng nhập">
                            Đăng Nhập
                        </a>
                        <div class="noti">
                            <img src="/images/icon_noti.png" alt="Thông báo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn_submenu_top" id="btn_submenu_top" onclick="show_menu_mobile(this,1)">
            <span id="line_span"></span>
        </div>
        <div class="header_menu">
            <div class="list_menu">
                <a class="img_home home_gray" href="/"><span></span></a>
                <a class="icon_hidden" href="/" style="display: none"><img src="/images/fa-icon.png" alt="icon"></a>
                <?php $menu_cate_parent = chuyen_muc('parent = 0  AND id != 9');
                foreach ($menu_cate_parent as $val) {
                    $menu_cate = chuyen_muc(['parent' => $val['id']]); ?>
                    <div class="this_menu">
                        <span><a href="/<?= $val['alias'] ?>/">
                                <?= $val['name'] ?>
                            </a></span>
                        <?php if ($menu_cate != null) { ?>
                            <div class="menu_con">
                                <?php foreach ($menu_cate as $val1) { ?>
                                    <p><a href="/<?= $val1['alias'] ?>/">
                                            <?= $val1['name'] ?>
                                        </a></p>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
                <div class="btn_show_menu">
                    <div class="img_show_menu" onclick="show_menu(this,1)">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="all_menu_drop">
            <div class="content_menu">
                <div class="header_cont_menu">
                    <form class="search_mobile" id="search" method="get" action="/search">
                        <img class="img_search_mobile" src="/images/icon_search.png" alt="Tìm kiếm">
                        <input class="input_mobile" type="text" autocomplete="off" name="search" placeholder="Tìm kiếm">
                    </form>
                    <span>Tất cả chuyên mục</span>
                    <div class="btn_close_menu" onclick="show_menu(this,2)">
                        <span>Đóng</span>
                        <img src="/images/icon_cancel.png" alt="Đóng">
                    </div>
                </div>
                <div class="content_left">
                    <?php $menu_cate_parent = chuyen_muc('parent = 0  AND id != 9');
                    foreach ($menu_cate_parent as $val) {
                        $menu_cate = chuyen_muc(['parent' => $val['id']]); ?>
                        <div class="item_content_left">
                            <span><a href="/<?= $val['alias'] ?>/">
                                    <?= $val['name'] ?>
                                </a></span>
                            <?php if ($menu_cate != null) { ?>
                                <div class="item_child">
                                    <?php foreach ($menu_cate as $val1) { ?>
                                        <p><a href="/<?= $val1['alias'] ?>/">
                                                <?= $val1['name'] ?>
                                            </a></p>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="content_right">
                    <?php foreach ($page as $vall) { ?>
                        <div class="item_page">
                            <a href="/<?= $vall['alias'] ?>/">
                                <?= $vall['title'] ?>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main_content">
    <div class="banner_top">
        <div class="list_banner_top body_width">
            <a href="https://www.jun8887.com/?uagt=guanggao5a&path=signup" target="_blank" rel="nofollow" class="img_banner">
                <img src="<?= base_url() ?>images/site/jun88.gif" alt="banner">
            </a>
            <a href="http://shbet23.com/?a=1114342" target="_blank" rel="nofollow" class="img_banner">
                <img src="<?= base_url() ?>images/site/okvip.gif" alt="banner">
            </a>
            <a href="https://ituoitho.com/rotation-lucks/" target="_blank" rel="nofollow" class="img_banner">
                <img src="<?= base_url() ?>images/site/ituoitho.jpg" alt="banner">
            </a>
            <a href="https://shlive.tv/" target="_blank" rel="nofollow" class="img_banner">
                <img src="<?= base_url() ?>images/site/SHLIVE.gif" alt="banner">
            </a>
            <img src="/images/icon_cancel.png" alt="đóng" class="close_banner" onclick="$('.list_banner_top').hide()">
        </div>
    </div>