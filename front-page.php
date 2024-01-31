<?php
    //Template Name: トップページ
    get_header();
?>

<main class="p-top is-main">
  <section class="o-mv is-main">
    <p class="bg_text js-bg_text">MARKETING GUIDE</p>
    <div class="inner">
      <div class="image slider js-mv_slider">
        <div class="image__detail">
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/top/mv_pc.webp" media="(min-width:768px)">
            <source srcset="<?=get_template_directory_uri(); ?>/assets/images/top/mv_pc.png" media="(min-width:768px)">
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/top/mv_sp.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/top/mv_sp.png" alt="イラスト">
          </picture>
        </div>
        <div class="image__detail">
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/line/mv_pc.webp" media="(min-width:768px)">
            <source srcset="<?=get_template_directory_uri(); ?>/assets/images/line/mv_pc.png" media="(min-width:768px)">
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/line/mv_sp.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/line/mv_sp.png" alt="イラスト">
          </picture>
        </div>
        <div class="image__detail">
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/media/mv_pc.webp" media="(min-width:768px)">
            <source srcset="<?=get_template_directory_uri(); ?>/assets/images/media/mv_pc.png" media="(min-width:768px)">
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/media/mv_sp.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/media/mv_sp.png" alt="イラスト">
          </picture>
        </div>
        <div class="image__detail">
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/creative/mv_pc.webp" media="(min-width:768px)">
            <source srcset="<?=get_template_directory_uri(); ?>/assets/images/creative/mv_pc.png" media="(min-width:768px)">
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/creative/mv_sp.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/creative/mv_sp.png" alt="イラスト">
          </picture>
        </div>
        <div class="image__detail">
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/consulting/mv_pc.webp" media="(min-width:768px)">
            <source srcset="<?=get_template_directory_uri(); ?>/assets/images/consulting/mv_pc.png" media="(min-width:768px)">
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/consulting/mv_sp.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/consulting/mv_sp.png" alt="イラスト">
          </picture>
        </div>
        <div class="image__detail">
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/advertise/mv_pc.webp" media="(min-width:768px)">
            <source srcset="<?=get_template_directory_uri(); ?>/assets/images/advertise/mv_pc.png" media="(min-width:768px)">
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/advertise/mv_sp.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/advertise/mv_sp.png" alt="イラスト">
          </picture>
        </div>
      </div>
      <div class="text">
        <h1><span>多彩なサービスで</span><span>マーケティングを</span><span>最適化。</span></h1>
        <p><span>LINE・SEO・広告運用、さらには補助金を活用したホームページ制作まで</span><span>ソラボのマーケティング実績をすべて公開！</span></p>
      </div>
    </div>
    <div class="o-small_cta">
      <div class="o-small_cta__detail is-contact">
        <p><span>マーケティング施策について</span><br><span>無料相談・お見積りを申し込み</span></p>
        <p><span>ソラボで培った「本当に効果のあるノウハウ」で</span><span>再現性の高いマーケティング戦略を提案します。</span></p>
        <a href="<?=home_url(); ?>/contact" class="is-contact">
          <span>
            <img src="<?= get_template_directory_uri(); ?>/assets/images/common/cta_logo01.svg" alt="メールロゴ">
          </span>
          お問い合わせをする
        </a>
      </div>
      <!-- <div class="o-small_cta__detail is-download">
        <p><span>サービスごとに培ってきたノウハウを</span><span>今から役に立つ、特別資料にて公開</span></p>
        <p><span>マーケティング戦略や施策事例の資料を</span><span>ご用意しています。</span><span>無料ですので、ぜひご活用ください。</span></p>
        <a href="<?=home_url(); ?>/contact" class="is-download">
          <span>
            <img src="<?= get_template_directory_uri(); ?>/assets/images/common/cta_logo02.svg" alt="ダウンロードロゴ">
          </span>
          資料ダウンロード一覧
        </a>
      </div> -->
    </div>
  </section>
  <section class="p-top__strengths">
    <div class="p-top__strengths__title">
      <div class="o-title is-main">
        <h2>
          <p><span>Strengths</span></p>
          <p>再現性のあるロジックをもとにした施策フロー</p>
        </h2>
        <div class="text">
          <p><span>正しい知識と</span><span>戦略から生まれる、</span><span>再現可能なマーケティング手法</span></p>
          <p>LINEの運用・構築、SEOライティング、PPC広告運用、ホームページ制作 - これらの各領域で培った経験と専門知識を用いて、悩んでいる課題に対して最適な戦略を策定します。<br>再現性のあるマーケティングノウハウを可能にするために、ソラボでは最新のトレンドと市場の動向を組み合わせ、常に効果的な手法を提供します。</p>
        </div>
      </div>
    </div>
    <div class="p-top__strengths__content">
      <div class="p-top__strengths__content-image">
        <picture>
          <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/top/strengths.webp">
          <img src="<?=get_template_directory_uri(); ?>/assets/images/top/strengths.png" alt="会議イラスト">
        </picture>
      </div>
      <div class="p-top__strengths__content-text">
        <dl>
          <dt>課題ヒアリング</dt>
          <dd>お客様の現在の課題をヒアリングし、目標や理想の成果について詳しくお伺いします。</dd>
        </dl>
        <dl>
          <dt>調査分析 / 戦略設計</dt>
          <dd>課題ヒアリングをもとに、市場、競合状況、SEO/MEO順位を深く分析し、それらの情報を基に最適なマーケティング戦略を設計します。</dd>
        </dl>
        <dl>
          <dt>コンテンツ制作 / アカウント構築</dt>
          <dd>設計された戦略をもとに、高品質かつGoogleのポリシーに沿った戦略性のあるコンテンツを制作します。またLINEアカウントの構築やPPC広告の設定など、必要なアカウントを構築・サポートします。</dd>
        </dl>
        <dl>
          <dt>システム開発 / テスト環境構築</dt>
          <dd>専門的なシステム開発を行い。本番環境と同じテスト環境構築で安定的な運用体制を整えています。</dd>
        </dl>
        <dl>
          <dt>公開 / 運用 / 分析</dt>
          <dd>実行した戦略のパフォーマンスをGA4中心とした分析ツールで集約し、必要な情報を収集し解析を行います。</dd>
        </dl>
        <dl>
          <dt>改善 / 伴走サポート</dt>
          <dd>収集したデータを元に、必要な改善を行い、結果を最適化します。更に、SoLaboでは一貫した伴走サポートを提供し、あなたのビジネスが一貫して成長し続けることを確実にします。</dd>
        </dl>
      </div>
    </div>
  </section>
  <section class="p-top__service">
    <div class="p-top__service__title">
      <div class="o-title is-main">
        <h2>
          <p><span>Service</span></p>
          <p>各領域のプロフェッショナルが所属しています</p>
        </h2>
        <div class="text">
          <p><span>ソラボが得意とする</span><span>マーケティング領域</span></p>
          <p>中小企業から大企業まで、あらゆる分野の業種に関わり成果を一緒に出してきました。<br>綿密なサイト調査・戦略設計を行い、高いクオリティの戦術・再現性のあるアウトプットにより高い評価を頂いています。</p>
        </div>
      </div>
    </div>
    <section class="p-top__service__content">
      <div class="p-top__service__content-inner">
        <div class="p-top__service__content-image">
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/top/service01.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/top/service01.png" alt="会話する男女">
          </picture>
        </div>
        <div class="p-top__service__content-text">
          <h3>LINE運用・配信代行</h3>
          <p>ビジネス向けのLINEアカウント構築と運用を得意としています。<br>より直接的で効果的なコミュニケーションを顧客と構築し、エンゲージメントと顧客満足度を向上させます。<br>またLINE広告にも精通し、幅広いLINEのマーケティング施策を得意としています。</p>
          <!-- <a href="<?=home_url(); ?>/line">詳しくみる</a> -->
        </div>
      </div>
      <ul class="p-top__service__content-btn">
        <li>
          <a href="<?=home_url(); ?>/line">
            LINE運用・配信代行の<br>詳しい詳細はこちら
            <span>
              <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.097.415a.394.394 0 00-.243.364v3.152H1.126a.394.394 0 100 .788h4.728V7.87a.394.394 0 00.673.278l3.545-3.545a.394.394 0 000-.558L6.527.5a.394.394 0 00-.43-.085z" fill="#fff"/></svg>
            </span>
          </a>
        </li>
        <!-- <li>
          <a href="">
            LINE運用・配信代行に<br>関係する資料はこちら
            <span>
              <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.097.415a.394.394 0 00-.243.364v3.152H1.126a.394.394 0 100 .788h4.728V7.87a.394.394 0 00.673.278l3.545-3.545a.394.394 0 000-.558L6.527.5a.394.394 0 00-.43-.085z" fill="#fff"/></svg>
            </span>
          </a>
        </li> -->
        <li>
          <a href="<?=home_url(); ?>/line#price">
            詳しい料金はこちら
            <span>
              <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.097.415a.394.394 0 00-.243.364v3.152H1.126a.394.394 0 100 .788h4.728V7.87a.394.394 0 00.673.278l3.545-3.545a.394.394 0 000-.558L6.527.5a.394.394 0 00-.43-.085z" fill="#fff"/></svg>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <section class="p-top__service__content">
      <div class="p-top__service__content-inner">
        <div class="p-top__service__content-image">
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/top/service02.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/top/service02.png" alt="パソコン操作する男性">
          </picture>
        </div>
        <div class="p-top__service__content-text">
          <h3>広告運用</h3>
          <p>ビジネス目標と予算に合わせた効果的なオンライン広告戦略を展開します。<br>ターゲットオーディエンスの特定からキャンペーンの設計、運用・チューニング、そしてパフォーマンスの分析まで、一気通貫した広告運用プロセスを展開します。</p>
          <!-- <a href="<?=home_url(); ?>/advertise">詳しくみる</a> -->
        </div>
      </div>
      <ul class="p-top__service__content-btn">
        <li>
          <a href="<?=home_url(); ?>/advertise">
            広告運用の<br>詳しい詳細はこちら
            <span>
              <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.097.415a.394.394 0 00-.243.364v3.152H1.126a.394.394 0 100 .788h4.728V7.87a.394.394 0 00.673.278l3.545-3.545a.394.394 0 000-.558L6.527.5a.394.394 0 00-.43-.085z" fill="#fff"/></svg>
            </span>
          </a>
        </li>
        <!-- <li>
          <a href="">
            広告運用運用・配信代行に<br>関係する資料はこちら
            <span>
              <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.097.415a.394.394 0 00-.243.364v3.152H1.126a.394.394 0 100 .788h4.728V7.87a.394.394 0 00.673.278l3.545-3.545a.394.394 0 000-.558L6.527.5a.394.394 0 00-.43-.085z" fill="#fff"/></svg>
            </span>
          </a>
        </li> -->
        <li>
          <a href="<?=home_url(); ?>/advertise#price">
            詳しい料金はこちら
            <span>
              <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.097.415a.394.394 0 00-.243.364v3.152H1.126a.394.394 0 100 .788h4.728V7.87a.394.394 0 00.673.278l3.545-3.545a.394.394 0 000-.558L6.527.5a.394.394 0 00-.43-.085z" fill="#fff"/></svg>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <section class="p-top__service__content">
      <div class="p-top__service__content-inner">
        <div class="p-top__service__content-image">
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/top/service03.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/top/service03.png" alt="サイトデザイン中">
          </picture>
        </div>
        <div class="p-top__service__content-text">
          <h3>ホームページ制作</h3>
          <p>ソラボはお客様のビジネスの目的や特徴を理解し、一貫した戦略でデザインやコンテンツを提案します。<br>お客様の強みや差別化点を明確に打ち出し、訪問者の興味や信頼を引き出します。さらにお問い合わせ最大化を目的としたサイトでは、多数の成功実績があります。</p>
          <!-- <a href="<?=home_url(); ?>/creative">詳しくみる</a> -->
        </div>
      </div>
      <ul class="p-top__service__content-btn">
        <li>
          <a href="<?=home_url(); ?>/creative">
            ホームページ制作の<br>詳しい詳細はこちら
            <span>
              <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.097.415a.394.394 0 00-.243.364v3.152H1.126a.394.394 0 100 .788h4.728V7.87a.394.394 0 00.673.278l3.545-3.545a.394.394 0 000-.558L6.527.5a.394.394 0 00-.43-.085z" fill="#fff"/></svg>
            </span>
          </a>
        </li>
        <!-- <li>
          <a href="">
            ホームページ制作に<br>関係する資料はこちら
            <span>
              <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.097.415a.394.394 0 00-.243.364v3.152H1.126a.394.394 0 100 .788h4.728V7.87a.394.394 0 00.673.278l3.545-3.545a.394.394 0 000-.558L6.527.5a.394.394 0 00-.43-.085z" fill="#fff"/></svg>
            </span>
          </a>
        </li> -->
        <li>
          <a href="<?=home_url(); ?>/creative#price">
            詳しい料金はこちら
            <span>
              <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.097.415a.394.394 0 00-.243.364v3.152H1.126a.394.394 0 100 .788h4.728V7.87a.394.394 0 00.673.278l3.545-3.545a.394.394 0 000-.558L6.527.5a.394.394 0 00-.43-.085z" fill="#fff"/></svg>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <section class="p-top__service__content">
      <div class="p-top__service__content-inner">
        <div class="p-top__service__content-image">
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/top/service04.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/top/service04.png" alt="パソコン操作する女性">
          </picture>
        </div>
        <div class="p-top__service__content-text">
          <h3>メディア運用</h3>
          <p>月間約2000件の運用実績を誇るメディア運用の知見を最大限に活かし、さまざまな業種のコンテンツ制作を行っております。SEOの原則に基づいて作成され、戦略的な改善と最適化を行い、メディア運用の効果を最大限に引き出します。<br>また定期的なコンテンツの更新とメディア運用により、オウンドメディアが継続的に価値を提供し、エンゲージメントを高めます。</p>
          <!-- <a href="<?=home_url(); ?>/media">詳しくみる</a> -->
        </div>
      </div>
      <ul class="p-top__service__content-btn">
        <li>
          <a href="<?=home_url(); ?>/media">
            メディア運用の<br>詳しい詳細はこちら
            <span>
              <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.097.415a.394.394 0 00-.243.364v3.152H1.126a.394.394 0 100 .788h4.728V7.87a.394.394 0 00.673.278l3.545-3.545a.394.394 0 000-.558L6.527.5a.394.394 0 00-.43-.085z" fill="#fff"/></svg>
            </span>
          </a>
        </li>
        <li>
          <a href="<?=home_url(); ?>/media#operation">
            ソラボが運営する<br>メディアはこちら
            <span>
              <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.097.415a.394.394 0 00-.243.364v3.152H1.126a.394.394 0 100 .788h4.728V7.87a.394.394 0 00.673.278l3.545-3.545a.394.394 0 000-.558L6.527.5a.394.394 0 00-.43-.085z" fill="#fff"/></svg>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <section class="p-top__service__content is-last">
      <div class="p-top__service__content-inner">
        <div class="p-top__service__content-image">
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/top/service05.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/top/service05.png" alt="会議中">
          </picture>
        </div>
        <div class="p-top__service__content-text">
          <h3>SEO・伴走<br class="display_to_mq">コンサルティング</h3>
          <p>SEO・伴走コンサルティングは、SEOを主軸としたデジタルマーケティングでの総合的なサポートを行っています。<br>お客様のビジネスモデルや市場環境を深く理解し、具体的な目標設定から戦略立案、実行計画の策定に至るまで、総合的なコンサルティングサービスを提供します。</p>
          <!-- <a href="<?=home_url(); ?>/consulting">詳しくみる</a> -->
        </div>
      </div>
      <ul class="p-top__service__content-btn">
        <li>
          <a href="<?=home_url(); ?>/consulting">
            SEO・伴走コンサルティングの<br>詳しい詳細はこちら
            <span>
              <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.097.415a.394.394 0 00-.243.364v3.152H1.126a.394.394 0 100 .788h4.728V7.87a.394.394 0 00.673.278l3.545-3.545a.394.394 0 000-.558L6.527.5a.394.394 0 00-.43-.085z" fill="#fff"/></svg>
            </span>
          </a>
        </li>
        <!-- <li>
          <a href="">
            伴走コンサルティングに<br>関係する資料はこちら
            <span>
              <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.097.415a.394.394 0 00-.243.364v3.152H1.126a.394.394 0 100 .788h4.728V7.87a.394.394 0 00.673.278l3.545-3.545a.394.394 0 000-.558L6.527.5a.394.394 0 00-.43-.085z" fill="#fff"/></svg>
            </span>
          </a>
        </li> -->
        <li>
          <a href="<?=home_url(); ?>/consulting#price">
            詳しい料金はこちら
            <span>
              <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.097.415a.394.394 0 00-.243.364v3.152H1.126a.394.394 0 100 .788h4.728V7.87a.394.394 0 00.673.278l3.545-3.545a.394.394 0 000-.558L6.527.5a.394.394 0 00-.43-.085z" fill="#fff"/></svg>
            </span>
          </a>
        </li>
      </ul>
    </section>
  </section>
  <?php
  $custom_post_types = array('line', 'advertise', 'creative', 'media', 'consulting');
  $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
  $args = array(
    'post_type' => $custom_post_types,
    'tax_query' => array(
      'relation' => 'OR',
      array(
          'taxonomy' => 'line_cat',
          'field' => 'slug',
          'terms' => 'works',
      ),
      array(
          'taxonomy' => 'advertise_cat',
          'field' => 'slug',
          'terms' => 'works',
      ),
      array(
          'taxonomy' => 'creative_cat',
          'field' => 'slug',
          'terms' => 'works',
      ),
      array(
          'taxonomy' => 'media_cat',
          'field' => 'slug',
          'terms' => 'works',
      ),
      array(
          'taxonomy' => 'consulting_cat',
          'field' => 'slug',
          'terms' => 'works',
      ),
    ),
    'posts_per_page' => 3,
    'paged' => $paged,
    'orderby' => 'date',
    'order' => 'DESC',
  );
  $my_query = new WP_Query($args);

  if ($my_query->have_posts()) :
  ?>
  <section class="o-work">
    <div class="o-work__inner">
      <div class="o-work__title">
        <div class="o-title is-main">
          <h2>
            <p><span>Case</span></p>
            <p>1000件を超えるマーケティング施策事例の数々</p>
          </h2>
          <div class="text">
            <p>ソラボとお客様のマーケティングの<span>成功事例</span></p>
            <p>ソラボはマーケティングのプロフェッショナルとして、多くのお客様と共に成果を出してきました。</p>
          </div>
        </div>
      </div>
      <div class="o-work__image">
        <picture>
          <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/top/case_pc.webp" media="(min-width:768px)">
          <source srcset="<?=get_template_directory_uri(); ?>/assets/images/top/case_pc.png" media="(min-width:768px)">
          <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/top/case_sp.webp">
          <img src="<?=get_template_directory_uri(); ?>/assets/images/top/case_sp.png" alt="成功事例企業様">
        </picture>
      </div>
    </div>
    <div class="o-work__content">
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <article class="o-work__content__detail">
        <div class="o-work__content__detail-image is-image">
          <?php if(has_post_thumbnail()): ?>
          <div class="hover">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail();?>
            </a>
          </div>
          <?php else: ?>
          <div class="hover is-no_image">
            <a href="<?php the_permalink(); ?>">
              <picture>
                <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/common/no-image.webp">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/common/no-image.png" alt="no-image" class="no-image"/>
              </picture>
            </a>
          </div>
          <?php endif; ?>
        </div>
        <?php if(get_field('client')): ?>
        <div class="o-work__content__detail-text">
          <?php the_field('client'); ?>
        </div>
        <?php endif; ?>
        <h3 class="o-work__content__detail-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      </article>
    <?php endwhile; ?>
    </div>
    <!-- <a href="<?=home_url(); ?>/line/works" class="o-work__btn">さらに成功事例を見る</a> -->
  </section>
  <?php
  endif;
  wp_reset_postdata(); // クエリをリセット
  ?>
  <?php
  $custom_post_types = array('line', 'advertise', 'creative', 'media', 'consulting');
  $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
  $args = array(
    'post_type' => $custom_post_types,
    'tax_query' => array(
      'relation' => 'OR',
      array(
          'taxonomy' => 'line_cat',
          'field' => 'slug',
          'terms' => 'magazine',
      ),
      array(
          'taxonomy' => 'advertise_cat',
          'field' => 'slug',
          'terms' => 'magazine',
      ),
      array(
          'taxonomy' => 'creative_cat',
          'field' => 'slug',
          'terms' => 'magazine',
      ),
      array(
          'taxonomy' => 'media_cat',
          'field' => 'slug',
          'terms' => 'magazine',
      ),
      array(
          'taxonomy' => 'consulting_cat',
          'field' => 'slug',
          'terms' => 'magazine',
      ),
    ),
    'posts_per_page' => 6,
    'paged' => $paged,
    'orderby' => 'date',
    'order' => 'DESC',
  );
  $my_query = new WP_Query($args);

  if ($my_query->have_posts()) :
  ?>
  <section class="o-magazine">
    <div class="o-work__title">
      <div class="o-title is-main">
        <h2>
          <p><span>Magazine</span></p>
          <p>即実践可能な施策事例</p>
        </h2>
        <div class="text">
          <p><span>今から役に立つ、</span><span>マーケティングノウハウ</span></p>
          <p>ソラボが積み重ねてきたマーケティングの専門知識を提供しています。<br>「LINE運用・構築」「SEO・ライティング」「PPC広告運用」「ホームページ制作」など、我々が得意とするマーケティング領域全てを網羅しており、具体的な手順と戦略が詳細にまとめられてるので、すぐにビジネスに活用することができます。</p>
        </div>
      </div>
    </div>
    <div class="o-magazine__content">
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <article class="o-magazine__content__detail">
        <div class="o-magazine__content__detail-image is-image">
          <?php if(has_post_thumbnail()): ?>
          <div class="hover">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail();?>
            </a>
          </div>
          <?php else: ?>
          <div class="hover is-no_image">
            <a href="<?php the_permalink(); ?>">
              <picture>
                <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/common/no-image.webp">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/common/no-image.png" alt="no-image" class="no-image"/>
              </picture>
            </a>
          </div>
          <?php endif; ?>
        </div>
        <div class="o-magazine__content__detail-text">
          <time><?php echo get_the_date('Y.m.j'); ?></time>
        </div>
        <h3 class="o-magazine__content__detail-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="o-magazine__content__detail-custom">
          <span><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></span>
        </div>
      </article>
    <?php endwhile; ?>
    </div>
    <!-- <a href="<?=home_url(); ?>/line/works" class="o-magazine__btn">さらにブログを見る</a> -->
  </section>
  <?php
  endif;
  wp_reset_postdata(); // クエリをリセット
  ?>
  <section class="p-top__flow">
    <div class="p-top__flow__title">
      <div class="o-title is-main">
        <h2>
          <p><span>Flow</span></p>
          <p>ご契約まではシンプル</p>
        </h2>
        <div class="text">
          <p>ご契約までの流れ</p>
          <p>お客様と密接にコミュニケーションを取り、現状の課題と目標に対応したサービスを提供します。</p>
        </div>
      </div>
    </div>
    <ol class="p-top__flow__list">
      <li>
        <p><span>STEP</span><span>01</span></p>
        <p>マーケティング施策について<br>無料相談・お見積りはこちら</p>
        <p>お問い合わせをいただいた後、お客様の現在の問題・課題などをヒアリングさせていただき、課題解決へのアプローチを作成していきます。</p>
        <a href="<?=home_url(); ?>/contact">マーケティング施策について<br>無料相談・お見積りはこちら</a>
      </li>
      <li>
        <p><span>STEP</span><span>02</span></p>
        <p>ご提案作成</p>
        <p>初回面談でヒアリングさせて頂いた情報をもとに、競合企業の分析、キーワード調査、SEO/MEO状況の調査を行い、課題解決のご提案をさせて頂きます。</p>
      </li>
      <li>
        <p><span>STEP</span><span>03</span></p>
        <p>お打ち合わせ</p>
        <p>作成した資料をもとに、具体的な内容をお打ち合わせにてご提案をいたします。ご提案内容に対してフィードバックや状況変化などあれば、必要に応じて提案内容の変更やサービス変更も可能です。</p>
      </li>
      <li>
        <p><span>STEP</span><span>04</span></p>
        <p>契約締結・プロジェクト進行</p>
        <p>ご提案内容で合意いただけた場合は契約の締結を行います。その後正式にプロジェクトが発足し、ご提案内容をもとにプロジェクトを進行していきます。その際にはガントチャート等をご用意して柔軟かつ遅延のないスケジューリングで進めていきます。</p>
      </li>
    </ol>
  </section>

</main>

<?php echo do_shortcode('[myphp file="cta"]'); ?>


<?php get_footer(); ?>