<h1 style="display: none;"><?= $meta_title ?></h1>
<div class="content">
    <div class="content_about body_width">
        <div class="train_content">
            <div class="top_blog">
                <div class="top_left">
                    <div class="list_blog_top">
                        <div class="left_blog">
                            <div class="blog_top">
                                <?php foreach ($blog as $key => $val) {
                                    if ($key == 0) { ?>
                                        <a class="linl_all_detail" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?><?= ($val['id'] > 1024) ? '' : '/' ?>">
                                            <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                            <p class="title_blog_top"><?= $val['title'] ?></p>
                                            <div class="fl_date">
                                                <p class="date_post"><?= date('d-m-Y', $val['updated_at']) ?></p>
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
                                        <a class="linl_all_detail" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?><?= ($val['id'] > 1024) ? '' : '/' ?>">
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
                                <a href="/<?= $val['alias'] ?><?= ($val['id'] > 1024) ? '' : '/' ?>">
                                    <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                    <div class="box_right_data">
                                        <p class="title_blog"><?= $val['title'] ?></p>
                                        <p class="date_post"><span><?= date('d-m-Y', $val['updated_at']) ?></span></p>
                                        <div class="des_blog"><?= $val['sapo'] ?></div>
                                    </div>
                                </a>
                            </div>
                        <?php }
                    }
                    if ($blog != null) { ?>
                        <div class="load_more">
                            <div class="div_bgr_load">
                                <span>Hiển thị thêm tin</span>
                                <img src="/images/arrow_loadmore.svg" alt="xem thêm">
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php include('includes/sidebar.php') ?>
            </div>
        </div>
    </div>
</div>
<input id="chuyen_muc" value="<?= isset($chuyenmuc) ? $chuyenmuc : '' ?>" hidden>
<input id="name_page" value="cate" hidden>