<div class="container">
    <div class="heading_left">
        <p>Có <?= $count ?> kết quả tìm kiếm với từ khóa : <?= $key_search ?></p>
    </div>
    <div class="result_content body_width">
        <div class="left_content">
            <?php if ($result != null) { ?>
                <div class="result_top">
                    <div class="first_result">
                        <a class="linl_all_detail" title="<?= $result[0]['title'] ?>" href="/<<?= alias_new($result[0]['alias'], $result[0]['id']) ?>">
                            <div class="blog_top_content blog_top_left">
                                <img src="/<?= $result[0]['image'] ?>" alt="<?= $result[0]['title'] ?>">
                            </div>
                            <div class="blog_top_content blog_top_right">
                                <p class="title_blog_top"><?= $result[0]['title'] ?></p>
                                <div class="sapo_first"><?= $result[0]['sapo'] ?></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="list_result">
                    <?php foreach ($result as $key => $val) {
                        if ($key > 0) { ?>
                            <div class="item_result">
                                <a title="<?= $val['title'] ?>" href="/<?= alias_new($val['alias'], $val['id']) ?>">
                                    <p class="title_blog only_mobile"><?= $val['title'] ?></p>
                                </a>
                                <a class="linl_all_detail link_fl" title="<?= $val['title'] ?>" href="/<?= alias_new($val['alias'], $val['id']) ?>">
                                    <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                    <div class="box_content_blog">
                                        <p class="title_blog"><?= $val['title'] ?></p>
                                        <div class="fl_date">
                                            <p class="cate_post"><?php $cate = chuyen_muc(['id' => $val['chuyenmuc']]);
                                                                    echo $cate[0]['name']; ?></p>
                                            <span class="dot_item"></span>
                                            <p class="date_post"><?= date('d-m-Y', $val['created_at']) ?></p>
                                        </div>
                                        <span class="des_post"><?= $val['sapo'] ?></span>
                                    </div>
                                </a>
                            </div>
                    <?php }
                    } ?>
                </div>
            <?php  } ?>
            <div class="pagination">
                <?= $this->pagination->create_links() ?>
            </div>
        </div>
        <div class="right_content">
            <?php include('includes/sidebar.php') ?>
        </div>
    </div>
</div>