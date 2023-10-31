</div>
<footer id="colophon" class="site-footer">
    <div class="footer-widgets body_width">
        <div class="content_footer">
            <div class="ft_left">
                <img class="logo_ft" src="/images/logo.png" alt="logo footer">
                <div class="widget">
                    <p class="title_widget">Cổng thông tin Game Esports được phát triển bởi Ohs Việt Nam...</p>
                    <div class="contact_infor">
                        <ul class="list_contact">
                            <li style="width:100%">
                                <img src="/images/icon_address_ft.png" alt="Địa chỉ">
                                <p>N01-T1, KĐT Đoàn Ngoại Giao, P. Xuân Tảo, Q. Bắc Từ Liêm, Hà Nội</p>
                            </li>
                            <li>
                                <img src="/images/icon_website_ft.png" alt="website">
                                <p>VnEsports.Vn -</p>
                            </li>
                            <li style="margin-left:3px;width:51%">
                                <img src="/images/icon_mail_ft.png" alt="email">
                                <p>vnesports@gmail.com</p>
                            </li>
                            <li>
                                <img src="/images/icon_fb_ft.png" alt="facebook">
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
                        <?php $menu_cate_parent = chuyen_muc('parent = 0 AND id != 42 AND id != 41');
                        foreach ($menu_cate_parent as $val) {
                            $menu_cate = chuyen_muc(['parent' => $val['id']]); ?>
                            <div class="item_link_ft">
                                <span onclick="big_item_menu(this,1)">
                                    <a href="/<?= $val['alias'] ?>/">
                                        <img src="/images/icon_arrow_ft.png" alt="Chuyên mục">
                                        <?= $val['name'] ?>
                                    </a>
                                </span>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="r_02">
                    <p class="title_r">ĐĂNG KÝ NHẬN TIN</p>
                    <form class="form_email" id="newsletter">
                        <p><strong>Đăng ký nhận bản tin</strong> , bài viết tư vấn câp nhật hằng ngày.</p>
                        <input class="input_text" type="email" name="email" placeholder="Email Address" required>
                        <input class="btn_submit_form" value="SIGN UP" type="submit">
                    </form>
                    <a target="_blank" style="margin-top: 15px;display:block" rel="nofollow" href="https://www.dmca.com/r/33wdzmm" title="DMCA.com Protection Status" class="dmca-badge"><img width="120" height="21" loading="lazy" src="https://images.dmca.com/Badges/dmca_protected_sml_120b.png?ID=f936b4b7-f675-4399-9627-694869ab0664" alt="DMCA.com Protection Status"></a>
                    <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
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
<div class="banner_site">
    <div class="list_banner body_width">
        <a href="https://vnadssb.com?a=vn24976&e=5" target="_blank" rel="nofollow" class="img_banner">
            <img src="<?= base_url() ?>images/site/banner1.gif" alt="banner">
        </a>
        <img src="/images/icon_cancel.png" alt="đóng" class="close_banner">
    </div>
</div>