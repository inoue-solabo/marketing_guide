<?php
    //Template Name: ブログ一覧ページ
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
      <li>
        <?php single_term_title(); ?>
      </li>
    </ul>
  </div>
  <div class="content">
  <?php if(is_tax('media_cat','magazine')): ?>
  <div class="content__inner">
    <h1>メディア運用の記事一覧</h1>
    <p>
      <span>Magazine</span>
    </p>
  </div>
  <?php elseif(is_tax('media_cat','works')): ?>
  <div class="content__inner">
    <h1>メディア運用の成功事例</h1>
    <p>
      <span>Case</span>
    </p>
  </div>
  <?php endif; ?>
  </div>
</section>

<main class="p-archive">
  <div class="p-archive__inner">
    <div class="p-archive__content">
      <?php
        $paged = 1;
        $current_url = home_url(add_query_arg(array(), $wp->request));

        if (preg_match('/\/page\/(\d+)\/?$/', $current_url, $matches)) {
          $paged = max(1, intval($matches[1])); // 数字を取得して整数に変換
      }
        $type = get_query_var( 'media_cat' );
        $args = array(
          'post_type' => 'media',
          'tax_query' => array(
            array(
                'taxonomy' => 'media_cat',
                'field' => 'slug',
                'terms' => $type,
            ),
          ),
          'posts_per_page' => '12',
          'paged' => $paged,
        );
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()): while ( $my_query->have_posts() ) : $my_query->the_post();
      ?>
      <article class="p-archive__content__detail">
        <div class="p-archive__content__detail-image is-image">
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
        <?php if(is_tax('media_cat','magazine')): ?>
        <div class="p-archive__content__detail-text">
          <time><?php echo get_the_date('Y.m.j'); ?></time>
        </div>
        <?php elseif(is_tax('media_cat','works')): ?>
        <?php if(get_field('client')): ?>
        <div class="p-archive__content__detail-text">
          <?php the_field('client'); ?>
        </div>
        <?php endif; ?>
        <?php endif; ?>
        <h2 class="p-archive__content__detail-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </article>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="o-navigation">
      <?php if(function_exists("wp_pagenavi")) wp_pagenavi(array('query' => $my_query)); ?>
    </div>
    <?php wp_reset_postdata(); ?>
  </div>
</main>
<?php echo do_shortcode('[myphp file="cta_media"]'); ?>

<?php get_footer(); ?>