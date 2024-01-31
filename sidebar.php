<aside class="l-sidebar">
  <div class="l-sidebar__banner">
    <a href="https://s.lmes.jp/landing-qr/1657771313-XMzlbl6o?uLand=8HURrT" target="_blank" rel="noopener noreferrer">
      <picture>
        <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/common/side_line.webp">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/common/side_line.png" alt="no-image" class="line公式アカウント"/>
      </picture>
    </a>
  </div>
  <div class="l-sidebar__category">
    <?php
    $current_url = esc_url(home_url(add_query_arg(array(),$wp->request)));
    $slug = '';
    if (strpos($current_url, '/works/') !== false) {
      $slug = 'works';
    } elseif (strpos($current_url, '/magazine/') !== false) {
      $slug = 'magazine';
    }
    if ($slug === 'works') {
      ?>
      <p class="l-sidebar__category__title">成功事例カテゴリー</p>
      <ul class="l-sidebar__category__list">
        <li>
          <a href="<?= home_url(); ?>/line/works">LINE運用・配信代行</a>
        </li>
        <li>
          <a href="<?= home_url(); ?>/advertise/works">広告運用</a>
        </li>
        <li>
          <a href="<?= home_url(); ?>/creative/works">ホームページ制作</a>
        </li>
        <li>
          <a href="<?= home_url(); ?>/media/works">メディア運用</a>
        </li>
        <li>
          <a href="<?= home_url(); ?>/consulting/works">SEO・伴走コンサルティング</a>
        </li>
      </ul>
      <?php
    } elseif ($slug === 'magazine') {
        ?>
      <p class="l-sidebar__category__title">記事カテゴリー</p>
      <ul class="l-sidebar__category__list">
        <li>
          <a href="<?= home_url(); ?>/line/magazine">LINE運用・配信代行</a>
        </li>
        <li>
          <a href="<?= home_url(); ?>/advertise/magazine">広告運用</a>
        </li>
        <li>
          <a href="<?= home_url(); ?>/creative/magazine">ホームページ制作</a>
        </li>
        <li>
          <a href="<?= home_url(); ?>/media/magazine">メディア運用</a>
        </li>
        <li>
          <a href="<?= home_url(); ?>/consulting/magazine">SEO・伴走コンサルティング</a>
        </li>
      </ul>
      <?php
    }
    ?>
  </div>
  <div class="l-sidebar__cta">
    <div class="l-sidebar__cta__content">
      <p class="l-sidebar__cta__logo">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/common/side_logo.svg" alt="株式会社solabo マーケティングガイド"/>
      </p>
      <p class="l-sidebar__cta__text">
       株式会社SoLabo（ソラボ）は、SEO、コンテンツ制作、SNS戦略、データ分析を含む<br class="is-tab">総合的なデジタルマーケティングで、お客様のビジネス成長を全面的にサポートします。
      </p>
      <ul class="l-sidebar__cta__list">
        <li>LINEでの運用について効果的に行う方法が分からない</li>
        <li>ターゲット層にリーチしてコンバージョンを高めることができない。</li>
        <li>自社のオウンドメディアをどのように成長させるか分からない。</li>
        <li>検索エンジンでの順位を上げるためのSEO対策ができない</li>
      </ul>
      <div class="l-sidebar__cta__btn">
        <div class="l-sidebar__cta__btn-flex">
          <!-- <div class="detail is-download">
            <p>
              <span>まずは資料ダウンロード！</span>
            </p>
            <a href="<?=home_url(); ?>/download/">
              <span>
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.706 6.558a2.025 2.025 0 012.026 2.025v10.128a2.025 2.025 0 01-2.026 2.025H4.502a2.025 2.025 0 01-2.025-2.025V6.558c0-1.124.901-2.026 2.025-2.026h6.077l2.025 2.026h8.102zm-.76 7.09h-3.29V9.595H14.63v4.051h-3.292l4.305 4.304" fill="#fff"/></svg>
              </span>
              <span>資料ダウンロード</span>
              <span>
              <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.097.415a.394.394 0 00-.243.364v3.152H1.126a.394.394 0 100 .788h4.728V7.87a.394.394 0 00.673.278l3.545-3.545a.394.394 0 000-.558L6.527.5a.394.394 0 00-.43-.085z" fill="#fff"/></svg>
              </span>
            </a>
          </div> -->
          <div class="detail is-contact">
            <a href="<?=home_url(); ?>/contact">
              <span>
                <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.471 5.468a3.038 3.038 0 00-3.038 3.038v.305l9.114 4.908 9.115-4.906v-.307a3.038 3.038 0 00-3.038-3.038H6.471zm15.191 5.069l-8.754 4.714a.76.76 0 01-.72 0l-8.755-4.714v7.083a3.038 3.038 0 003.037 3.04h12.153a3.038 3.038 0 003.038-3.039v-7.083z" fill="#fff"/></svg>
              </span>
              <span>お問い合わせ</span>
              <span>
                <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.097.415a.394.394 0 00-.243.364v3.152H1.126a.394.394 0 100 .788h4.728V7.87a.394.394 0 00.673.278l3.545-3.545a.394.394 0 000-.558L6.527.5a.394.394 0 00-.43-.085z" fill="#fff"/></svg>
              </span>
            </a>
          </div>
        </div>
        <div class="l-sidebar__cta__btn-tel">
          <a href="tel:0120356117">
            <span>
              <img src="<?= get_template_directory_uri(); ?>/assets/images/common/side_tel.svg" alt="電話ロゴ"/>
            </span>
            <span>0120-356-117</span>
          </a>
          <p>受付時間 9:00-19:00 [ 土・日・祝日除く ]</p>
      </div>
      </div>
    </div>
  </div>
</aside>
