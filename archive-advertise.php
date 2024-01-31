<?php
    //Template Name: トップページ
    get_header();
?>

<main class="p-custom is-main">
  <section class="o-mv is-main">
    <p class="bg_text js-bg_text">ADVERTISEMENT</p>
    <div class="inner">
      <div class="image">
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
        <h1>広告運用</h1>
        <p><span>広告配信からアカウント構築・運用から配信戦略まで</span><span>幅広い業務体制とノウハウを蓄積しています。</span></p>
      </div>
    </div>
    <div class="o-small_cta">
      <div class="o-small_cta__detail is-contact">
        <p><span>広告運用について</span><br><span>無料相談・お見積りを申し込み</span></p>
        <p><span>ソラボの経験豊富な広告運用で費用対効果の</span><span>高い広告運用で成果を最大化します。</span></p>
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
        <p>費用が継続にかかる</p>
        <p>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/common/worries_yajirushi.svg" alt="矢印">
        </p>
        <p><span>ソラボでは、広告運用の効率化と</span><span>費用対効果の最大化を目指します。</span><span>予算管理を徹底し、</span><span>広告費用の最適な配分を行いながら、</span><span><span class="is-blue">目標達成に必要最低限の費用で</span></span><span><span class="is-blue">運用</span>を行います。</span></p>
      </div>
      <div class="p-custom__worries__content-detail">
        <p>専門的な知識が必要</p>
        <p>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/common/worries_yajirushi.svg" alt="矢印">
        </p>
        <p><span>広告運用のエキスパートが揃っており、</span><span><span class="is-blue">広告の設定、管理、最適化を</span></span><span><span class="is-blue">一気通貫でサポート</span>します。</span><span>広告運用の進行状況や</span><span>成果に関するレポートを定期的に提供し、</span><span>明確かつ理解しやすい方法で</span><span>情報を共有します。</span></p>
      </div>
      <div class="p-custom__worries__content-detail">
        <p>すぐにでも顧客を獲得したい</p>
        <p>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/common/worries_yajirushi.svg" alt="矢印">
        </p>
        <p><span>ターゲットの精密な分析と</span><span>効果的な広告戦略により、</span><span><span class="is-blue">短期間での顧客獲得</span>を目指します。</span><span>また、キャンペーンの迅速な立ち上げと</span><span>柔軟な最適化により、</span><span>効率的に運用アプローチし、</span><span>成果達成をサポートします。</span></p>
      </div>
    </div>
  </section>
  <section class="p-custom__strengths">
    <h2 class="p-custom__strengths__title"><span>ソラボの</span><br class="display_to_mq"><span>広告運用</span><span>の強み</span></h2>
    <p class="p-custom__strengths__text">
      <span>ターゲットに合わせた効果的な広告戦略、</span><span>データに基づく最適化、</span><span>透明性の高いレポーティング、など</span><br><span>費用対効果を重視した戦略設計により、</span><span>予算内で成果最大化を図ります。</span>
    </p>
    <ul class="p-custom__strengths__list">
      <li>
        <p>
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/advertise/strengths01.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/advertise/strengths01.png" alt="ロゴ">
          </picture>
        </p>
        <p>効果的なターゲティング</p>
        <p>お客様のビジネスに最も関連性の高いオーディエンスを特定し、ターゲットに合わせたカスタマイズされた広告運用戦略を展開します。</p>
      </li>
      <li>
        <p>
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/advertise/strengths02.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/advertise/strengths02.png" alt="ロゴ">
          </picture>
        </p>
        <p>自社の集客経験を反映</p>
        <p>自社で蓄積した豊富な集客経験を活かし、効果的な広告キャンペーンの設計、効率的なリーチ、コンバージョン率の最適化など、成功確度の高いパフォーマンスで運用します。</p>
      </li>
      <li>
        <p>
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/advertise/strengths03.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/advertise/strengths03.png" alt="ロゴ">
          </picture>
        </p>
        <p>費用対効果の高い戦略</p>
        <p>最低運用手数料5万円から運用することができ、予算とビジネス目標に合わせた効率的な広告運用で費用対効果を追求します。</p>
      </li>
      <li>
        <p>
          <picture>
            <source type="image/webp" srcset="<?=get_template_directory_uri(); ?>/assets/images/advertise/strengths04.webp">
            <img src="<?=get_template_directory_uri(); ?>/assets/images/advertise/strengths04.png" alt="ロゴ">
          </picture>
        </p>
        <p>アカウント開示</p>
        <p>Google、Yahoo広告アカウントをお客様に開示して広告キャンペーンの進捗状況と成果をお客様に提供します。（代理店はアカウントを開示しない）</p>
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
              <p>広告配信サービス</p>
            </h3>
            <p class="p-custom__service__detail-discription">時間帯や地域、曜日、キーワードに基づくカスタマイズされた広告配信、1日ごとの予算設定と広告の一時停止機能など細かなチューニングによる分析を特徴としています。<br>さらに、コンバージョンデータやユーザーの検索履歴を利用した機械学習によるターゲット指向の広告配信により、効果的な広告戦略でお客様のビジネスをサポートします。</p>
          </div>
          <div class="p-custom__service__detail-image">
            <picture>
              <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/advertise/service01.webp">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/advertise/service01.png" alt="スマホとパスコン操作する人"/>
            </picture>
            <picture>
              <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/advertise/service_human01.webp">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/advertise/service_human01.png" class="is-advertise_human01">
            </picture>
          </div>
        </div>
        <div class="p-custom__service__detail-list">
          <div class="content">
            <p>広告配信</p>
            <ul>
              <li>ターゲット指定（地域、時間、曜日）</li>
              <li>予算設定（日別）</li>
              <li>運用一時停止機能</li>
              <li>キーワード指定によるターゲティング</li>
              <li>Google広告、Yahoo広告</li>
              <li>Facebook広告/Instagram広告</li>
              <li>LINE広告（友だち追加広告以外）</li>
            </ul>
          </div>
          <div class="content">
            <p>配信結果の分析</p>
            <ul>
              <li>表示回数とクリック数分析</li>
              <li>コンバージョン追跡</li>
              <li>月次レポーティング（月1回）</li>
              <li>成果データの分析（時間帯、地域）</li>
              <li>クリック単価と獲得単価分析</li>
              <li>アナリティクスの設定（運用代行に関係する設定のみ）</li>
            </ul>
          </div>
          <div class="content">
            <p>機械学習による配信</p>
            <ul>
              <li>コンバージョンデータに基づく最適化</li>
              <li>ユーザー検索履歴によるターゲティング</li>
              <li>配信ページの精密分析</li>
              <li>効果的な配信の自動調整</li>
            </ul>
          </div>
          <div class="content">
            <p>その他サービス</p>
            <ul>
              <li>チャットサポート</li>
              <li>キーワード、広告文の構築と設定</li>
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
    <section class="p-custom__price__detail is-mb0">
      <h3>運用プラン</h3>
      <div class="p-custom__price__detail-simple">
        <p>最低運用手数料<br><span>5</span>万円(税別)</p>
        <p>広告費25万円未満は手数料5万円<br>それ以上は広告費に対しての20％が手数料</p>
      </div>
    </section>
  </section>
  <?php echo do_shortcode('[myphp file="cta_advertise_small"]'); ?>
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
        <p>契約後に<br>キックオフミーティング</p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>04</span>
        </p>
        <p class="is-f20">広告配信の設定と<br>Googleタグマネージャー<br>でCV設定</p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>05</span>
        </p>
        <p>広告配信スタート</p>
      </li>
      <li>
        <p>
          <span>STEP</span><span>06</span>
        </p>
        <p>レポーティング</p>
      </li>
    </ol>
  </section>
  <?php
  $custom_post_types = array('advertise');
  $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
  $args = array(
    'post_type' => $custom_post_types,
    'tax_query' => array(
      'relation' => 'OR',
      array(
          'taxonomy' => 'advertise_cat',
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
    <a href="<?=home_url(); ?>/advertise/works" class="o-work__btn">さらに成功事例を見る</a>
  </section>
  <?php
  endif;
  wp_reset_postdata(); // クエリをリセット
  ?>
  <?php
  $custom_post_types = array('advertise');
  $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
  $args = array(
    'post_type' => $custom_post_types,
    'tax_query' => array(
      'relation' => 'OR',
      array(
          'taxonomy' => 'advertise_cat',
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
          <p><span>広告運用の</span><span>マーケティングノウハウを公開</span></p>
          <p>ソラボが積み重ねてきた広告運用のマーケティング専門知識を提供しています。<br>具体的な手順と戦略が詳細にまとめられてるので、すぐにビジネスに活用することができます。</p>
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
    <a href="<?=home_url(); ?>/advertise/magazine" class="o-magazine__btn">さらにブログを見る</a>
  </section>
  <?php
  endif;
  wp_reset_postdata(); // クエリをリセット
  ?>

</main>

<?php echo do_shortcode('[myphp file="cta_advertise"]'); ?>


<?php get_footer(); ?>