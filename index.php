<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="discripton" content="HP・LP・Webサイト格安で作成いたします!。最安5万円～。格安でホームページを作りたい企業様・個人事業主様お気軽にご相談ください!">
  <link rel="<?php stylesheet" href="style.css">
  <title>ChelCode 格安 HP・LP・Webサイト制作</title>
  <link rel="icon" href="img/logo (5).png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,400;1,600&display=swap" rel="stylesheet">
</head>

<body>
  <!-- nav-sectioon -->
  <section class="nav-section">
    <header> 
      <nav>
        <div class="logo">
          <img src="img/logo (4).png" alt="ChelCode">
        </div>
        <ul class="nav-links">
          <li><a href="<?php bloginfo('url');?>#home">HOME</a></li>
          <li><a href="<?php bloginfo('url');?>#about">ABOUT</a></li>
          <li><a href="<?php bloginfo('url');?>#service">SERVICE</a></li>
          <li><a href="<?php bloginfo('url');?>#quality">QUALITY</a></li>
          <li><a href="<?php bloginfo('url');?>#works">WORKS</a></li>
          <li><a href="<?php bloginfo('url');?>#price">PRICE</a></li>
          <li><a href="<?php bloginfo('url');?>#contact">CONTACT</a></li>
        </ul>
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </nav>
    </header>
  </section>
  <!-- 1st-section -->
  <section class="sec-1" id="home">
    <div class="container-1">
      <img src="img/1353454.jpg" alt="">
      <div class="content">
        <div class="loader">
          <span class="ling1"></span>
          <span class="ling2"></span>
          <span class="ling3"></span>
          <h4 class="nowloading">Now  loading...</h4>
        </div>
        <div class="main">
          <div class="top">
          <h1 class="chelcode">Chel<span  class="purple">Code</span></h1>
          <h2>portfolio site</h2>
          <a href="https://twitter.com/Rachel_hkz"  class="ps-pe-3"><box-icon type="logo"  name="twitter" ></box-icon></a>
          <a href="https://github.com/reiya-murata"><box-icon type="logo"   name="github" ></box-icon></a>
          <br><h3>HP制作・LP制作</h3>
          <h3>コーディング業務</h3>
          <h3>WordPressサイト制作</h3>
          <br><h2>お気軽にお問い合わせください!!</h2>
          <button type="button"><a href="#contact">お問い合わせはこちら➡</a>
          </button>
          <div class="news">
            <ul>
  
            <?php if (have_post()):while(have_post()):the_post();?>
  
            <li><a href="<?php the_parmalink();?>">
            <div class="dete"><?php echo get_the_date("Y.m.d");?>  
            </div>
            <div class="ttl"><?php the_title();?>
            </div>
            </a>
            </li>
  
            <?php endwhile;endif;?>
            </ul>
            <a href="<?php bloginfo('url')?>/news"></a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 2nd section -->
  <section class="sec-2" id="about">
    <div class="container-2">
    <div class="icons">
      <h1>About</h1>
      <h2>name 
      <span class="purple">Rachel</span>
      </h2>
      <div class="text-1">
        <a href="https://twitter.com/Rachel_hkz"  class="ps-pe-3"><box-icon type="logo" name="twitter">
        </box-icon></a>
        <a href="https://github.com/reiya-murata"><box-icon type="logo"   name="github"></box-icon></a>
        <div>
          <p>Web制作コーダーのれいちぇるです。
          <br>福島県出身、埼玉県在住の26歳。
          <br>個人や企業様のサイト作成、Web制作会社様からの業務委託を請け負います。
          <br><br>
          ・すべてのお客様へ気持ちのいいコミュニケーション でご対応いたします。
          <br>・お客様への感謝を忘れず、頂いたお仕事に精 一杯取り組みます。
          <br>・品質チェックを忘れずおこない納品いたします。</p>
        </div>
        </div>
      </div>
    <div class="photo"><img src="<?php bloginfo('template_url');?>/img/rachel.png" alt=""></div>
    </div>
  </section>
  <!-- 3rd section -->
  <section class="sec-3" id="service">
    <h1 class="service" id="service">SERVICE</h1>
    <div class="container-3">
      <div class="sec-3-contents">
        <box-icon name="edit"></box-icon>
        <h2 class="sec-3-tittle">コーディング</h2>
        <p>HTML,CSS,JavaScriptにてコーディング。Githubでのバージョン管理や、可読性の高いSCSSファイル分割とCSS設計をおこないます。</p>
      </div>

      <div class="sec-3-contents">
        <box-icon type="logo" name="wordpress"></box-icon>
        <h2 class="sec-3-tittle">WordPress</h2>
        <p>WordPressでのサイト作成、お問い合わせフォームの設置、複数の投稿機能の実装、メジャープラグインのインストールをおこないます。</p>
      </div>

      <div class="sec-3-contents">
        <box-icon name="desktop"></box-icon>
        <h2 class="sec-3-tittle">LP制作・HP制作</h2>
        <p>個人・企業ページ問わず、Webサイト制作全般に対応いたします。SNS連携、バックアップ、各種設定代もおこなっておりますので、お気軽にご相談ください。</p>
      </div>
    </div>
  </section>
  <!-- 4th section -->
  <section class="sec-4" id="quality">
    <div class="space">
    <h1 class="quality">QUALITY</h1>
    <p>納品時にはチェック項目に漏れがないか確認いたします。
    <br>丁寧で質の高い作業を心掛けています。</p>
    <br><br>
  </div>
    <div class="container-4">
      <div class="check">
        <h3>管理チェック項目</h3>
          <ul class="cheklist">
            <li class="check">デザインカンプを忠実に再現できているか(PC・SP)</li>
            <li class="check">見出し構造が不自然ではないか</li>
            <li class="check">水平スクロールしないか</li>
            <li class="check">JavaScriptの挙動は正しいか</li>
            <li class="check">altが正しく設定されているか</li>
            <li class="check">閉じタグチェック</li>
            <li class="check">各ブラウザで表示崩れは起きていないか</li>
            <li class="check">リンク切れが起きていないか</li>
            <li class="check">コンソールエラーが出ていないか</li>
          </ul>
      </div>
      <div class="pc-img">
        <img src="<?php bloginfo('template_url')?>/img/pc.jpg" alt="">
      </div>
    </div>
  </section>
  <!-- work section -->
  <section class="sec-5" id="work">
    <div class="space">
      <h1>WORKS</h1>
        <p>制作実績</p>
      <div class="container-5">
        <div class="portfolio">
          <p>デモサイト作成</p>
          <a href="https://rachel0309.com/Scroll-Reveal/">
          <img class="work" src="<?php bloginfo('template_url');?>/img/スクリーンショット (3).png" alt="制作サイト1"></a></div>
        <div class="portfolio">
          <p>デモサイト作成</p>
          <a href="https://rachel0309.com/bootstrap"><img class="work" src="<?php bloginfo('template_url');?>/img/スクリーンショット (2).png" alt="制作サイト2"></a></div>
        <div class="portfolio">
          <p>デモサイト作成</p>
          <a href="https://rachel0309.com/Airbnb/"><img class="work" src="<?php bloginfo('template_url');?>/img/スクリーンショット (4).png" alt="制作サイト3"></a></div>
      </div>
    </div>
  </section>
  <!-- price section -->
  <section class="sec-6" id="price">
      <div class="space">
      <h1>PRICE</h1>
      <p class="space">価格</p>
      <div class="container-6">
        <div class="sec-3-contents">
          <box-icon name="edit"></box-icon>
          <h2 class="sec-3-tittle">LP・HP制作(1～5p)</h2>
          <p>HTML,CSS,JavaScriptにてLP・HP(1～5ページ)を制作いたします</p>
          <h3>￥30,000～(税別)</h3>
        </div>
  
        <div class="sec-3-contents">
          <box-icon name="desktop"></box-icon>
          <h2 class="sec-3-tittle">LP・HP制作(5p～)</h2>
          <p>HTML,CSS,JavaScriptにてLP・HP(5ページ～)を制作いたします</p>
          <h3>￥50,000～(税別)</h3>
        </div>

        <div class="sec-3-contents">
          <box-icon type="logo" name="wordpress">
          </box-icon>
          <h2 class="sec-3-tittle">WordPressオリジナルテーマ作成</h2>
          <p>お客様自身で、お知らせや実績・ブログを簡単に作成・編集できるWordPressオリジナルテーマを作成いたします。</p>
          <h3>￥50,000～(税別)</h3>
        </div>
      </div>
    </div>
  </section>

<!-- contact -->


<footer>
<div class="copyright"><p>&copy2023 All right reserved</p></div>
</footer>

<script src="script.js" ></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script>
ScrollReveal({ 
  reset: false,
  distance:"60px",
  duretion:2000,
  delay:200,
});

ScrollReveal().reveal('.image,.text-1,.photo,h1,h2,h3,p,cheklist,li.check,img.work,.pc-img,box-icon', { delay: 300 ,origin:"bottom"});
ScrollReveal().reveal('.text-box', { delay: 700 ,origin:"right"});
ScrollReveal().reveal('.media-icons i', {
    delay: 200 ,
    origin:"bottom",
    interval:200,});
ScrollReveal().reveal('.media-info li', {
delay:500 ,
origin:"left",
interval:200,});
ScrollReveal().reveal('.sec-2 .image,.sec-3 .image', {
delay:500 ,
origin:"top",});
</script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js">
  </script>

</body>
</html>