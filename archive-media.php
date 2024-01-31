<?php
    //Template Name: トップページ
    get_header();
?>

<main class="p-custom is-main">
  <section class="o-mv is-main">
    <p class="bg_text js-bg_text">MEDIA</p>
    <div class="inner">
      <div class="image">
        <div class="image__detail">
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/media/mv_pc.webp" media="(min-width:768px)">
            <source srcset="<?=get_template_directory_uri(); ?>/assets/images/media/mv_pc.png" media="(min-width:768px)">
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/media/mv_sp.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/media/mv_sp.png" alt="イラスト">
          </picture>
        </div>
      </div>
      <div class="text">
        <h1>メディア運用</h1>
        <p><span>WEB集客のノウハウを提供する自社メディア「マーケティングガイド」</span><span>の運用と、お客様のメディア運用サポートを行います。</span></p>
      </div>
    </div>
    <div class="o-small_cta">
      <div class="o-small_cta__detail is-contact">
        <p><span>メディア運用について</span><br><span>無料相談・お見積りを申し込み</span></p>
        <p><span>メディア専門チームにより、</span><span>SEOに強い記事作成と</span><span>専門的な編集プロセスで</span><br><span>WEB集客をサポートします。</span></p>
        <a href="<?=home_url(); ?>/contact/?radio=2" class="is-contact">
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
        <p>集客数を増やしたい</p>
        <p>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/common/worries_yajirushi.svg" alt="矢印">
        </p>
        <p><span>LINE公式アカウントをはじめとする</span><span><span class="is-blue">WEB集客のノウハウ</span>を</span><span>提供しています。</span></p>
      </div>
      <div class="p-custom__worries__content-detail">
        <p>自社サイトを運営したいのに、<br>人手が足りない／やり方が分からない</p>
        <p>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/common/worries_yajirushi.svg" alt="矢印">
        </p>
        <p><span>メディアの方向性に合わせた</span><span><span class="is-blue">KWの選定と記事作成</span>を代行します。</span><span>ご希望に応じて、サイト制作や</span><span>施策の提案からお任せ頂く事も可能です。</span></p>
      </div>
      <div class="p-custom__worries__content-detail">
        <p>他社へ記事作成代行を<br>依頼しているが成果が出ない</p>
        <p>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/common/worries_yajirushi.svg" alt="矢印">
        </p>
        <p><span>SEO視点での記事作成、</span><span>公開後のアクセス解析も実施。</span><span>閲覧数やユーザー数は</span><span>定期的にレポートで報告し、</span><span><span class="is-blue">CV改善をサポート</span>します。</span></p>
      </div>
    </div>
  </section>
  <section class="p-custom__strengths">
    <h2 class="p-custom__strengths__title"><span>ソラボの</span><br class="display_to_mq"><span>メディア運用</span><span>の強み</span></h2>
    <p class="p-custom__strengths__text">
      <span>各分野の専門スタッフが在籍し、</span><span>WEB集客の悩みを</span><span>まとめてサポートします。</span>
    </p>
    <ul class="p-custom__strengths__list">
      <li>
        <p>
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/media/strengths01.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/media/strengths01.png" alt="ロゴ">
          </picture>
        </p>
        <p>キーワード選定および<br>記事作成</p>
        <p>データ収集を行い、検索ニーズの高いキーワードのご提案と記事作成を行います。</p>
      </li>
      <li>
        <p>
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/media/strengths02.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/media/strengths02.png" alt="ロゴ">
          </picture>
        </p>
        <p>SEO観点で編集者が<br>記事を監修</p>
        <p>検索エンジンでの上位表示を目指し、ノウハウをもつ編集者が記事をチェックします。</p>
      </li>
      <li>
        <p>
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/media/strengths03.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/media/strengths03.png" alt="ロゴ">
          </picture>
        </p>
        <p>定期的に記事やサイト内の<br>状況をチェック</p>
        <p>記事内容の見直しのほか、さらなるCV施策と流入施策を図ります。</p>
      </li>
      <li>
        <p>
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/media/strengths04.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/media/strengths04.png" alt="ロゴ">
          </picture>
        </p>
        <p>WEB集客をトータルで<br>サポート</p>
        <p>幅広いマーケティング施策のサポートが可能です。</p>
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
              <p>記事作成</p>
            </h3>
            <p class="p-custom__service__detail-discription">読者のニーズとSEOの観点を取り入れた記事作成を行い、検索エンジンでの上位表示を目指します。<br>ライターが作成した記事は、編集者によるチェック後にお客様へ納品します。</p>
          </div>
          <div class="p-custom__service__detail-image">
            <picture>
              <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/media/service01.webp">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/media/service01.png" alt="スマホとパスコン操作する人"/>
            </picture>
            <picture>
              <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/media/service_human01.webp">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/media/service_human01.png" class="is-media_human01">
            </picture>
          </div>
        </div>
        <div class="p-custom__service__detail-list">
          <ul>
            <li>検索ニーズの調査</li>
            <li>SEO視点での記事作成</li>
            <li>編集者による記事チェック</li>
          </ul>
        </div>
      </section>
      <section class="p-custom__service__detail">
        <div class="p-custom__service__detail-flex">
          <div class="p-custom__service__detail-text">
            <h3 class="p-custom__service__detail-title">
              <p>02</p>
              <p>成果報告＆施策設計</p>
            </h3>
            <p class="p-custom__service__detail-discription">記事の納品後は、各種ツールを用いてアクセス数と順位の動向をレポートにまとめ、月に1回程度の成果報告を実施します。<br>また、SEOで成果が出てサイトへの流入が増えてきたタイミングで、CV改善の施策設計も並行して行います。</p>
          </div>
          <div class="p-custom__service__detail-image">
            <picture>
              <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/media/service02.webp">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/media/service02.png" alt="スマホとパスコン操作する人"/>
            </picture>
            <picture>
              <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/media/service_human02.webp">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/media/service_human02.png" class="is-media_human02">
            </picture>
          </div>
        </div>
        <div class="p-custom__service__detail-list">
          <ul>
            <li>効果測定（アクセス解析、順位計測）</li>
            <li>報告レポートの提出</li>
            <li>MTG（月1回程度）</li>
            <li>CV改善</li>
          </ul>
        </div>
      </section>
    </div>
  </section>
  <section class="p-custom__media" id="operation">
    <div class="o-title is-main is-center">
      <h2>
        <p><span>Media</span></p>
        <p>SoLaboが運営するメディア</p>
      </h2>
    </div>
    <ul class="p-custom__media__content">
      <li>
        <p><a href="https://jfc-guide.com/" target="_blank" rel="noopener noreferrer">創業融資ガイド</a></p>
        <p>
          <a href="https://jfc-guide.com/" target="_blank" rel="noopener noreferrer">
            <picture>
              <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/media/media01.webp">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/media/media01.png" alt="創業融資ガイド">
            </picture>
          </a>
        </p>
        <p>資金調達支援で蓄積してきた知見をもとに、融資を中心とした情報を発信しています。</p>
      </li>
      <li>
        <p><a href="https://start-note.com/" target="_blank" rel="noopener noreferrer">資金調達ノート</a></p>
        <p>
          <a href="https://start-note.com/" target="_blank" rel="noopener noreferrer">
            <picture>
              <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/media/media02.webp">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/media/media02.png" alt="資金調達ノート">
            </picture>
          </a>
        </p>
        <p>起業融資・起業後の資金繰りなど資金調達に悩まれている方をサポートする情報を配信しています。</p>
      </li>
      <li>
        <p><a href="https://support.so-labo.co.jp/" target="_blank" rel="noopener noreferrer">経営支援ガイド</a></p>
        <p>
          <a href="https://support.so-labo.co.jp/" target="_blank" rel="noopener noreferrer">
            <picture>
              <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/media/media03.webp">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/media/media03.png" alt="経営支援ガイド">
            </picture>
          </a>
        </p>
        <p>事業経営を加速させたい全ての方にとって役立つ知識・ノウハウをお届けする情報メディアです。</p>
      </li>
      <li>
        <p><a href="https://so-labo.co.jp/hojyokin/" target="_blank" rel="noopener noreferrer">補助金ガイド</a></p>
        <p>
          <a href="https://so-labo.co.jp/hojyokin/" target="_blank" rel="noopener noreferrer">
            <picture>
              <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/media/media04.webp">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/media/media04.png" alt="補助金ガイド">
            </picture>
          </a>
        </p>
        <p>事業者の皆様が「知りたい」と感じる補助金の申請ノウハウや基礎知識をお届けしています。</p>
      </li>
    </ul>
  </section>
  <?php echo do_shortcode('[myphp file="cta_media_small"]'); ?>
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
        <p>方向性確認、施策提案<br><span>(MTG)</span></p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>02</span>
        </p>
        <p>キーワード選定</p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>03</span>
        </p>
        <p>構成案作成</p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>04</span>
        </p>
        <p>記事作成</p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>05</span>
        </p>
        <p>記事のリリース</p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>06</span>
        </p>
        <p>順位計測</p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>07</span>
        </p>
        <p>リライトまたはCV施策</p>
      </li>
    </ol>
  </section>
  <?php
  $custom_post_types = array('media');
  $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
  $args = array(
    'post_type' => $custom_post_types,
    'tax_query' => array(
      'relation' => 'OR',
      array(
          'taxonomy' => 'media_cat',
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
    <a href="<?=home_url(); ?>/media/works" class="o-work__btn">さらに成功事例を見る</a>
  </section>
  <?php
  endif;
  wp_reset_postdata(); // クエリをリセット
  ?>
  <?php
  $custom_post_types = array('media');
  $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
  $args = array(
    'post_type' => $custom_post_types,
    'tax_query' => array(
      'relation' => 'OR',
      array(
          'taxonomy' => 'media_cat',
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
          <p><span>メディア運用の</span><span>マーケティングノウハウを公開</span></p>
          <p>ソラボが積み重ねてきたメディア運用のマーケティング専門知識を提供しています。<br>具体的な手順と戦略が詳細にまとめられてるので、すぐにビジネスに活用することができます。</p>
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
    <a href="<?=home_url(); ?>/media/magazine" class="o-magazine__btn">さらにブログを見る</a>
  </section>
  <?php
  endif;
  wp_reset_postdata(); // クエリをリセット
  ?>

</main>

<?php echo do_shortcode('[myphp file="cta_media"]'); ?>


<?php get_footer(); ?>