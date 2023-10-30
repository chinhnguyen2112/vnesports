<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <?php if (isset($index) && $index == 1) { ?>
    <meta name="robots" content="index,follow">
  <?php } else { ?>
    <meta name="robots" content="noindex,nofollow">
  <?php } ?>
  <title><?= isset($meta_title) ? $meta_title : '' ?></title>
  <meta content="<?= isset($meta_des) ? $meta_des : '' ?>" name="description">
  <meta content="<?= isset($meta_title) ? $meta_title : '' ?>" name="msvalidate.01">
  <meta name="keywords" content="<?= isset($meta_key) ? $meta_key : 'Tin tức Esports mới nhất' ?>">
  <link rel="canonical" href="<?= (isset($canonical)) ? $canonical : "" ?>">
  <meta property="og:locale" content="vi_VN">
  <meta property="og:type" content="article">
  <meta property="og:url" content="<?= (isset($canonical)) ? $canonical : "" ?>">
  <meta property="og:title" content="<?= isset($meta_title) ? $meta_title : '' ?>">
  <meta property="og:site_name" content="VnEsport">
  <meta property="og:description" content="<?= isset($meta_des) ? $meta_des : '' ?>">
  <meta property="og:image:secure_url" content="<?= base_url() ?><?= (isset($meta_img) ? $meta_img : 'images/logo.png') ?>">
  <meta property="og:image" content="<?= base_url() ?><?= (isset($meta_img) ? $meta_img : 'images/logo.png') ?>">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:description" content="<?= isset($meta_des) ? $meta_des : '' ?>">
  <meta name="twitter:title" content="<?= isset($meta_title) ? $meta_title : '' ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <link rel="shortcut icon" href="<?= base_url() ?>images/favicon.png">
  <link data-n-head="ssr" rel="icon" type="image/x-icon" href="<?= base_url() ?>images/fa-icon.png">
  <link rel="stylesheet" href="/assets/css/font.css">
  <link rel="stylesheet" href="/assets/css/reset.css">
  <link rel="stylesheet" href="/assets/css/header.css">
  <link rel="stylesheet" href="/assets/css/footer.css">

  <?php if (isset($list_css)) {
    foreach ($list_css as $css) { ?>
      <link rel="stylesheet" href="/assets/css/<?= $css ?>">
  <?php  }
  } ?>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZMHVTL8HF0"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-ZMHVTL8HF0');
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Vnesports",
      "alternateName": "Vnesports",
      "url": "https://vnesports.vn/",
      "logo": "https://vnesports.vn/images/logo.png",
      "sameAs": [
        "https://vnesports.vn/",
        "https://www.pinterest.com/gamevnesports/",
        "https://soundcloud.com/vnesports-game",
        "https://vnesports.tumblr.com/",
        "https://twitter.com/VnEsportsgame/",
        "https://www.youtube.com/@VnEsportsgame/about"
      ]
    }
  </script>
  <meta name='dmca-site-verification' content='bFlIMHpXeE5aTGcrOFhkTDdCcGRnZz090'>
</head>

<body>
  <?php
  $this->load->view("includes/header");


  if (isset($content)) {
    $this->load->view($content);
  }

  $this->load->view("includes/footer");
  ?>
  <script src="/assets/js/jquery.min.js"></script>
  <?php
  if (isset($list_js)) {
    foreach ($list_js as $js) { ?>
      <script src="/assets/js/<?= $js ?>"></script>
  <?php  }
  } ?>
  <script src="/assets/js/header.js"></script>
</body>

</html>