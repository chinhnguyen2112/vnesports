<div class="widget_home">
    <div class="container_widget_about body_width">
        <div class="main_content_blog">
            <div class="blog_content">
                <div class="breadcrumb">
                    <a href="/">Trang chủ</a>
                    <span> / </span>
                    <a class="link_breadcrumb" href="/<?= $cate_alias ?>"><?= $breadcrumb ?></a>
                    <span> / </span>
                    <span class="this_breadcrumb"><?= $blog['title'] ?></span>
                </div>
                <div class="box_data_blog">
                    <div class="left_blog">
                        <h1 class="title_h1"><?= $blog['title'] ?></h1>
                        <div class="box_author">
                            <div class="box_date">
                                <p class="date_blog"><?= replace_date($blog['created_at']) ?></p>
                            </div>
                            <a rel="nofollow" class="follow_ggnew" target="_blank" href="https://news.google.com/publications/CAAqBwgKMLKv0Asw8crnAw?hl=vi&gl=VN&ceid=VN:vi">Theo dõi VnEsports trên <img src="/images/googlelogo.svg" alt=""> News</a>
                        </div>
                    </div>
                </div>
                <div class="sapo"> <?= $blog['sapo'] ?></div>
                <div class="right_detail">
                    <div class="mucluc_blog" id="mucluc_blog">
                        <div class="box_title_ml">
                            <p class="title_mucluc" id="title_mucluc"><img class="img_ml" src="/images/mucluc.png" alt="mục lục"> Mục lục</p>
                            <img src="/images/arrow.svg" class="img_show_ml" alt="mục lục">
                        </div>
                        <ul class="list_mucluc" id="list_mucluc">

                        </ul>
                    </div>
                </div>
                <div class="left_detail">
                    <div class="content_blog" id="content_blog">
                        <?= $blog['content'] ?>
                    </div>
                </div>
                <?php if ($blog['tag'] != '') { ?>
                    <div class="box_tag">
                        <p class="title_tag"><img src="/images/icon-chu-de.svg" alt="Chủ đề"> Chủ đề:</p>
                        <?php $tag = explode(',', $blog['tag']);
                        foreach ($tag as $key_tag => $val) {
                            $this_tag = tag(['id' => $val]);
                            echo '<a href="/' . $this_tag[0]['alias'] . '/" class="this_tag">' . $this_tag[0]['name'] . '</a>';
                        } ?>
                    </div>
                <?php } ?>
                <?php if ($blog_same != null) { ?>
                    <div class="blog_same">
                        <div class="list_blog_same">
                            <?php
                            foreach ($blog_same as $val) { ?>
                                <div class="this_handbook ">
                                    <a class="img_item" href="/<?= $val['alias'] ?>/">
                                        <img class="img_blog_same" src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                    </a>
                                    <div class="data_handbook">
                                        <a class="title_handbook" href="/<?= $val['alias'] ?>"><?= $val['title'] ?></a>
                                        <p class="date_post">
                                            <a class="name_cate" href="/<?= $blog['alias_cate'] ?>"><?= $blog['name_cate'] ?></a>
                                            <span>
                                                <?= date('d-m-Y', $val['created_at']) ?>
                                                <span>
                                        </p>
                                        <div class="this_des_handbook"><?= $val['sapo'] ?></div>
                                    </div>

                                </div>
                            <?php
                            } ?>
                        </div>
                    </div>
                <?php } ?>
                <div class="line_blog"></div>
            </div>
            <?php include('includes/sidebar.php') ?>
        </div>
    </div>
</div>