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
        <a href="<?=home_url(); ?>/information">お知らせ一覧</a>
      </li>
      <li><?php the_title(); ?></li>
    </ul>
  </div>
</section>

<main class="p-single">
  <div class="p-single__top">
    <div class="p-single__top__text">
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
    <h1 class="p-single__top__title"><?php the_title(); ?></h1>
  </div>
  <div class="p-single__content">
    <?php the_content(); ?>
  </div>
  <a href="<?=home_url(); ?>/information" class="o-btn is-single is-center is-contact">一覧へ戻る</a>
</main>


<?php get_footer(); ?>