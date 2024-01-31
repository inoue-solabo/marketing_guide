<?php
    //Template Name: トップページ
    get_header();
?>

<main class="p-custom is-main">
  <section class="o-mv is-main">
    <p class="bg_text js-bg_text">LINE</p>
    <div class="inner">
      <div class="image">
        <div class="image__detail">
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/line/mv_pc.webp" media="(min-width:768px)">
            <source srcset="<?=get_template_directory_uri(); ?>/assets/images/line/mv_pc.png" media="(min-width:768px)">
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/line/mv_sp.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/line/mv_sp.png" alt="イラスト">
          </picture>
        </div>
      </div>
      <div class="text">
        <h1>LINE運用・配信代行</h1>
        <p><span>広告配信からアカウント構築・運用から配信戦略まで</span><span>幅広い業務体制とノウハウを蓄積しています。</span></p>
      </div>
    </div>
    <div class="o-small_cta">
      <div class="o-small_cta__detail is-contact">
        <p><span>LINE公式アカウント構築・運用について</span><br><span>無料相談・お見積りを申し込み</span></p>
        <p><span>ソラボで培った「本当に効果のあるノウハウ」で</span><span>再現性の高いマーケティング戦略を提案します。</span></p>
        <a href="<?=home_url(); ?>/contact/?radio=1" class="is-contact">
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
        <p>工数削減したい</p>
        <p>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/common/worries_yajirushi.svg" alt="矢印">
        </p>
        <p><span>予約管理やオンライン決済等を</span><span>自動化することが可能です。</span><span><span class="is-blue">目的に合わせて、</span></span><span><span class="is-blue">ユーザー側から情報を集める</span></span><span>こともできます。</span></p>
      </div>
      <div class="p-custom__worries__content-detail">
        <p>顧客管理に困っている</p>
        <p>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/common/worries_yajirushi.svg" alt="矢印">
        </p>
        <p><span>登録をしたユーザーを情報と紐付けて</span><span>リスト化することも可能です。</span><span>LINEで予約管理や</span><span>決済の対応が可能な為、</span><span><span class="is-blue">ツールを１つに集約</span>できます。</span></p>
      </div>
      <div class="p-custom__worries__content-detail">
        <p>既存顧客の囲い込みをしたい</p>
        <p>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/common/worries_yajirushi.svg" alt="矢印">
        </p>
        <p><span>店舗等オフラインでは</span><span>一期一会の出会いになりがちですが、</span><span>LINEに登録いたいただくことで、</span><span class="is-blue">２度目以降の接点を継続</span><span>して持つことが可能です。</span></p>
      </div>
    </div>
  </section>
  <section class="p-custom__strengths">
    <h2 class="p-custom__strengths__title"><span>ソラボの</span><br class="display_to_mq"><span>LINE運用・配信代行</span><span>の強み</span></h2>
    <p class="p-custom__strengths__text">
      <span>ソラボでは、LINE運用・配信代行のサービスを、</span><span>マーケティングのエキスパートが担当します。</span><br>
      <span>お客様のビジネスに合わせた戦略や施策を提案し、</span><span>効果的なメッセージの作成や配信を行います。</span><br>
      <span>また、成果測定や分析も行い、改善策を提案します。</span>
    </p>
    <ul class="p-custom__strengths__list">
      <li>
        <p>
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/line/strengths01.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/line/strengths01.png" alt="ロゴ">
          </picture>
        </p>
        <p>クライアントに合った<br>拡張ツールを提案できる</p>
        <p>エルメ、Lステップなど。ミニアプリなども利用可。</p>
      </li>
      <li>
        <p>
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/line/strengths02.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/line/strengths02.png" alt="ロゴ">
          </picture>
        </p>
        <p>公式アカウント運用経験者<br>がフロントに立つ</p>
        <p>他社はフロント対応者が未経験の場合がある。</p>
      </li>
      <li>
        <p>
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/line/strengths03.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/line/strengths03.png" alt="ロゴ">
          </picture>
        </p>
        <p>広告～構築～サポート<br>までフルサポートできる</p>
        <p>構築して終わりではなく、配信代行などのサポートができる。</p>
      </li>
      <li>
        <p>
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/line/strengths04.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/line/strengths04.png" alt="ロゴ">
          </picture>
        </p>
        <p>資金調達を絡めた<br>提案ができる</p>
        <p>融資、補助金で大規模な投資ができる。</p>
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
              <p>初期構築（通常版）</p>
            </h3>
            <p class="p-custom__service__detail-discription">お客様のビジネスに合わせたアカウント名やアイコン、プロフィールなどを提案し、リッチメニューなどを作成します。また、メッセージの配信スケジュールや内容を設定し、お客様の代わりにメッセージを配信します。このサービスは、LINE運用・配信代行の基本プランとなります。</p>
          </div>
          <div class="p-custom__service__detail-image">
            <picture>
              <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/line/service01.webp">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/line/service01.png" alt="スマホとパスコン操作する人"/>
            </picture>
            <picture>
              <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/line/service_human01.webp">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/line/service_human01.png" class="is-line_human01">
            </picture>
          </div>
        </div>
        <div class="p-custom__service__detail-list">
          <ul>
            <li>初期構築</li>
            <li>リッチメニュー</li>
            <li>流入経路</li>
            <li>商品登録</li>
            <li>マニュアル作成</li>
            <li>回答フォーム</li>
            <li>画像制作</li>
          </ul>
        </div>
      </section>
      <section class="p-custom__service__detail">
        <div class="p-custom__service__detail-flex">
          <div class="p-custom__service__detail-text">
            <h3 class="p-custom__service__detail-title">
              <p>02</p>
              <p>伴走サポート</p>
            </h3>
            <p class="p-custom__service__detail-discription">LINE公式アカウントの運用や配信をお客様自身で行うためのサポートサービスです。<br>ソラボは、お客様にLINE運用・配信代行のノウハウを教えるだけでなく、実際にお客様と一緒に運用や配信を行います。</p>
          </div>
          <div class="p-custom__service__detail-image">
            <picture>
              <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/line/service02.webp">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/line/service02.png" alt="スマホとパスコン操作する人"/>
            </picture>
            <picture>
              <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/line/service_human02.webp">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/line/service_human02.png" class="is-line_human02">
            </picture>
          </div>
        </div>
        <div class="p-custom__service__detail-list">
          <ul>
            <li>チャットサポート</li>
            <li>タグ設定</li>
            <li>セミナー運用</li>
            <li>簡易修正</li>
            <li>タスク管理</li>
            <li>配信代行</li>
            <li>月次レポーティング</li>
            <li>リッチメニュー更新</li>
            <li>データ抽出</li>
            <li>流入経路分析</li>
            <li>月次コンサルティング</li>
          </ul>
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
      <h3>ライトプラン</h3>
      <div class="p-custom__price__detail-content">
        <p class="title_row01">通常</p>
        <p class="money_row01"><span>55</span>万円~(税別)</p>
        <p class="title_row02">EC</p>
        <p class="money_row02"><span>95</span>万円~(税別)</p>
        <p class="text">アカウントの開設から運用に必要な設定を承ります。<br>リッチメニュー１枚、回答フォーム１フォーム、流入経路５経路まで対応</p>
      </div>
    </section>
    <section class="p-custom__price__detail">
      <h3>スタンダードプラン</h3>
      <div class="p-custom__price__detail-content">
        <p class="title_row01">通常</p>
        <p class="money_row01"><span>70</span>万円~(税別)</p>
        <p class="title_row02">EC</p>
        <p class="money_row02"><span>120</span>万円~(税別)</p>
        <p class="text">ライトプランに加え、GoogleアナリティクスのLINEに関する構築まで承ります。<br>リッチメニュー2枚、回答フォーム2フォーム、流入経路10経路まで対応<br>（※Googleアナリティクス：属性データや行動データを分析して、サイト改善に繋げることができるアクセス解析ツールです。）</p>
      </div>
    </section>
    <section class="p-custom__price__detail">
      <h3>プレミアムプラン</h3>
      <div class="p-custom__price__detail-content">
        <p class="title_row01">通常</p>
        <p class="money_row01"><span>120</span>万円~(税別)</p>
        <p class="title_row02">EC</p>
        <p class="money_row02"><span>170</span>万円~(税別)</p>
        <p class="text">上記プランに加え、更に運用開始後のデータ分析までお手伝いします。リッチメニュー2枚、回答フォーム5フォーム、流入経路15経路まで対応</p>
      </div>
    </section>
    <section class="p-custom__price__detail is-mb0">
      <h3>その他サービス</h3>
      <div class="p-custom__price__detail-other">
        <p class="title_row01">伴走サポート</p>
        <p class="money_row01"><span>5</span>万円/月</p>
        <p class="text_row01">運用する中でのタスク管理や設定など運用のサポートを致します。<br>月に1度はミーティングの時間を設け、疑問解消のお手伝いをします</p>
        <p class="title_row02">配信代行サポート</p>
        <p class="money_row02"><span>20</span>万円/月</p>
        <p class="text_row02">伴走サポートに加え、毎月のユーザーへのメッセージ配信の設定を代行致します。（※月2回まで）運用開始後でも、簡易な修正も対応可能です。</p>
        <p class="title_row03">配信代行お任せプラン</p>
        <p class="money_row03"><span>50</span>万円/月</p>
        <p class="text_row03">LINE公式アカウントの運用やデータの分析などを代行致します。<br>（メッセージ配信は月8回まで、リッチメニューの更新も対応可能。）</p>
      </div>
    </section>
  </section>
  <?php echo do_shortcode('[myphp file="cta_line_small"]'); ?>
  <section class="p-custom__demo">
    <div class="o-title is-main is-center">
      <h2>
        <p><span>Demo</span></p>
        <p>デモストレーション</p>
      </h2>
    </div>
    <div class="p-custom__demo__content">
      <div class="p-custom__demo__content-iframe">
        <div class="iframe"><iframe src="https://www.youtube.com/embed/u0rrLAAtgRo" title="公式LINEアカウント「マーケティングガイド」ではどんなことができるの？" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
      </div>
      <div class="p-custom__demo__content-text">
        <p>マーケティングガイド<br>LINE公式アカウントで<br class="display_to_mq">試せる機能</p>
        <p>マーケティングガイドのLINE公式アカウントでは、LINEマーケティングに役立つ機能のデモ版をいくつか体験していただけます。<br>ぜひ、友だち追加してお試しください！</p>
        <ul>
          <li>メッセージ配信</li>
          <li>自動応答</li>
          <li>予約管理</li>
          <li>自動応答</li>
          <li>お問い合わせ</li>
        </ul>
        <a href="https://s.lmes.jp/landing-qr/1657771313-XMzlbl6o?uLand=0nYpYp" class="o-btn is-single is-download is-pc_left" target="_blank" rel="noopener noreferrer">デモアカウントを試してみる</a>
      </div>
    </div>
  </section>
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
        <p>契約後にサービス開始</p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>04</span>
        </p>
        <p>アカウント開設</p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>05</span>
        </p>
        <p>初期構築</p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>06</span>
        </p>
        <p>運用代行<span> (必要に応じて)</span></p>
      </li>
    </ol>
  </section>
  <?php
  $custom_post_types = array('line');
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
    <a href="<?=home_url(); ?>/line/works" class="o-work__btn">さらに成功事例を見る</a>
  </section>
  <?php
  endif;
  wp_reset_postdata(); // クエリをリセット
  ?>
  <?php
  $custom_post_types = array('line');
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
          <p><span>LINE運用・配信代行の</span><span>マーケティングノウハウを公開</span></p>
          <p>ソラボが積み重ねてきたLINE運用・配信代行のマーケティング専門知識を提供しています。<br>具体的な手順と戦略が詳細にまとめられてるので、すぐにビジネスに活用することができます。</p>
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
    <a href="<?=home_url(); ?>/line/magazine" class="o-magazine__btn">さらにブログを見る</a>
  </section>
  <?php
  endif;
  wp_reset_postdata(); // クエリをリセット
  ?>

</main>

<?php echo do_shortcode('[myphp file="cta_line"]'); ?>


<?php get_footer(); ?>