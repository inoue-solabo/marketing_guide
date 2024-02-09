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
      <li>お知らせ一覧</li>
    </ul>
  </div>
  <div class="content">
    <div class="content__inner">
      <h1>お知らせ</h1>
      <p>
        <span>Information</span>
      </p>
    </div>
  </div>
</section>

<main class="p-information">
  <ul class="p-information__content">
    <?php
      $paged = ( get_query_var('paged') ) ? absint( get_query_var('paged') ) : 1;
      $args = array(
        'post_type' => "post",//投稿タイプ設定
        'posts_per_page' => 10,// 取得記事数
        'paged' => $paged,
      );
      $cat = get_the_category();
      $my_query = new WP_Query($args);
      if ($my_query->have_posts()): while ( $my_query->have_posts() ) : $my_query->the_post();
    ?>
    <li class="p-information__content__row">
      <a href="<?php the_permalink(); ?>">
        <div class="p-information__content__row-text">
          <p>
            <span>
              <?php
                $cat = get_the_category();
                $cat = $cat[0];
                echo get_cat_name($cat->term_id);
              ?>
            </span>
          </p>
          <p><?php echo get_the_date('Y.m.j'); ?></p>
        </div>
        <h2 class="p-information__content__row-title"><?php the_title(); ?></h2>
      </a>
    </li>
    <?php endwhile; ?>
    <?php else : ?>
      <p class="p-archive__list__none">公開されているお知らせはありません。</p>
    <?php endif; ?>
    <div class="o-navigation">
      <?php if(function_exists("wp_pagenavi")) wp_pagenavi(array('query' => $my_query)); ?>
    </div>
    <?php wp_reset_postdata(); ?>
  </ul>
</main>


<?php get_footer(); ?>