<?php
    //Template Name: トップページ
    get_header();
?>

<main class="p-custom is-main">
  <section class="o-mv is-main">
    <p class="bg_text js-bg_text">HOMEPAGEHOMEPAGE</p>
    <div class="inner">
      <div class="image">
        <div class="image__detail">
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/creative/mv_pc.webp" media="(min-width:768px)">
            <source srcset="<?=get_template_directory_uri(); ?>/assets/images/creative/mv_pc.png" media="(min-width:768px)">
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/creative/mv_sp.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/creative/mv_sp.png" alt="イラスト">
          </picture>
        </div>
      </div>
      <div class="text">
        <h1>ホームページ制作</h1>
        <p><span>分析から戦略立案、デザイン・実装に至るまで、</span><span>一貫した制作体制で</span>お問い合わせを最大化します。</p>
      </div>
    </div>
    <div class="o-small_cta">
      <div class="o-small_cta__detail is-contact">
        <p><span>ホームページ制作について</span><br><span>無料相談・お見積りを申し込み</span></p>
        <p><span>分析から戦略立案、デザイン・実装に至るまで、</span><span>一貫した制作体制で</span>お問い合わせを最大化します。</p>
        <a href="<?=home_url(); ?>/contact/?radio=4" class="is-contact">
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
        <p>検索に上がらない</p>
        <p>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/common/worries_yajirushi.svg" alt="矢印">
        </p>
        <p><span>適切なキーワードの選定、</span><span>コンテンツの質の向上、</span><span>および技術的な</span><span>ホームページの改善を通じて、</span><span>検索順位を高め、</span><span><span class="is-blue">新規顧客獲得の機会</span>を増やします。</span></p>
      </div>
      <div class="p-custom__worries__content-detail">
        <p>サイトが古く、使いにくい</p>
        <p>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/common/worries_yajirushi.svg" alt="矢印">
        </p>
        <p><span>訪問者がサイト内で情報を簡単に見つけ、</span><span>より長く滞在するようにするための</span><span>サポートを提供します。</span><span>またビジュアルとともに培ってきた</span><span><span class="is-blue">データを駆使したUI設計</span>で</span><span>ビジネスの機会を創出します。</span></p>
      </div>
      <div class="p-custom__worries__content-detail">
        <p>知見・リソースが足りない</p>
        <p>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/common/worries_yajirushi.svg" alt="矢印">
        </p>
        <p><span>ソラボでは</span><span>資金調達実績6,000件超の実績を持ち、</span><span>金調達の機会を最大限に活用できるよう</span><span>支援します。これにより、</span><span>予算の制約を心配することなく、</span><span><span class="is-blue">効果的なウェブサイトの開発</span>に</span><span>集中できます。</span></p>
      </div>
    </div>
  </section>
  <section class="p-custom__strengths">
    <h2 class="p-custom__strengths__title"><span>ソラボの</span><br class="display_to_mq"><span>ホームページ制作</span><span>の強み</span></h2>
    <p class="p-custom__strengths__text">
      <span>ホームページのリニューアルや新規作成を支援し、</span><span>現状の課題に対してパフォーマンスを最適化します。</span><br>
      <span>さらに、ディレクション、デザイン、フロントエンド、</span><span>バックエンドの全方位的なサービスを提供することで</span><br>
      <span>一貫した制作体制でプロジェクトを進行します。</span>
    </p>
    <ul class="p-custom__strengths__list">
      <li>
        <p>
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/creative/strengths01.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/creative/strengths01.png" alt="ロゴ">
          </picture>
        </p>
        <p>全方位的サービス提供</p>
        <p>ディレクションからデザイン、フロントエンド、バックエンド開発まで、プロジェクトのすべての段階を一貫してサポートします。</p>
      </li>
      <li>
        <p>
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/creative/strengths02.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/creative/strengths02.png" alt="ロゴ">
          </picture>
        </p>
        <p>柔軟なカスタマイズ</p>
        <p>WordPressなどのCMSを活用し、耐久性のある運用性を保ちつつ、お客様のビジネスニーズに合わせた構築を実現します。</p>
      </li>
      <li>
        <p>
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/creative/strengths03.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/creative/strengths03.png" alt="ロゴ">
          </picture>
        </p>
        <p>専門的技術力</p>
        <p>課題解決に重点を置いたデザインスキル、フロントエンド技術、バックエンドに関する高度な専門知識を持ったメンバーが在籍しています。</p>
      </li>
      <li>
        <p>
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/creative/strengths04.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/creative/strengths04.png" alt="ロゴ">
          </picture>
        </p>
        <p>プロジェクト管理</p>
        <p>プロジェクトのスケジュール管理やデータ管理など、効率的なプロジェクト進行を重視し、安心した制作進行を行います。</p>
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
              <p>制作</p>
            </h3>
            <p class="p-custom__service__detail-discription">ビジネスのニーズに合わせてカスタマイズされたホームページを制作します。さらに、予算に悩むお客様には、補助金の利用や資金面でのサポートも行います。</p>
          </div>
          <div class="p-custom__service__detail-image">
            <picture>
              <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/creative/service01.webp">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/creative/service01.png" alt="スマホとパスコン操作する人"/>
            </picture>
            <picture>
              <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/creative/service_human01.webp">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/creative/service_human01.png" class="is-creative_human01">
            </picture>
          </div>
        </div>
        <div class="p-custom__service__detail-list">
          <div class="content">
            <p>WEBディレクション</p>
            <ul>
              <li>ディレクションMTG</li>
              <li>ディレクトリマップの作成</li>
              <li>データ管理・スケジュール管理</li>
              <li>ドメイン・サーバーの確認・設定</li>
              <li>CMS（Wordpress）の実装状況の確認</li>
            </ul>
          </div>
          <div class="content">
            <p>サイトデザイン</p>
            <ul>
              <li>ワイヤーフレームの作成</li>
              <li>コピー作成/イメージビジュアル化/画像加工</li>
              <li>基幹デザイン作成【ヘッダー・フッター・CTA・ナビゲーション等】</li>
              <li>下層ページデザイン</li>
            </ul>
          </div>
          <div class="content">
            <p>フロントエンド</p>
            <ul>
              <li>コーディング基本設計・実装</li>
              <li>フォームシステムの設計・実装</li>
              <li>CMS設計（Wordpress）</li>
            </ul>
          </div>
          <div class="content">
            <p>バックエンド</p>
            <ul>
              <li>SSL対応によるデータ通信の暗号化</li>
              <li>ステージング環境の設計・構築</li>
              <li>ベーシック認証などのアクセス制限の設定</li>
              <li>サイトチェック作業</li>
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
      <h3>採用サイトlight</h3>
      <div class="p-custom__price__detail-simple">
        <p><span>80</span>万円(税別)</p>
        <p>ソラボのオリジナルテンプレートを使用して、コスト効率と実用性を両立させた採用サイトを制作します。効果的な人材獲得を支援するこのプランは、特にスタートアップや中小企業に最適です。</p>
      </div>
    </section>
    <section class="p-custom__price__detail">
      <h3>ホームページ制作</h3>
      <div class="p-custom__price__detail-simple">
        <p><span>150</span>万円(税別)</p>
        <p>お客様のビジネスを深く理解し、獲得に特化した戦略性の高いホームページを制作します。ソラボのデザインと開発の専門知識により、運用性が高く課題解決・SEO対策など幅広い効果が期待できます。</p>
      </div>
    </section>
    <section class="p-custom__price__detail">
      <h3>ホームページリニューアル制作</h3>
      <div class="p-custom__price__detail-simple">
        <p><span>180</span>万円(税別)</p>
        <p>既存のホームページにおいて課題発見・調査分析から行い、SEO対策から戦略立案までホームページを全面的にリニューアルします。UI/UXの向上とブランド価値の再構築を目指し、ソラボの一貫した制作体制でホームページのポテンシャルを最大限に活かします。</p>
      </div>
    </section>
    <section class="p-custom__price__detail">
      <h3>オウンドメディアlight</h3>
      <div class="p-custom__price__detail-simple">
        <p><span>60</span>万円(税別)</p>
        <p>テンプレートベースで効率的にオウンドメディアを制作し、コンテンツマーケティングを強化します。このプランではコンテンツ配信を始めたい企業に適しており、ソラボのSEOとマーケティングの専門知識を活かして、効果的なメディア構築を行います。</p>
      </div>
    </section>
    <section class="p-custom__price__detail">
      <h3>オリジナルオウンドメディア制作</h3>
      <div class="p-custom__price__detail-simple">
        <p><span>150</span>万円(税別)</p>
        <p>ソラボの専門チームが、効果的なSEO戦略、そしてユーザーエンゲージメントを高める戦略やビジュアルデザインを用いて、メディアサイトのブランドを強化し、コンテンツ配信とSEO対策を最適化してトラフィック増加、お問い合わせ獲得を最大化します。</p>
      </div>
    </section>
    <section class="p-custom__price__detail is-mb0">
      <h3>ランディングページ制作</h3>
      <div class="p-custom__price__detail-simple">
        <p><span>60</span>万円(税別)</p>
        <p>製品やサービスに焦点を当てたランディングページを制作し、ターゲットへ訴求と高いコンバージョン率を実現します。さらにソラボのマーケティングと広告運用を活用し、効果的なプロモーションをサポートします。</p>
      </div>
    </section>

  </section>
  <?php echo do_shortcode('[myphp file="cta_creative_small"]'); ?>
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
        <p>ヒアリング・ご提案</p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>03</span>
        </p>
        <p>契約締結と<br>プロジェクト開始</p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>04</span>
        </p>
        <p>ワイヤーフレーム作成</p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>05</span>
        </p>
        <p>デザインフェーズ</p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>06</span>
        </p>
        <p>開発とテストフェーズ</p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>07</span>
        </p>
        <p>納品・フィードバック</p>
      </li>
    </ol>
  </section>
  <?php
  $custom_post_types = array('creative');
  $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
  $args = array(
    'post_type' => $custom_post_types,
    'tax_query' => array(
      'relation' => 'OR',
      array(
          'taxonomy' => 'creative_cat',
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
    <a href="<?=home_url(); ?>/creative/works" class="o-work__btn">さらに成功事例を見る</a>
  </section>
  <?php
  endif;
  wp_reset_postdata(); // クエリをリセット
  ?>
  <?php
  $custom_post_types = array('creative');
  $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
  $args = array(
    'post_type' => $custom_post_types,
    'tax_query' => array(
      'relation' => 'OR',
      array(
          'taxonomy' => 'creative_cat',
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
          <p><span>ホームページ制作の</span><span>マーケティングノウハウを公開</span></p>
          <p>ソラボが積み重ねてきたホームページ制作のマーケティング専門知識を提供しています。<br>具体的な手順と戦略が詳細にまとめられてるので、すぐにビジネスに活用することができます。</p>
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
    <a href="<?=home_url(); ?>/creative/magazine" class="o-magazine__btn">さらにブログを見る</a>
  </section>
  <?php
  endif;
  wp_reset_postdata(); // クエリをリセット
  ?>

</main>

<?php echo do_shortcode('[myphp file="cta_creative"]'); ?>


<?php get_footer(); ?>