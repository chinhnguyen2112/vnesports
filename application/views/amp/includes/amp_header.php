<div class="main_header ">
    <div class="header_bot body_width">
        <div class="top_header" id="top_header" style="display:block">
            <div class="flex">
                <a href="/">
                    <amp-img width="155px" height="30px" src="/images/logo.png" alt="logo" class="img_logo_bot_header"></amp-img>
                </a>
            </div>
        </div>
        <div class="btn_submenu_top" id="btn_submenu_top" onclick="show_menu_mobile(this,1)">
            <span id="line_span"></span>
        </div>
        <div class="all_menu_drop">
            <div class="content_menu">
                <div class="header_cont_menu">
                    <form class="search_mobile" id="search" method="get" action="/search" target="_blank">
                        <amp-img width="20px" height="20px" src="/images/icon_search.png" alt="Tìm kiếm" class="img_search_mobile"></amp-img>
                        <input class="input_mobile" type="text" autocomplete="off" name="search" placeholder="Tìm kiếm">
                    </form>
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