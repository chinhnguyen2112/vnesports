<div class="content">
    <div class="content_about body_width">
        <!-- <div class="banner_all">
            <div class="this_nanner_all"><img src="/images/banner1.gif" alt="banner"></div>
            <div class="this_nanner_all"><img src="/images/banner2.gif" alt="banner"></div>
        </div> -->
        <div class="train_content">
            <div class="top_blog">
                <div class="top_left">
                    <div class="list_blog_top">
                        <div class="left_blog">
                            <div class="blog_top">
                                <?php foreach ($blog as $key => $val) {
                                    if ($key == 0) { ?>
                                        <a class="linl_all_detail" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                            <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                            <p class="title_blog_top"><?= $val['title'] ?></p>
                                            <div class="fl_date">
                                                <p class="date_post"><?= date('d-m-Y', $val['created_at']) ?></p>
                                            </div>
                                            <div class="sapo_blog_top"><?= $val['sapo'] ?></div>
                                        </a>
                                <?php }
                                } ?>
                            </div>
                        </div>
                        <div class="right_blog">
                            <?php foreach ($blog as $key => $val) {
                                if ($key < 4 && $key > 0) { ?>
                                    <div class="this_train_right">
                                        <a class="linl_all_detail" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                            <p class="title_blog"><?= $val['title'] ?></p>
                                            <div class="des_blog"><?= $val['sapo'] ?></div>
                                        </a>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    </div>
                    <div class="top_bxh">
                        <div class="left_bxh">
                            <p class="name_top active" data-id="1">Game Mới</p>
                            <p class="name_top" data-id="2">Game Hay</p>
                            <p class="name_top" data-id="3">Game Hot</p>
                        </div>
                        <div class="right_bxh">
                            <div class="box_new box_top">
                                <img src="/images/blog/Revelation-Thien-Du-22-75x75.jpg" alt="">
                                <img src="/images/blog/De-Quoc-Quat-Khoi-mobile-1-75x75.jpg" alt="">
                                <img src="/images/blog/vo-lam-nhan-hiep-e1668508665926-75x75.jpg" alt="">
                                <img src="/images/blog/thuc-tinh-than-thu-e1667965967675-75x75.jpg" alt="">
                                <img src="/images/blog/thien-ha-anh-hung-3q-7-75x75.jpg" alt="">
                                <img src="/images/blog/thien-long-truyen-ky-75x75.png" alt="">
                                <img src="/images/blog/stickman-afk-75x75.png" alt="">
                                <img src="/images/blog/tam-quoc-chi-slg-75x75.jpg" alt="">
                                <img src="/images/blog/vo-lam-nhan-hiep-e1668508665926-75x75.jpg" alt="">
                                <img src="/images/blog/ma-than-lu-bo-75x75.jpg" alt="">
                                <img src="/images/blog/dau-tuong-vng-3-75x75.jpg" alt="">
                                <img src="/images/blog/thuong-co-chi-vuong-75x75.jpg" alt="">
                                <img src="/images/blog/giang-ho-ky-hiep-3d-75x75.jpg" alt="">
                                <img src="/images/blog/ninja-lang-la-truyen-ky-1-75x75.png" alt="">
                                <img src="/images/blog/loan-chien-mobile-funzy-motgame-75x75.jpg" alt="">
                                <img src="/images/blog/Final_Fantasy_VII_Remake_icon.jpg" alt="">
                                <img src="/images/blog/lien-minh-bao-boi-1-75x75.jpg" alt="">
                                <img src="/images/blog/omg-3q-thumb-75x75.jpg" alt="">
                                <img src="/images/blog/thieu-nien-anh-hung-75x75.jpg" alt="">
                                <img src="/images/blog/DGPAL-icon-75x75.jpg" alt="">
                            </div>
                            <div class="box_new box_hay" style="display: none;">
                                <img src="/images/blog/DGPAL-icon-75x75.jpg" alt="">
                                <img src="/images/blog/dau-la-vng-1-75x75.jpg" alt="">
                                <img src="/images/blog/unnamed.jpg" alt="">
                                <img src="/images/blog/Yakuza_Like_a_Dragon_ho_so_game_8.jpg" alt="">
                                <img src="/images/blog/diablo-immortal-icon.jpg" alt="">
                                <img src="/images/blog/Diablo_IV_icon.jpg" alt="">
                                <img src="/images/blog/Ruined_King_logo.jpg" alt="">
                                <img src="/images/blog/CWicon_1.jpg" alt="">
                                <img src="/images/blog/MW2019_icon_1.jpg" alt="">
                                <img src="/images/blog/assassincreed-valhalla-icon.jpg" alt="">
                                <img src="/images/blog/marvels_spider-man_miles_morales_ho_so_game_8.jpg" alt="">
                                <img src="/images/blog/Little_Nightmares_II_ho_so_game_2.jpg" alt="">
                                <img src="/images/blog/overwatch-icon.jpg" alt="">
                                <img src="/images/blog/Final_Fantasy_VII_Remake_icon.jpg" alt="">
                                <img src="/images/blog/Observer_Icon.jpg" alt="">
                                <img src="/images/blog/Hitman_3_ho_so_game_Icon.jpg" alt="">
                                <img src="/images/blog/thu_vien_game_hyrule_warriors_age_of_calamity.jpg" alt="">
                                <img src="/images/blog/thu_vien_game_call_of_the_sea.jpg" alt="">
                                <img src="/images/blog/icon.jpg" alt="">
                                <img src="/images/blog/Black_Myth_Wukong_ICN.jpg" alt="">
                            </div>
                            <div class="box_new box_hot" style="display: none;">
                                <img src="/images/blog/vltk-max-75x75.jpg" alt="">
                                <img src="/images/blog/DGPAL-icon-75x75.jpg" alt="">
                                <img src="/images/blog/73021282_111690493595271_2683900968503869440_n_1.jpg" alt="">
                                <img src="/images/blog/motgame_garena_lien_quan_mobile_logo.jpg" alt="">
                                <img src="/images/blog/dau-truong-chan-ly-icon-02_1.jpg" alt="">
                                <img src="/images/blog/motgame_huyen_thoai_runeterra_logo.jpg" alt="">
                                <img src="/images/blog/motgame_VALORANT_logo.jpg" alt="">
                                <img src="/images/blog/motgame_logo_garena_free_fire.jpg" alt="">
                                <img src="/images/blog/dota-2-icon.jpg" alt="">
                                <img src="/images/blog/pubg-mobile-icon.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <?php include('includes/sidebar.php') ?>
            </div>
            <div class="list_blog">
                <?php foreach ($blog as $key => $val) {
                    if ($key > 4 && $key < 8) { ?>
                        <div class="this_train">
                            <a href="/<?= $val['alias'] ?>/">
                                <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                <div class="box_right_data">
                                    <p class="title_blog"><?= $val['title'] ?></p>
                                    <p class="date_post"><span><?= date('d-m-Y', $val['created_at']) ?></span></p>
                                    <div class="des_blog"><?= $val['sapo'] ?></div>
                                </div>
                            </a>
                        </div>
                <?php }
                } ?>
                <div class="box_content" style="display: none;">
                    <?php foreach ($blog_tag as $key => $val) {
                        if ($key == 0) { ?>
                            <div class="box_content_title">
                                <div class="title_link">
                                    <img src="/images/icon-title.png" />
                                    <p>Xu hướng: Nền tảng Web Apps Giao Lưu Cùng Idol Yêu Thích</p>
                                </div>
                            </div>
                        <?php } else  if ($key == 1) { ?>
                            <div class="box_content_big">
                                <a class="big_title" href="/<?= $val['alias'] ?>">
                                    <div class="title_big"><?= $val['title'] ?></div>
                                </a>
                                <div class="big_content">
                                    <a>
                                        <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                    </a>
                                    <div class="box_title">
                                        <div class="name_chuyenmuc">
                                            <a><?php $cate_tag = chuyen_muc(['id' => $val['chuyenmuc']]);
                                                echo $cate_tag[0]['name'];
                                                ?></a>
                                        </div>
                                        <!-- <div class="crate_date"><?= date('d-m-Y', $val['created_at']) ?></div> -->
                                        <div class="sapo"><?= $val['sapo'] ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="item_small">
                                <a class="content_small" href="/<?= $val['alias'] ?>">
                                    <?= $val['title'] ?>
                                </a>
                                <div class="sapo"><?= $val['sapo'] ?></div>
                            </div>
                    <?php }
                    } ?>
                </div>
                <?php foreach ($blog as $key => $val) {
                    if ($key > 7) { ?>
                        <div class="this_train">
                            <a href="/<?= $val['alias'] ?>/">
                                <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                <div class="box_right_data">
                                    <p class="title_blog"><?= $val['title'] ?></p>
                                    <p class="date_post"><span><?= date('d-m-Y', $val['created_at']) ?></span></p>
                                    <div class="des_blog"><?= $val['sapo'] ?></div>
                                </div>
                            </a>
                        </div>
                <?php }
                } ?>
                <div class="load_more">
                    <div class="div_bgr_load">
                        <span>Hiển thị thêm tin</span>
                        <img src="/images/arrow_loadmore.svg" alt="xem thêm">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>