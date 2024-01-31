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
      <li>お問い合わせ</li>
    </ul>
  </div>
  <div class="content">
    <div class="content__inner">
      <h1>お問い合わせ</h1>
      <p>
        <span>Contact</span>
      </p>
    </div>
  </div>
</section>

<main class="p-contact js-contact">
  <p class="p-contact__text"><span>下記フォームに必要事項を記入の上、</span><span>「送信する」ボタンを押し、</span><span>お問い合わせください。</span></p>
  <div class="o-form">
    <?php echo do_shortcode('[contact-form-7 id="733023a" title="コンタクトフォーム 1"]'); ?>
  </div>
</main>


<?php get_footer(); ?>