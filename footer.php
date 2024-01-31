<div class="o-btn is-fixed js-fixed_btn">
  <div class="inner">
    <a href="<?=home_url(); ?>/contact/" class="contact">
      <p>お問い合わせ</p>
    </a>
    <a href="https://s.lmes.jp/landing-qr/1657771313-XMzlbl6o?uLand=82B5Us" class="download" target="_blank" rel="noopener noreferrer">
      <p>LINEで相談</p>
    </a>
  </div>
</div>
<footer class="l-footer js-footer">
  <div class="l-footer__inner">
    <p class="l-footer__logo center">
      <img src="<?=get_template_directory_uri(); ?>/assets/images/common/footer_logo.svg" alt="マーケティングガイド">
    </p>
    <p class="l-footer__text">
      <span>正しい知識と戦略から生まれる、</span>
      <span>再現可能なマーケティング手法</span>
    </p>
    <div class="l-footer__list">
      <div class="l-footer__list__service">
        <p class="l-footer__list__service-title">サービス</p>
        <ul>
          <li class="parent">
            <a href="<?=home_url(); ?>/line">LINE運用・配信代行</a>
            <ul class="child">
              <li>
                <a href="<?=home_url(); ?>/line/works">お客様事例</a>
              </li>
              <li>
                <a href="<?=home_url(); ?>/line/magazine">記事一覧</a>
              </li>
            </ul>
          </li>
          <li class="parent">
            <a href="<?=home_url(); ?>/advertise">広告運用</a>
            <ul class="child">
              <li>
                <a href="<?=home_url(); ?>/advertise/works">お客様事例</a>
              </li>
              <li>
                <a href="<?=home_url(); ?>/advertise/magazine">記事一覧</a>
              </li>
            </ul>
          </li>
          <li class="parent">
            <a href="<?=home_url(); ?>/creative">ホームページ制作</a>
            <ul class="child">
              <li>
                <a href="<?=home_url(); ?>/creative/works">お客様事例</a>
              </li>
              <li>
                <a href="<?=home_url(); ?>/creative/magazine">記事一覧</a>
              </li>
            </ul>
          </li>
          <li class="parent">
            <a href="<?=home_url(); ?>/media">メディア運用</a>
            <ul class="child">
              <li>
                <a href="<?=home_url(); ?>/media/works">お客様事例</a>
              </li>
              <li>
                <a href="<?=home_url(); ?>/media/magazine">記事一覧</a>
              </li>
            </ul>
          </li>
          <li class="parent is-seo">
            <a href="<?=home_url(); ?>/consulting">SEO・伴走コンサルティング</a>
            <ul class="child">
              <li>
                <a href="<?=home_url(); ?>/consulting/works">お客様事例</a>
              </li>
              <li>
                <a href="<?=home_url(); ?>/consulting/magazine">記事一覧</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="l-footer__list__other">
        <ul>
          <!-- <li>
            <a href="<?=home_url(); ?>/member">メンバー</a>
          </li> -->
          <li>
            <a href="<?=home_url(); ?>/contact">お問い合わせ</a>
          </li>
          <li>
            <a href="https://so-labo.co.jp/" target="_blank" rel="noopener noreferrer">運営会社</a>
          </li>
          <li class="privacy">
            <a href="https://so-labo.co.jp/privacy-policy/" target="_blank" rel="noopener noreferrer">プライバシーポリシー</a>
          </li>
        </ul>
      </div>
      <div class="l-footer__list__sns">
        <a href="https://s.lmes.jp/landing-qr/1657771313-XMzlbl6o?uLand=u0chIA" target="_blank" rel="noopener noreferrer">
          <img src="<?=get_template_directory_uri(); ?>/assets/images/common/footer_sns02.svg" alt="line">
        </a>
      </div>
    </div>
    <p class="l-footer__copyright">©Copyright2023 マーケティングガイド.All Rights Reserved.</p>
  </div>
</footer>
<script src="<?=get_template_directory_uri(); ?>/assets/js/common.js"></script>
<script>
  document.addEventListener('wpcf7mailsent', function (event) {
      var url = '/thanks';
      if (event.detail.apiResponse.status === 'mail_sent' && event.detail.apiResponse.into === '733023a') {
          location.href = url;
      } else {
          location.href = '/contact';
      }
  }, false);
</script>
<?php wp_footer(); ?>
</body>
</html>