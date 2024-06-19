<footer id="colophon" class="site-footer">
    <div class="footer-widgets body_width">
        <div class="content_footer">
            <div class="ft_left">
                <amp-img class="logo_ft" src="/images/logo.png" alt="logo footer" width="300px" height="58px"></amp-img>
                <div class="widget">
                    <p class="title_widget">Cập nhật thông tin mới về nhất Game Esports được phát triển bởi Ohs Việt
                        Nam...</p>
                    <div class="contact_infor">
                        <ul class="list_contact">
                            <li style="width:100%">
                                <amp-img src="/images/icon_address_ft.png" alt="Địa chỉ" width="15px" height="15px"></amp-img>
                                <p>KĐT Đoàn Ngoại Giao, P. Xuân Tảo, Q. Bắc Từ Liêm, Hà Nội</p>
                            </li>
                            <li>
                                <amp-img src="/images/icon_website_ft.png" alt="website" width="15px" height="15px"></amp-img>
                                <p>VnEsports.Vn -</p>
                            </li>
                            <li style="margin-left:3px;width:51%">
                                <amp-img src="/images/icon_mail_ft.png" alt="email" width="15px" height="15px"></amp-img>
                                <p>vnesports@gmail.com</p>
                            </li>
                            <li>
                                <amp-img src="/images/icon_fb_ft.png" alt="facebook" width="15px" height="15px"></amp-img>
                                <p>fb.com/vnesports.vn</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="ft_right">
                <div class="r_01">
                    <p class="title_r">CHUYÊN MỤC</p>
                    <div class="list_links">
                        <?php $menu_cate_parent = chuyen_muc('parent = 0 AND id != 42 AND id != 41  AND id != 9');
                        foreach ($menu_cate_parent as $val) {
                            $menu_cate = chuyen_muc(['parent' => $val['id']]); ?>
                            <div class="item_link_ft">
                                <span >
                                    <a href="/<?= $val['alias'] ?>/">
                                        <amp-img src="/images/icon_arrow_ft.png" alt="Chuyên mục" width="15px" height="15px"></amp-img>
                                        <?= $val['name'] ?>
                                    </a>
                                </span>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="r_02">
                    <p class="title_r">ĐĂNG KÝ NHẬN TIN</p>
                    <form action="#" class="form_email" id="newsletter" target="_blank">
                        <p><strong>Đăng ký nhận bản tin</strong> , bài viết tư vấn câp nhật hằng ngày.</p>
                        <input class="input_text" type="email" name="email" placeholder="Email Address" required>
                        <input class="btn_submit_form" value="SIGN UP" type="submit">
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="content_copy body_width">
            <div class="site-info"> © 2022 VnEsports</div>
            <div class="list_link_bottom">
                <ul>
                    <li>
                        <a href="/gioi-thieu/">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="/lien-he/">Liên hệ</a>
                    </li>
                    <li>
                        <a href="#">Chính sách</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>