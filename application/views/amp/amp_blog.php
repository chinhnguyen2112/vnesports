<!DOCTYPE html>
<html lang="vi" amp i-amphtml-layout i-amphtml-no-boilerplate transformed="self;v=1">

<head>
    <meta charset="UTF-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-fit-text" src="https://cdn.ampproject.org/v0/amp-fit-text-0.1.js"></script>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
    <script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
    <script async custom-element="amp-audio" src="https://cdn.ampproject.org/v0/amp-audio-0.1.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php if (isset($index) && $index == 1) { ?>
        <meta name="robots" content="index,follow">
    <?php } else { ?>
        <meta name="robots" content="noindex,nofollow">
    <?php } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Vnesports.vn" />
    <?php $meta_title = str_replace('"', "'", $meta_title);
    $meta_des = str_replace('"', "'", $meta_des); ?>
    <title><?= (isset($meta_title)) ? $meta_title : "Tin tức Esports mới nhất" ?></title>
    <meta name="keywords" content="<?= (isset($meta_key)) ? $meta_key : "Tin tức Esports mới nhất" ?>" />
    <meta name="description" content="<?= (isset($meta_des)) ? $meta_des : "Tin tức Esports mới nhất" ?>" />
    <meta property="og:url" content="<?= (isset($canonical)) ? $canonical :  base_url() ?>">
    <meta property="og:title" content="<?= (isset($meta_title)) ? $meta_title : "Tin tức Esports mới nhất" ?>" />
    <meta property="og:description" content="<?= (isset($meta_des)) ? $meta_des : "Tin tức Esports mới nhất" ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:image:secure_url" content="<?= (isset($meta_img) ? $meta_img : 'images/logo.png') ?>" />
    <meta property="og:image" content="<?= (isset($meta_img) ? $meta_img : 'images/logo.png') ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?= (isset($meta_des)) ? $meta_des : "Tin tức Esports mới nhất" ?>" />
    <meta name="twitter:title" content="<?= (isset($meta_title)) ? $meta_title : "Tin tức Esports mới nhất" ?>" />
    <link href="/images/favicon.png" rel="shortcut icon" type="image/x-icon" />
    <link rel="canonical" href="<?= (isset($canonical)) ? $canonical : base_url() ?>" />
<link rel="amphtml" href="<?= (isset($canonical_amp)) ? $canonical_amp : base_url() ?>" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap">
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript>
        <style amp-boilerplate>
            body {
                -webkit-animation: none;
                -moz-animation: none;
                -ms-animation: none;
                animation: none
            }
        </style>
    </noscript>
    <style amp-runtime i-amphtml-version="012308112021001">
    </style>
    <style amp-custom>a,abbr,acronym,address,applet,big,blockquote,body,caption,cite,code,dd,del,dfn,div,dl,dt,fieldset,font,form,h1,h2,h3,h4,h5,h6,html,iframe,img,ins,kbd,label,legend,li,object,ol,p,pre,q,s,samp,small,span,strike,strong,sub,sup,table,tbody,td,tfoot,th,thead,tr,tt,ul,var{margin:0;padding:0;border:0;outline:0;font-weight:inherit;font-style:inherit;vertical-align:baseline}a,blockquote,button,code,fieldset,form,h1,h2,h3,h4,h5,h6,input,legend,p,pre,select,span,sub,td,textarea,th{font-size:16px;line-height:20.8px}button{border:0}a,button,input[type=reset],input[type=submit]{cursor:pointer}ol,ul{list-style:none}i{font-style:italic}strong{font-weight:700}article,aside,figure,footer,header,hgroup,menu,nav,section{display:block}a img,img{border:0;margin:0;padding:0;vertical-align:middle;max-width:100%;max-height:100%}button:focus,input:focus,select:focus,textarea:focus{outline:0}.clear{clear:both}img{object-fit:cover;object-position:center center}a,a:focus,a:hover{text-decoration:none}::placeholder,select{color:#999}*{font-family:'Mulish',sans-serif}img.img_logo_bot_header{width:155px;margin-right:36px;padding:6px 0}.body_width {max-width: 750px;margin: auto;}.login_header{border:2px solid #797979}.content_menu{max-width:1130px;width:100%;padding:0 15px;margin:0 auto;box-sizing:border-box}.header_cont_menu{display:flex;justify-content:space-between;border-bottom:1px solid #bdbdbd;padding:13px 0}.header_bot.body_width {max-width: 725px;}.header_cont_menu span{font-size:18px;line-height:23px;color:#4f4f4f;display:inline-block;font-weight:600}.btn_close_menu span{font-size:15px;color:#076db6;font-weight:400}.btn_close_menu amp-img{width:25px;margin-left:10px}.item_content_left a{color:#9f224e;font-size:14px;font-weight:700;transition:0.5s}.item_content_left a:hover{text-decoration:revert}.item_page{margin-bottom:15px}.item_page a{font-size:14px;font-weight:700;color:#222;transition:0.5s}.item_page a:hover{text-decoration:revert}.site-footer{position:relative;padding-top:40px;background-color:#272932;background-size:cover}.title_widget{color:#ddd;line-height:25px;font-size:14px;margin-bottom:10px}.contact_infor li{display:flex;align-items:center}.contact_infor p{list-style:none;padding:5px 0;color:#ddd;line-height:25px;font-size:14px}.contact_infor amp-img{margin-right:5px}.list_contact{display:flex;flex-wrap:wrap}.ft_right{display:flex;width:58%;padding:0 10px}.title_r::after{content:'';width:30px;height:2px;background:#253d6c;display:block;position:relative;bottom:-12px}.list_links{display:flex;flex-wrap:wrap}.item_link_ft{padding:5px 0;width:50%}.item_link_ft a{color:#eee;font-size:14px;line-height:25px}.item_link_ft amp-img{width:15px}.form_email{display:flex;flex-direction:column}.form_email p{margin-bottom:10px;color:#DDD;line-height:1.5;font-size:14px;padding:5px 0}.input_text{background:#2f313c;border:none;color:#EEE;padding:8px 15px;margin-bottom:10px}.btn_submit_form{color:#fff;background:#ea9912;padding:8px 20px;border:none;font-size:14px;text-transform:uppercase;border-radius:2px;transition:0.5s}.btn_submit_form:hover{background:#000}.list_link_bottom ul{display:flex}.list_link_bottom a{margin-left:5px;color:#ddd;font-size:13px}.list_link_bottom li:not(:last-child)::after{content:'/';margin-right:6px;color:#888}.widget_home{background:#FBFDFF;padding-top:20px}.breadcrumb{background:#e5e5e575;padding:.5rem;border-radius:8px}.this_breadcrumb{font-size:16px;line-height:24px;color:#999;font-weight:700}.link_breadcrumb{position:relative;line-height:1.5;font-size:16px;color:#000;font-weight:600;margin-right:25px}.last_breadcrumb:after{content:"";width:6px;height:6px;border-top:1px solid #000;border-right:1px solid #000;-webkit-transform:rotate(45deg);transform:rotate(45deg);position:absolute;left:-19px;top:8px}.link_breadcrumb svg{width:1rem;height:1rem;margin-bottom:-2px}h3,.content_blog h3 span{font-size:23px;line-height:32px;font-weight:600;margin-bottom:12px;color:#0040ff;text-align:left}h4,.content_blog h4 span,.content_blog h4 p{font-size:18px;line-height:30px;font-weight:500;margin-bottom:12px;color:#0040ff;text-align:left}h5,h6,h5 span,h6 span,h5 p,h6 p{font-weight:500;color:#0040ff;text-align:left}.content_blog p,.content_blog span{margin-bottom:10px;font-size:17px;line-height:1.5;text-align:justify;white-space:unset}.content_blog a p,.content_blog a span{color:unset}.content_blog ul{padding:0;padding-left:30px;list-style:disc}figcaption{font-size:16px;text-align:center;font-style:italic;background:#ccc;line-height:28px}.content_blog{font-size:17px;font-weight:400;line-height:20px}.box_title_ml{display:flex;align-items:center;justify-content:space-between}.img_show_ml{margin-left:10px;rotate:90deg}.img_ml{width:16px;margin-right:5px;margin-top:-4px}.list_mucluc{margin-bottom:8px}.list_mucluc a{font-size:15px;line-height:24px;text-align:center;color:#131736}li .toc-ul{padding-left:15px}.toc-link-1{font-weight:600}.content_blog h2,.content_blog h2 span{font-weight:700;font-size:25px;line-height:32px;color:#0040ff;text-align:left;margin:12px 0}.title_handbook:hover{color:#ffc600}figure{margin:auto;width:100%}.content_blog div{margin:10pt 0}.content_blog amp-img{height:auto;width:100%}a.H3abc{padding-left:15px}a.H4abc{padding-left:25px}.date_post amp-img{width:unset;margin:unset;border-radius:unset;height:unset}.content_blog ul li{line-height:1.5;white-space:unset;margin:0 0 10px 0}.box_tag{margin:20px 0;display:flex;flex-wrap:wrap;gap:5px}.title_tag{line-height:1.5;display:flex;align-items:center;font-size:14px;color:#312e61;font-weight:600}.title_tag amp-img{width:20px;transform:rotate(90deg);margin-right:5px}.this_tag{width:fit-content;color:#333;font-size:11px;font-weight:500;border:1px #ddd solid;border-radius:30px;padding:6px 12px;line-height:unset}.img_blog_same{height:auto;width:100%}.sapo p,.sapo span{margin-bottom:10px;font-size:17px;line-height:1.5;text-align:justify}.content_blog a{box-shadow:inset 0 -4px 0 #7be2af;font-weight:700;color:#000}.content_blog a:hover{background:#7be2af}th,td{border:none;border-bottom:1px solid #000;border-left:1px solid #000;text-align:center;padding:10px}table{width:100%;border-spacing:0;border:1px solid #000;border-bottom:none;border-color:black}th:first-child,td:first-child{border-left:none}.content_blog table p,.content_blog table span{margin-bottom:0;font-size:17px;line-height:1.5}.content_blog table th p{text-align:center;font-weight:700}.follow_ggnew{background:#f1f2f2;border-radius:16px;padding:2px 10px;font-size:14px;color:#7f7f80;font-weight:500}.sidebar_content{width:100%;margin-top:20px}.sidebar_box{margin-bottom:20px}.box_heading{text-align:center;padding:4px 10px;background:#ea9912}.box_heading img{width:22px}.box_heading a{color:#fff;text-transform:uppercase;font-size:16px;font-weight:600;display:block}.box_content_sidebar{background-color:#f3f3f3}.item_content_sidebar{font-size:14px;font-weight:600;padding-top:8px;padding-bottom:8px;padding-left:10px;position:relative;border:1px solid #dedede}.icon_li{margin-right:10px;width:13px}.item_content_sidebar a{text-transform:uppercase;color:#cb0030;font-size:14px}.item_hot_news{display:block;padding:8px 10px;position:relative;border:1px solid #dedede}.item_hot_news a{font-weight:500;line-height:22px;color:#333;font-size:14px}.item_hot_news a:hover{color:#ea9912}.btn_see_more{background:#533c94;border:none;width:100%;text-align:center;cursor:pointer;transition:all .4s ease 0s,transform .4s ease 0s,visibility .4s linear 0s;text-align:center}.btn_see_more:hover{background:#eeebeb}.btn_see_more:hover a{color:#333}.btn_see_more a{color:#fff;text-transform:uppercase;font-size:13px;padding:5px;font-weight:500;display:block}.sidebar_box_gray{margin-bottom:20px;padding-bottom:2px;border:1px solid #CECECE;color:#666}.box_linkout p{font-weight:700;padding:6px 10px;border-bottom:1px solid #CECECE;font-size:13px;background:-webkit-linear-gradient(top,#fff,#ddd);font-size:16px}.box_content_links ul{line-height:22px;list-style:circle;margin:10px;border:none}.box_content_links li{list-style:circle inside;display:list-item;background:none;border-bottom:1px dashed #CECECE;padding-bottom:5px;margin-bottom:5px;color:#000}.box_content_links a{color:#000;font-size:15px}.box_content_links{max-height:350px;overflow:auto}.box_content_links::-webkit-scrollbar{width:2px}.box_content_links::-webkit-scrollbar-thumb{background:#ccc}.top_header{width:100%;transition:0.5s}.flex{border-bottom:none;display:flex;justify-content:space-between;align-items:center}.header_bot{position:fixed;top:0;width:-webkit-fill-available;z-index:201;padding:10px 0;justify-content:flex-start;padding-right:20px;align-items:center;padding-left:5px;flex-direction:row;border-bottom:1px solid #DBDBDB;transition:all .3s;background:#fff;margin:auto;display:flex;max-width:750px}.btn_submenu_top{position:relative;display:inline-block;width:40px;height:30px}.btn_submenu_top span{margin:0 auto;position:relative;top:12px;transition:background-color 0.3s}.btn_submenu_top span:before,.btn_submenu_top span:after{position:absolute;content:""}.btn_submenu_top span,.btn_submenu_top span:before,.btn_submenu_top span:after{width:20px;height:2px;background-color:#bdbdbd;display:block;opacity:1}.btn_submenu_top span:before{margin-top:-5px;transition-property:margin,transform;transition-duration:0.2s;transition-delay:0.2s,0}.btn_submenu_top span:after{margin-top:5px;transition-property:margin,transform;transition-duration:0.2s;transition-delay:0.2s,0}.main_header{width:100%;background:#fff;border-bottom:1px solid #ccc;max-width: 750px;margin: auto;}.login_header{border:none}.all_menu_drop{top:51px;position:absolute;width:100vw;height:100vh;background:#f7f7f7;left:0;transform:scale(0);transition:0.5s}.ft_right{width:54%}.main_content{padding-top:55px}.box_author{display:flex;align-items:center;margin-bottom:18px;gap:12px;flex-wrap:wrap}.right_detail{margin:10px 0;background:#FBFDFF;box-shadow:0 0 20px rgb(19 23 54 / .1);border-radius:8px;width:100%;position:unset;float:unset;margin-bottom:20px}.left_detail{width:100%;margin:0;display:inline-block}.blog_same{margin-top:0;padding-bottom:20px}.this_des_handbook{font-size:14px;line-height:20px;margin-bottom:0;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;color:#000;margin-top:0}.header_cont_menu span,.btn_close_menu{display:none}.item_content_left{width:33.33%;margin-bottom:20px}.ft_right{width:100%}.contact{margin-right:30px}.search_mobile{width:100%;display:block}.img_search_mobile{width:20px;position:absolute;top:20px;left:25px}.input_mobile{padding:0 10px 0 33px;width:100%;border-radius:16px;border:1px solid #e5e5e5;font-size:13px;color:#4f4f4f;line-height:32px;box-sizing:border-box}.content_left{padding:15px 0;display:flex;flex-wrap:wrap;float:left;overflow-y:auto;width:72%}.content_right{width:28%;padding-left:12px;float:right;padding-top:15px;border-left:1px solid #bdbdbd;box-sizing:border-box;overflow-y:auto}.logo_ft{max-height:80px;margin-bottom:20px}.footer-widgets{flex-direction:column;background-repeat:unset;background:unset;padding-bottom:0;display:flex;flex-wrap:wrap;z-index:1;position:relative;margin-left:20px;margin-right:20px}.content_footer{flex-direction:column;gap:10px;padding-top:10px;display:flex;width:100%;flex-wrap:wrap;justify-content:space-between}.ft_right{flex-direction:column}.r_01,.r_02,.ft_left,.ft_right{width:100%;padding:0}.title_r{font-weight:600;color:#EEE;font-size:18px;text-transform:uppercase;padding-top:60px;border-bottom:none;height:50px;top:20px;padding-bottom:0;margin:0}.content_copy{flex-direction:column;display:flex;justify-content:space-between;align-items:center}.list_link_bottom{margin-top:10px;width:max-content}.contact{margin-bottom:20px}.copyright{padding:20px 20px;overflow:hidden;box-shadow:inset rgb(255 255 255 / 10%) 0 1px 0;position:relative;color:#fff;background:#1d252c38;border-top:1px solid #1f2128;margin-top:15px}.main_content_blog{display:flex;flex-direction:column;padding-top:0;justify-content:space-between}.blog_content{width:100%;margin-top:0;flex-direction:column;display:flex}.container_widget_about{padding:0 20px;padding-bottom:20px}.box_data_blog{flex-direction:column-reverse;margin-top:24px;gap:16px;align-items:center;display:flex}.left_blog{width:100%}.title_h1{font-size:24px;line-height:34px;color:#131736;font-weight:700;margin-bottom:0}.date_blog{margin-top:0;font-size:14px;line-height:16px;font-weight:400;color:#808EA1;margin-bottom:0}.mucluc_blog{padding:16px;background:#ebebeb}.title_mucluc{font-size:15px;line-height:24px;margin-bottom:0;font-weight:700;text-transform:capitalize;color:#131736;text-align:center}.list_blog_same{display:flex;flex-direction:column;gap:0}.img_item{width:50%;min-height:auto;float:left}.data_handbook{width:calc(50% - 10px);padding-left:0}.this_des_handbook p,.this_des_handbook span{margin:0;font-size:11px;line-height:15px;text-align:left;color:#333;font-weight:normal}.title_handbook{margin-bottom:0;font-size:13px;line-height:15px;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:3;overflow:hidden;font-weight:600;color:#454545}.this_handbook{justify-content:space-between;padding:16px 0;border-bottom:1px solid #e6e8e9;display:flex;width:100%}.date_post span{font-size:11px;margin:0;line-height:16px;margin-bottom:8px;font-weight:500;color:#868686}.date_post{font-size:14px;line-height:1.5;margin:0}.list_mucluc li{padding:6px}.all_menu_drop{overflow-y:auto}.content_left{width:100%;border-bottom:1px solid #bdbdbd}.item_content_left{width:100%}.content_right{width:100%;border:none;float:left;padding-left:0}</style>
</head>

<body>
<amp-analytics type="gtag" data-credentials="include">
        <script type="application/json">
        {
          "vars": {
            "gtag_id": "G-ZMHVTL8HF0",
            "config": {
              "G-ZMHVTL8HF0": { "groups": "default" }
            }
          },
          "triggers": {
            "trackPageview": {
              "on": "visible",
              "request": "pageview"
            }
          }
        }
        </script>
    </amp-analytics>
    <div class="main_content">
        <?php $this->load->view("amp/includes/amp_header"); ?>
        <div class="widget_home">
            <div class="container_widget_about body_width">
                <div class="main_content_blog">
                    <div class="blog_content">
                        <div class="breadcrumb">
                            <a class="link_breadcrumb " href="/">
                                <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                Trang chủ
                            </a>
                            <?php if (isset($breadcrumb_parent)) { ?>
                                <a class="link_breadcrumb last_breadcrumb" href="/<?= $breadcrumb_parent['alias'] ?>/">
                                    <?= $breadcrumb_parent['name'] ?>
                                </a>
                            <?php } ?>
                            <a class="link_breadcrumb last_breadcrumb" href="/<?= $breadcrumb['alias'] ?>/">
                                <?= $breadcrumb['name'] ?>
                            </a>
                        </div>
                        <div class="box_data_blog">
                            <div class="left_blog">
                                <h1 class="title_h1">
                                    <?= $blog['title'] ?>
                                </h1>
                                <div class="box_author">
                                    <div class="box_date">
                                        <p class="date_blog">
                                            <?= replace_date($blog['updated_at']) ?>
                                        </p>
                                    </div>
                                    <a rel="nofollow" class="follow_ggnew" target="_blank" href="https://news.google.com/publications/CAAqBwgKMLKv0Asw8crnAw?hl=vi&gl=VN&ceid=VN:vi">Theo dõi VnEsports trên <amp-img src="/images/googlelogo.svg" alt="Google New" width="20px" height="6px"></amp-img> News</a>
                                </div>
                            </div>
                        </div>
                        <div class="sapo">
                            <?= $blog['sapo'] ?>
                        </div>
                        <div class="right_detail">
                            <div class="mucluc_blog" id="mucluc_blog">
                                <div class="box_title_ml">
                                    <p class="title_mucluc" id="title_mucluc">
                                        <amp-img class="img_ml" src="/images/mucluc.png" alt="mục lục" width="16px" height="16px"></amp-img> Mục lục
                                    </p>
                                    <amp-img src="/images/arrow.svg" class="img_show_ml" alt="mục lục" width="9px" height="16px"></amp-img>
                                </div>
                                <ul class="list_mucluc" id="list_mucluc">

                                </ul>
                            </div>
                        </div>
                        <div class="left_detail">
                            <div class="content_blog" id="content_blog">
                                <?php $content = str_replace('<img','<amp-img layout="intrinsic" height="600" width="800"',$blog['content']);
                                    function removeAttributes($html) {
                                        $html = str_replace(['<font', '</font'], ['<span', '</span'], $html);
                                        $html = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $html);
                                        $keepTags = ['tr', 'td', 'th', 'table', 'a'];
                                        $regex = '/<(\w+)(\s+[^>]*)?>/';
                                        $newHtml = preg_replace_callback($regex, function($matches) use ($keepTags) {
                                            $tag = $matches[1];
                                            $attributes = isset($matches[2]) ? $matches[2] : '';
                                            
                                            if (!in_array(strtolower($tag), $keepTags)) {
                                                return "<$tag>";
                                            }
                                            return "<$tag$attributes>";
                                        }, $html);
                                    
                                        return $newHtml;
                                    }
                                    $content = removeAttributes($content);
                                     echo $content; ?>
                            </div>
                        </div>
                        <?php if ($blog['tag'] != '') { ?>
                            <div class="box_tag">
                                <p class="title_tag"><amp-img src="/images/icon-chu-de.svg" alt="Chủ đề" width="20px" height="17px"></amp-img> Chủ đề:</p>
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
                                            <a class="img_item" href="/<?= $val['alias'] ?><?= ($val['id'] > 1024) ? '' : '/' ?>">
                                                <amp-img class="img_blog_same" src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>" width="168px" height="96"></amp-img>
                                            </a>
                                            <div class="data_handbook">
                                                <a class="title_handbook" href="/<?= $val['alias'] ?><?= ($val['id'] > 1024) ? '' : '/' ?>">
                                                    <?= $val['title'] ?>
                                                </a>
                                                <p class="date_post">
                                                    <span>
                                                        <?= date('d-m-Y', $val['updated_at']) ?>
                                                        <span>
                                                </p>
                                                <div class="this_des_handbook">
                                                    <?= $val['sapo'] ?>
                                                </div>
                                            </div>

                                        </div>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <?php include('includes/amp_sidebar.php') ?>
                </div>
            </div>
        </div>
        <?php $this->load->view("amp/includes/amp_footer"); ?>
        <script src="/assets/js/jquery.min.js" ></script>
        <script src="/assets/js/jquery.toc.min.js" ></script>
        <script src="/assets/js/header.js"  ></script>
        <script src="/assets/js/detail_blog.js" ></script>
</body>

</html>