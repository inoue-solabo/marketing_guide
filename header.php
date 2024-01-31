<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NWWQ43T');</script>
<!-- End Google Tag Manager -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <title><?php bloginfo('name'); wp_title('|', true, 'left'); ?></title>
  <link rel="icon" href="<?=get_template_directory_uri(); ?>/assets/images/favicon.ico"/>
  <link rel="apple-touch-icon" sizes="64x64" href="<?=get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link href="<?=get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/tnc1rlv.css">
  <link href="<?=get_template_directory_uri(); ?>/assets/css/scroll-hint.css" rel="stylesheet">
  <?php if ( is_home() || is_front_page() ) : ?>
  <link href="<?=get_template_directory_uri(); ?>/assets/css/slick.css" rel="stylesheet">
  <?php endif; ?>
  <script src="<?=get_template_directory_uri(); ?>/assets/js/jquery-3.5.1.min.js"></script>
  <script src="<?=get_template_directory_uri(); ?>/assets/js/scroll-hint.min.js"></script>
  <?php if ( is_home() || is_front_page() ) : ?>
  <script src="<?=get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
  <?php endif; ?>
  <?php wp_head(); ?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWWQ43T"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="l-header js-header">
  <div class="innerBox">
    <p class="l-header__logo">
      <a href="<?=home_url(); ?>/">
        <img src="<?=get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="マーケティングガイド">
      </a>
    </p>
    <div class="l-header__ham js-header_ham">
      <span class="line1"></span>
      <span class="line2"></span>
      <span class="line3"></span>
    </div>
    <div class="l-header__list js-header_list">
      <ul>
        <li>
          <a href="<?=home_url(); ?>/">ホーム</a>
        </li>
        <li>
          <a href="<?=home_url(); ?>/line">LINE運用・配信代行</a>
        </li>
        <li>
          <a href="<?=home_url(); ?>/advertise">広告運用</a>
        </li>
        <li>
          <a href="<?=home_url(); ?>/media">メディア運用</a>
        </li>
        <li>
          <a href="<?=home_url(); ?>/creative">ホームページ制作</a>
        </li>
        <li>
          <a href="<?=home_url(); ?>/consulting">SEO・伴走コンサルティング</a>
        </li>
      </ul>
      <div class="l-header__list__contact">
        <a href="<?=home_url(); ?>/contact" class="contact">お問い合わせ</a>
        <!-- <a href="<?=home_url(); ?>/download" class="download">資料DL</a> -->
      </div>
    </div>
  </div>
</header>
