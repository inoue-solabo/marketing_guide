<?php
    //Template Name: 共通
    get_header();
?>

<main class="p-thanks">
  <h1><span>お問い合わせ</span><span>ありがとうございます</span></h1>
  <p class="p-thanks__logo">
    <img src="<?= get_template_directory_uri(); ?>/assets/images/thanks/thanks.svg" alt="紙飛行機">
  </p>
  <div class="p-thanks__text">
    <p>お問い合わせを受け付け致しました。</p>
    <p>
      <span>お問い合わせ頂いた内容を確認の上、</span><span>担当よりご連絡をさせていただきますので、</span><br>
      <span>今しばらくお待ちいただけますよう、</span><span>お願い致します。</span>
    </p>
    <p><span>この度はお問い合わせいただき、</span><span>誠にありがとうございました。</span></p>
    <p><span>※ご入力いただいたメールアドレス宛に、</span><span>お問い合わせ内容のご確認メールを</span><span>お送りしております</span></p>
  </div>
  <a href="<?=home_url(); ?>/" class="p-thanks__btn">TOPへ戻る</a>
</main>


<?php get_footer(); ?>