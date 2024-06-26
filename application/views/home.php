<h1 style="display: none;">VnEsports</h1>
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
                                            <img class="img_first" src="/images/load.jpg" data-src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>" width="530px" height="305px">
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
                        if ($key > 4) { ?>
                            <div class="this_train">
                                <a href="/<?= $val['alias'] ?><?= ($val['id'] > 1024) ? '' : '/' ?>">
                                    <p class="title_blog only_mobile"><?= $val['title'] ?></p>
                                    <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>" width="267px" height="154px">
                                    <div class="box_right_data">
                                        <p class="title_blog only_pc"><?= $val['title'] ?></p>
                                        <p class="date_post"><span><?= date('d-m-Y', $val['updated_at']) ?></span></p>
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
                <div class="load_more">
                    <div class="div_bgr_load">
                        <span>Hiển thị thêm tin</span>
                        <img src="/images/arrow_loadmore.svg" alt="xem thêm"   width="7px" height="12px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>