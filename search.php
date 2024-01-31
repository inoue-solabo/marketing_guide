<?php
    //Template Name: ブログ検索結果ページ
    get_header();
?>

<?php
    global $wp_query;
    $total_results = $wp_query->found_posts;
    $search_query = get_search_query();

?>

<main class="p-top p-archive">
  <section class="o-mv is-archive">
    <div class="inner">
      <ul>
        <li>
          <a href="<?=home_url(); ?>/">TOP</a>
        </li>
        <?php  if ( empty( get_search_query() ) ) :?>
        <li>
          <a href="<?=home_url(); ?>/blog">記事一覧</a>
        </li>
        <li>検索結果なし</li>
        <?php else: ?>
        <li>
          <a href="<?=home_url(); ?>/blog">記事一覧</a>
        </li>
        <li class="current"><?php echo $search_query; ?></li>
        <?php endif; ?>
      </ul>
      <h1>
        <?php  if ( empty( get_search_query() ) ) :?>
        検索ワードを<br>入力してください
        <?php else: ?>
        <?php echo $search_query; ?>
        <?php endif; ?>
      </h1>
      <p>
        <?php
          // 現在のページ番号を取得
          $current_page = get_query_var('paged');
          $current_page = $current_page == 0 ? '1' : $current_page;
          // echo '<p>現在は' . $current_page . 'ページ目です</p>';
          // 全ページ数を取得
          $max_pages = $wp_query->max_num_pages;
          $item = 10;
          $num = ceil($max_pages / $item);
          echo '<p>全'.$max_pages.'件';
          // if($current_page == 1 && $num == 1){
          //   echo '<p>全'.$max_pages.'件';
          // }else{
          //   if($max_pages >= 1 && $num >= 1){
          //     echo '全'.$max_pages.'件（'.$current_page .'/'.$num.'）';
          //   }else if($max_pages >= 1 && $num == 0){
          //     echo '全'.$max_pages.'件';
          //   }
          // }
        ?>
      </p>
    </div>
  </section>
  <div class="o-flex" id="content">
    <div class="o-flex__main is-archive">
      <section>
        <h2 class="o-title">
          <span>CONTENTS</span>
          <span>記事一覧</span>
        </h2>
        <div class="o-blog">
          <?php
            if ( empty( get_search_query() ) ) :
              echo '<p class="left">検索キーワードが未入力です。</p>';
            else :

            $args = array(
              'post_type' => "post",
              'posts_per_page' => -1,
              's' => $search_query,
            );

            $my_query = new WP_Query( $args );

            if ( $my_query->have_posts() ):
              while ( $my_query->have_posts() ): $my_query->the_post();
          ?>
          <article class="o-blog__detail">
            <div class="o-blog__detail__image is-image">
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
            <div class="o-blog__detail__inner">
              <p class="o-blog__detail__category">
                <span>
                  <?php
                    $cat = get_the_category();
                    $cat = $cat[0];
                    echo get_cat_name($cat->term_id);
                  ?>
                </span>
              </p>
              <h3 class="o-blog__detail__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <div class="o-blog__detail__text">
                <?php if(get_the_time('Y/m/d') != get_the_modified_date('Y/m/d')):?>
                <div class="date">
                  <time>更新日:<?php echo get_the_date('Y.m.j'); ?></time>
                </div>
                <?php endif;?>
                <div class="date">
                  <time>投稿日:<?php echo get_the_date('Y.m.j'); ?></time>
                </div>
              </div>
            </div>
          </article>
          <?php endwhile; wp_reset_postdata(); else: ?>
          <?php echo $search_query; ?> に一致する情報は見つかりませんでした。
          <?php endif; ?>
          <?php endif; ?>
        </div>
      </section>
    </div>
    <div class="o-flex__sidebar">
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>


<?php get_footer(); ?>