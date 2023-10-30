<div class="content">
    <div class="content_about body_width">
        <div class="banner_blog">
            <div class="breadcrumb">
                <div class="left_brea">
                    <span class="before"></span>
                    <span class="this_breadcrumb"><?= $title_page ?></span>
                </div>
                <div class="right_brea">
                    <svg>
                        <polyline class="line_pc" points="50 40, 120 40, 150 18, 240 18, 270 40, 1100 40 "></polyline>
                        <polyline class="line_monbile" points="50 40, 120 40, 150 18, 240 18, 270 18, 1100 18 "></polyline>
                    </svg>
                </div>
            </div>
        </div>
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
                    <?php foreach ($blog as $key => $val) {
                        if ($key >= 4) { ?>
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
                </div>
                <?php include('includes/sidebar.php') ?>
            </div>
            <div class="list_blog">
                <div id="table_bot" class="table_bot">
                    <table>
                        <tr class="btn_heading">
                            <th class="heading_table">
                                <h1><?= $meta_title ?></h1>
                            </th>
                            <th class="heading_show">
                                <div class="load_more">
                                    <div class="div_bgr_load">
                                        <span id="span_show" class="span_show_more">Hiển thị thêm tin</span>
                                        <span id="span_end" class="span_show_more">Hết !</span>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <?php if (isset($content_cate) && $content_cate != '') { ?>
                                    <div class="blog_content">
                                        <div class="left_detail">
                                            <div class="content_blog" id="content_blog">
                                                <?= $content_cate ?>
                                            </div>
                                            <div class="hide_show_content">
                                                <p class="hide_show_text">Xem thêm</p>
                                                <div class="list_img_arrow">
                                                    <img src="/images/arrow.svg" alt="xem thêm">
                                                    <img src="/images/arrow.svg" alt="xem thêm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<input id="chuyen_muc" value="<?= isset($chuyenmuc) ? $chuyenmuc : '' ?>" hidden>
<input id="name_page" value="cate" hidden>