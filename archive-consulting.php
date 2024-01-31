<?php
    //Template Name: トップページ
    get_header();
?>

<main class="p-custom is-main">
  <section class="o-mv is-main">
    <p class="bg_text js-bg_text">consultingC</p>
    <div class="inner">
      <div class="image">
        <div class="image__detail">
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/consulting/mv_pc.webp" media="(min-width:768px)">
            <source srcset="<?=get_template_directory_uri(); ?>/assets/images/consulting/mv_pc.png" media="(min-width:768px)">
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/consulting/mv_sp.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/consulting/mv_sp.png" alt="イラスト">
          </picture>
        </div>
      </div>
      <div class="text">
        <h1>SEO・<br class="display_mq is-block">伴走<br class="display_to_mq">コンサルティング</h1>
        <p>SEO対策からMEO戦略の展開、ウェブサイトの管理とメンテナンス、そしてコンバージョン率の最適化まで、お客様の事業成長を向けた全方位的なサービスを提供します。</p>
      </div>
    </div>
    <div class="o-small_cta">
      <div class="o-small_cta__detail is-contact">
        <p><span>SEO・伴走コンサルティングについて</span><br><span>無料相談・お見積りを申し込み</span></p>
        <p><span>専門的な知識と実践的なアドバイスを提供し、</span><span>お客様のデジタルマーケティング戦略の構築と</span><span>実行をサポートします。</span></p>
        <a href="<?=home_url(); ?>/contact/?radio=5" class="is-contact">
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
  <section class="p-custom__worries">
    <h2 class="p-custom__worries__title">
      <span>こんなお悩み<br>ありませんか？</span>
    </h2>
    <div class="p-custom__worries__content">
      <div class="p-custom__worries__content-detail">
        <p>集客して売上げを伸ばしたい</p>
        <p>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/common/worries_yajirushi.svg" alt="矢印">
        </p>
        <p><span>SEO中心のマーケティング戦略を展開し、</span><span>ドメインレベルの把握、競合の分析、</span><span>各記事の順位動向を把握した上で、</span><span>記事をキーワード別に最適化することで、</span><span>SEOパフォーマンスを高め、</span><span><span class="is-blue">コンバージョン率を向上させる</span></span><span>アプローチを実施します。</span></p>
      </div>
      <div class="p-custom__worries__content-detail">
        <p>WEBのやり方が分からない</p>
        <p>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/common/worries_yajirushi.svg" alt="矢印">
        </p>
        <p><span>ソラボのSEO戦略の理解から始め、</span><span>運用トレーニング、ツールの導入支援、</span><span>SEOを利用したトラフィック増加を目指し、</span><span><span class="is-blue">マーケティング計画の策定から実行までを</span></span><span><span class="is-blue">サポート</span>いたします。</span></p>
      </div>
      <div class="p-custom__worries__content-detail">
        <p>パートナー会社を変えたい</p>
        <p>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/common/worries_yajirushi.svg" alt="矢印">
        </p>
        <p><span>現在の課題や施策に関して</span><span>丁寧なヒアリングを行い、</span><span>ビジネスの中断なくスムーズに移行し、</span><span><span class="is-blue">コスト効率の良い長期的な関係を構築</span></span><span>します。</span></p>
      </div>
    </div>
  </section>
  <section class="p-custom__strengths">
    <h2 class="p-custom__strengths__title"><span>ソラボの</span><br class="display_to_mq"><span>伴走</span><span>の強み</span></h2>
    <p class="p-custom__strengths__text">
      <span>ソラボのコンサルティングは、</span><span>SEOを軸とした売上向上戦略の提供・</span><span>運用の包括的トレーニングとサポート、</span><br>
      <span>そしてコスト効率と事業成長を</span><span>加速させることに強みを持っています。</span>
    </p>
    <ul class="p-custom__strengths__list">
      <li>
        <p>
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/consulting/strengths01.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/consulting/strengths01.png" alt="ロゴ">
          </picture>
        </p>
        <p>効果的なコンテンツ戦略</p>
        <p>SEOに強い記事作成から、適切なキーワードの提案、リライト提案、詳細な構成案出しに至るまで、コンテンツの品質と検索エンジンでのパフォーマンス向上に注力します。</p>
      </li>
      <li>
        <p>
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/consulting/strengths02.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/consulting/strengths02.png" alt="ロゴ">
          </picture>
        </p>
        <p>最適化されたMEO対策</p>
        <p>MEO設定の導入と運用サポートにより、地域に密着した検索結果を向上させ、マーケティングに直結させます。</p>
      </li>
      <li>
        <p>
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/consulting/strengths03.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/consulting/strengths03.png" alt="ロゴ">
          </picture>
        </p>
        <p>継続的なサイトサポート</p>
        <p>定期的なアナリティクスによる解析、レポート提出を通じて、ウェブサイトの健全性を維持し、データを軸とした意思決定を支援します。</p>
      </li>
      <li>
        <p>
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/consulting/strengths04.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/consulting/strengths04.png" alt="ロゴ">
          </picture>
        </p>
        <p>コンバージョン最適化</p>
        <p>CVR改善施策の実施、効果的なコンバージョン導線の設計・最適化により、訪問者から顧客への転換を促進します。</p>
      </li>
    </ul>
  </section>
  <section class="p-custom__service">
    <div class="o-title is-main is-center">
      <h2>
        <p><span>Service</span></p>
        <p>サービス</p>
      </h2>
    </div>
    <div class="p-custom__service__content">
      <section class="p-custom__service__detail">
        <div class="p-custom__service__detail-flex">
          <div class="p-custom__service__detail-text">
            <h3 class="p-custom__service__detail-title">
              <p>01</p>
              <p>スタンダードプラン</p>
            </h3>
            <p class="p-custom__service__detail-discription">ソラボのSEO・伴走コンサルティングは、SEO最適化、MEO戦略、効率的なサイト管理、及びコンバージョン率の最適化をサポートし、各企業様のニーズに応じた売上向上と事業成長を実現するための包括的かつ戦略的なコンサルティングサービスを展開します。</p>
          </div>
          <div class="p-custom__service__detail-image">
            <picture>
              <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/consulting/service01.webp">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/consulting/service01.png" alt="スマホとパスコン操作する人"/>
            </picture>
            <picture>
              <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/consulting/service_human01.webp">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/consulting/service_human01.png" class="is-consulting_human01">
            </picture>
          </div>
        </div>
        <div class="p-custom__service__detail-list">
          <div class="content">
            <p>SEO</p>
            <ul>
              <li>作成記事のチェック（～2本）</li>
              <li>順位取得</li>
              <li>キーワード提案</li>
              <li>リライト提案（～2本）</li>
              <li>構成案（目次だしのみ／～2本）</li>
              <li>インデックス登録申請</li>
              <li>アイキャッチ画像作成</li>
              <li>サイト品質調査</li>
              <li>サイト導線設計</li>
              <li>メタディスクリプション案の提供</li>
              <li>CVR改善（1か所）</li>
            </ul>
          </div>
          <div class="content">
            <p>MEO対応</p>
            <ul>
              <li>グーグルビジネス設定</li>
              <li>MEO運用サポート</li>
            </ul>
          </div>
          <div class="content">
            <p>ウェブサイト管理</p>
            <ul>
              <li>サイト保守（2h）</li>
              <li>グーグルアナリティクス設計</li>
              <li>レポートの提出</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="p-custom__service__detail">
        <div class="p-custom__service__detail-flex">
          <div class="p-custom__service__detail-text">
            <h3 class="p-custom__service__detail-title">
              <p>02</p>
              <p>プレミアムプラン</p>
            </h3>
            <p class="p-custom__service__detail-discription">構成案の作成と、高品質な完成記事の作成サービス（各2本）が加わり、より総合的なコンテンツソリューションを提供します。<br>さらに高度なレポーティングを含めたコンテンツ戦略と、SEOに最適化された完成度の高い記事の制作とCVR改善により、パフォーマンスとユーザーエンゲージを大幅に向上させることが可能です。</p>
          </div>
          <div class="p-custom__service__detail-image">
            <picture>
              <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/consulting/service02.webp">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/consulting/service02.png" alt="スマホとパスコン操作する人"/>
            </picture>
            <picture>
              <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/consulting/service_human02.webp">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/consulting/service_human02.png" class="is-consulting_human02">
            </picture>
          </div>
        </div>
        <div class="p-custom__service__detail-list">
          <div class="content">
            <p>SEO・ウェブサイト管理</p>
            <ul>
              <li>スタンダードプラン内容</li>
              <li>構成案（詳細記載／2本）</li>
              <li>記事作成（2本）</li>
              <li>CVR改善</li>
            </ul>
          </div>
        </div>
      </section>
    </div>
  </section>
  <section class="p-custom__price" id="price">
    <div class="o-title is-main is-center">
      <h2>
        <p><span>Price</span></p>
        <p>料金プラン</p>
      </h2>
    </div>
    <section class="p-custom__price__detail">
      <h3>スタンダードプラン</h3>
      <div class="p-custom__price__detail-content is-column01">
        <p class="title_row01">通常</p>
        <p class="money_row01"><span>10</span>万円~(税別)</p>
        <p class="text">コンテンツ作成のEO対策までを包括的にサポートします。<br>初稿のチェック、キーワード選定、SEO向けのリライト、コンバージョン率改善策の提案、さらにアイキャッチ画像制作、インデックス登録、Google Analyticsの設定、さらにMEO設定と運用サポートも提供し、ウェブサイトの保守やレポート作成までSEO対策を軸としたコンサルティングを実施します。</p>
      </div>
    </section>
    <section class="p-custom__price__detail is-mb0
    ">
      <h3>プレミアムプラン</h3>
      <div class="p-custom__price__detail-content is-column01">
        <p class="title_row01">通常</p>
        <p class="money_row01"><span>30</span>万円~(税別)</p>
        <p class="text">スタンダードプランの内容を含みつつ、詳細にわたる構成案の作成と高品質な完成記事の作成サービス（各2本）が加わり、より総合的なコンテンツ制作を含めたSEO対策を提供します。<br>ソラボが培ってきたメディア戦略による完成度の高い記事により、ウェブサイトのパフォーマンスとユーザーエンゲージメントを大幅に向上させることが可能になります。</p>
      </div>
    </section>
  </section>
  <?php echo do_shortcode('[myphp file="cta_consulting_small"]'); ?>
  <section class="p-custom__flow">
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
    <ol class="p-custom__flow__list">
      <li>
        <p>
          <span>STEP</span><span>01</span>
        </p>
        <p>お問い合わせ</p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>02</span>
        </p>
        <p>ヒアリング</p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>03</span>
        </p>
        <p>サイト調査<br><span>順位動向・網羅性シート作成<br>キーワード抽出・低品質調査</span></p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>04</span>
        </p>
        <p>契約後にサービス開始</p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>05</span>
        </p>
        <p>運用サポート</p>
      </li>
    </ol>
  </section>
  <?php
  $custom_post_types = array('consulting');
  $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
  $args = array(
    'post_type' => $custom_post_types,
    'tax_query' => array(
      'relation' => 'OR',
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
        <div class="o-title is-main is-mb40">
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
    <a href="<?=home_url(); ?>/consulting/works" class="o-work__btn">さらに成功事例を見る</a>
  </section>
  <?php
  endif;
  wp_reset_postdata(); // クエリをリセット
  ?>
  <?php
  $custom_post_types = array('consulting');
  $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
  $args = array(
    'post_type' => $custom_post_types,
    'tax_query' => array(
      'relation' => 'OR',
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
          <p><span>SEO・伴走コンサルティングの</span><span>マーケティングノウハウを公開</span></p>
          <p>ソラボが積み重ねてきたSEO・伴走コンサルティングのマーケティング専門知識を提供しています。<br>具体的な手順と戦略が詳細にまとめられてるので、すぐにビジネスに活用することができます。</p>
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
      </article>
    <?php endwhile; ?>
    </div>
    <a href="<?=home_url(); ?>/consulting/magazine" class="o-magazine__btn">さらにブログを見る</a>
  </section>
  <?php
  endif;
  wp_reset_postdata(); // クエリをリセット
  ?>

</main>

<?php echo do_shortcode('[myphp file="cta_consulting"]'); ?>


<?php get_footer(); ?>