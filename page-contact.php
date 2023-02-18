<?php get_header();?>

<div id="content">
<section class="contact" id="contact">
  
  <div class="space-2">
    <h1>CONTACT</h1>
    <div class="contactform">
    <form action="https://api.staticforms.xyz/submit" method="post">
      <p class="title">お問い合わせ</p>
      <div class="item">
        <label class="label">お名前</label>
        <input type="text" class="inputs" name="name" required>
      </div>
      <div class="item">
        <label class="label">メールアドレス</label>
        <input type="text" class="inputs" name="email" required>
      </div>
      <div class="item">
        <label class="label">メッセージ</label>
        <textarea name="message" id="" cols="30" rows="10"></textarea>
      </div>
      <div class="button-area">
        <input type="submit" value="送信">
      </div>
      <input type="hidden" name="accessKey" value="afbd65b6-7a6b-48a9-9346-05873694ddd1">
    </form>
  </div>
  </div>
  <div class="space"></div>
</section>


<?php get_footer();?>