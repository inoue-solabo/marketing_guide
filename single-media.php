<?php
    //Template Name: ブログページ(詳細)
    get_header();
?>

<section class="o-mv is-lower">
  <div class="o-bread_list">
    <ul>
      <li>
        <a href="<?=home_url(); ?>/">HOME</a>
      </li>
      <li>
        <a href="<?=home_url(); ?>/media">メディア運用</a>
      </li>
      <li><?php the_title(); ?></li>
    </ul>
  </div>
  </div>
</section>

<main class="p-custom_single is-main">

  <div class="o-flex is-single">
    <div class="o-flex__main">
      <?php if(have_posts()): while(have_posts()):the_post(); ?>
      <div class="p-custom_single__bg">
        <div class="p-custom_single__info">
          <p>
            <span><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></span>
          </p>
          <p class="font_zenkaku">
            <?php if(get_the_time('Y/m/d') != get_the_modified_date('Y/m/d')):?>
            <time>更新日:<?php echo the_modified_date('Y.m.j'); ?></time>
            <?php endif;?>
            <time>投稿日:<?php echo get_the_date('Y.m.j'); ?></time>
          </p>
        </div>
        <h1 class="p-custom_single__title"><?php the_title(); ?></h1>
        <?php
          if(has_post_thumbnail()):
        ?>
        <div class="p-custom_single__image">
          <?php the_post_thumbnail(); ?>
        </div>
        <?php endif;?>
        <div class="p-custom_single__sns js-sns">
          <ul>
            <li>
              <a href="<?php echo esc_url( 'https://www.facebook.com/share.php?u=' . $url_encode ); ?>" target="_blank" rel="noopener noreferrer">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/single/sns01.svg" alt="facebook">
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url( 'https://twitter.com/share?url=' . $url_encode . '&text=' . $title_encode ); ?>" target="_blank" rel="noopener noreferrer">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/single/sns02.svg" alt="x">
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url( 'https://getpocket.com/edit?url=' . $title_encode . '&title=' . $url_encode ); ?>" target="_blank" rel="noopener noreferrer">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/single/sns03.svg" alt="pocket">
              </a>
            </li>
            <li>
              <a class="js-sns-link" href="<?php echo esc_url( 'https://line.me/R/msg/text/?' . $title_encode . '%0A' . $url_encode ); ?>" target="_blank" rel="noopener noreferrer">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/single/sns04.svg" alt="line">
              </a>
            </li>
            <li class="js-copy">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/single/sns05.svg" alt="リンク共有">
            </li>
          </ul>
        </div>
        <div class="p-custom_single__supervision">
          <p class="p-custom_single__supervision__title">この記事の監修者</p>
          <div class="p-custom_single__supervision__content">
            <div class="p-custom_single__supervision__content-image">
              <p>この記事を書いた人</p>
              <p>
                <img src="<?= get_template_directory_uri(); ?>/assets/images/single/supervision_logo.svg" alt="株式会社solabo">
              </p>
            </div>
            <p class="p-custom_single__supervision__content-text">株式会社SoLabo(ソラボ)は、SEO、コンテンツ制作、SNS戦略からデータ分析まで、総合的なデジタルマーケティングでお客様のビジネスをサポートします。</p>
          </div>
        </div>
        <div class="p-custom_single__content js-table_content js-text_content">
          <?php the_content(); ?>
        </div>
        <?php
          $terms = get_the_terms(get_the_ID(), 'media_cat');
          if ($terms && !is_wp_error($terms)) {
            foreach ($terms as $term) {
                if ($term->slug == 'works') {
                  // タームがworksの場合の表示内容
                  ?>
                  <?php if(get_field('client')): ?>
                  <div class="p-custom_single__field">
                    <?php if(get_field('client')): ?>
                    <dl>
                      <dt>クライアント</dt>
                      <dd><?php the_field('client'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if(get_field('industry')): ?>
                    <dl>
                      <dt>業種</dt>
                      <dd><?php the_field('industry'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if(get_field('type')): ?>
                    <dl>
                      <dt>タイプ</dt>
                      <dd>
                      <span>
                      <?php
                      $type = get_field('type');
                      echo $type;
                      ?>
                      </span>
                      </dd>
                    </dl>
                    <?php endif; ?>
                    <?php if(get_field('url')): ?>
                    <dl>
                      <dt>URL</dt>
                      <dd><a href="<?php the_field('url'); ?>" target="_blank" rel="noopener noreferrer"><?php the_field('url'); ?></a></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if(get_field('open_day')): ?>
                    <dl>
                      <dt>公開日</dt>
                      <dd><?php the_field('open_day'); ?></dd>
                    </dl>
                    <?php endif; ?>
                  </div>
                  <?php endif; ?>
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
                    'posts_per_page' => 2,
                    'paged' => $paged,
                    'orderby' => 'rand',
                    'order' => 'DESC',
                  );
                  $my_query = new WP_Query($args);

                  if ($my_query->have_posts()) :
                  ?>
                  <div class="p-custom_single__other">
                    <h2 class="p-custom_single__other__title">他の成功事例</h2>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                      <article class="p-custom_single__other__detail">
                        <a href="<?php the_permalink(); ?>">
                          <div class="p-custom_single__other__detail-image is-image">
                            <?php if(has_post_thumbnail()): ?>
                            <div class="hover">
                              <?php the_post_thumbnail();?>
                            </div>
                            <?php else: ?>
                            <div class="hover is-no_image">
                              <picture>
                                <source type="image/webp" srcset="<?= get_template_directory_uri(); ?>/assets/images/common/no-image.webp">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/common/no-image.png" alt="no-image" class="no-image"/>
                              </picture>
                            </div>
                            <?php endif; ?>
                          </div>
                          <div class="p-custom_single__other__detail-text">
                            <p>
                              <span><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></span>
                            </p>
                            <h3><?php the_title(); ?></h3>
                            <p class="yajirushi">
                              <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.097.415a.394.394 0 00-.243.364v3.152H1.126a.394.394 0 100 .788h4.728V7.87a.394.394 0 00.673.278l3.545-3.545a.394.394 0 000-.558L6.527.5a.394.394 0 00-.43-.085z" fill="#1DC18D"/></svg>
                            </p>
                          </div>
                        </a>
                      </article>
                    <?php endwhile; ?>
                  </div>
                  <?php
                  endif;
                  wp_reset_postdata(); // クエリをリセット
                  ?>
                  <?php
              }
            }
          }
        ?>
      </div>
      <?php echo do_shortcode('[myphp file="cta_media_small_single"]'); ?>
      <div class="p-custom_single__article">
        <?php
        $prev_post = get_adjacent_post(false, '', true);
        $prev_post_terms = get_the_terms($prev_post->ID, 'media_cat');
        if ($prev_post && $prev_post_terms && has_term($prev_post_terms[0]->term_id, 'media_cat')):
        ?>
            <a href="<?php echo get_permalink($prev_post); ?>" class="p-custom_single__article__left p-custom_single__article__btn">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/single/prev_yajirushi.svg">
            </a>
        <?php endif; ?>
        <?php
          $terms = get_the_terms(get_the_ID(), 'media_cat');
          if ($terms && !is_wp_error($terms)) {
            foreach ($terms as $term) {
              if ($term->slug == 'works') {
                  ?>
                  <a href="<?=home_url(); ?>/media/works" class="p-custom_single__article__center">一覧へ戻る</a>
                  <?php
              } elseif ($term->slug == 'magazine') {
                  ?>
                  <a href="<?=home_url(); ?>/media/magazine" class="p-custom_single__article__center">一覧へ戻る</a>
                  <?php
              }
            }
          }
        ?>
        <?php
        $next_post = get_adjacent_post(false, '', false);
        $next_post_terms = get_the_terms($next_post->ID, 'media_cat');
        if ($next_post && $next_post_terms && has_term($next_post_terms[0]->term_id, 'media_cat')):
        ?>
            <a href="<?php echo get_permalink($next_post); ?>" class="p-custom_single__article__right p-custom_single__article__btn">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/single/next_yajirushi.svg">
            </a>
        <?php endif; ?>
      </div>

      <?php endwhile; endif; ?>
    </div>
    <div class="o-flex__sidebar is-single">
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>


<?php get_footer(); ?>