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
      <li>404 NOT FOUND</li>
    </ul>
  </div>
  <div class="content">
    <div class="content__inner">
      <h1>404 NOT FOUND</h1>
    </div>
  </div>
</section>

<main class="p-contact">
  <p class="p-contact__text">お探しのページは存在しません。</p>
  <a href="<?=home_url(); ?>/" class="o-btn is-single is-contact">トップへ戻る</a>
</main>


<?php get_footer(); ?>