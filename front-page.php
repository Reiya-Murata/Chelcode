<?php get_header();?>
  <!-- 1st-section -->
  <section class="sec-1" id="home">
    <div class="container-1">
    <div id="viewer">
        <img src="<?php bloginfo("template_url");?>/img/img1.jpg" alt="" class="slide_item">
        <img src="<?php bloginfo("template_url");?>/img/img2.jpg" alt="" class="slide_item">
        <img src="<?php bloginfo("template_url");?>/img/img3.jpg" alt="" class="slide_item">
      </div>
      <div class="content">
        <div class="loader">
          <span class="ling1"></span>
          <span class="ling2"></span>
          <span class="ling3"></span>
          <h4 class="nowloading">Now  loading...</h4>
        </div>
        <div class="main">
          <div class="top">
          <div>
          <h1 class="chelcode">Chel<span  class="purple">Code</span></h1>
          <h2 class="shadow">portfolio site</h2>
          <a href="https://twitter.com/Rachel_hkz"  class="ps-pe-3"><box-icon type="logo"  name="twitter" ></box-icon></a>
          <a href="https://github.com/reiya-murata"><box-icon type="logo"   name="github" ></box-icon></a>
          </div>
          <br><h3 class="shadow">HP制作・LP制作</h3>
          <h3 class="shadow">コーディング業務</h3>
          <h3 class="shadow">WordPressサイト制作</h3>
          <br><h2 class="shadow">お気軽にお問い合わせください!!</h2>
          <div class="btn"><button><a href="<?php bloginfo('url')?>/contact">お問い合わせはこちら➡</a></button></div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- お知らせ -->
  <section class="front_news">
    
    <div class="news_list">
      <ul>

        <?php if (have_posts()):while(have_posts()):the_post();?>

        <li>
            
        <a href="<?php the_permalink();?>">
        <div class="date1"><p><?php echo get_the_date("Y.m.d");?></p>
        <p class="news">お知らせ</p> 
        <p><?php the_title();?></P>
              
        </div>

        </a>
        </li>

            <?php endwhile;endif;?>

      </ul>
          
        <div class="btn"><button><a href="<?php bloginfo('url')?>/news">一覧を見る</a></button></div>
    </div>
  </section>


            <!-- 制作実績 -->
  <section class="work_list">
    <div class="head">制作実績</div>
    <div class="container-5"> 
            
      <?php
      $args=array(
      "post_type"=>"works",//投稿タイプスラッグ
      "posts_per_page"=>3
      );
      $the_query=new WP_Query($args);
      if($the_query->have_posts()):?>
        <?php while($the_query->have_posts()):$the_query->the_post();?>
      <a href="<?php the_permalink();?>">
      <div class="portfolio card-effect">
      <div class="img"><img src="<?php echo CFS()->get("thumbnail");?>"></div>
      <div class="client">制作物:<?php echo CFS()->get("client");?></div>
                  
      </div>
      </a>

      <?php endwhile;?>
      </div>
      <?php wp_reset_postdata();?>
      <?php else:?>
      <?php endif;?>
              
      </div>
      <div class="btn">
      <button>
      <a href="<?php bloginfo('url');?>/works">一覧を見る</a>
      </button>
      </div>
  </section>

  <!-- about -->
  <div id="content">
  <div id="main">
    <section class="sec-2" id="about">
    <div class="container-2">
    <div class="icons">
      <h1>About</h1>
      <h2>name 
      <span class="purple">Reiya</span>
      </h2>
      <div class="text-1">
        <a href="https://twitter.com/Rachel_hkz"  class="ps-pe-3"><box-icon type="logo" name="twitter">
        </box-icon></a>
        <a href="https://github.com/reiya-murata"><box-icon type="logo"   name="github"></box-icon></a>
        <div>
          <p>Web制作コーダーのReiyaです。
          <br>福島県出身、埼玉県在住の26歳。
          <br>個人や企業様のサイト作成、Web制作会社様からの業務委託を請け負います。
          <br><br>
          ・すべてのお客様へ気持ちのいいコミュニケーション でご対応いたします。
          <br>・お客様への感謝を忘れず、頂いたお仕事に精 一杯取り組みます。
          <br>・品質チェックを忘れずおこない納品いたします。</p>
        </div>
        </div>
      </div>
    <div class="photo"><img src="<?php bloginfo('template_url');?>/img/profile.JPG" alt=""></div>
    </div>
  </section>

  </div>

</div>
  <!-- service -->
  <div id="content">

  <div id="main">
    <section class="sec-3" id="service">
    <h1 class="service" id="service">SERVICE</h1>
    <div class="container-3">
      <div class="sec-3-contents">
        <box-icon name="edit"></box-icon>
        <h2 class="sec-3-title">コーディング</h2>
        <p>HTML,CSS,JavaScriptにてコーディング。Githubでのバージョン管理や、可読性の高いSCSSファイル分割とCSS設計をおこないます。</p>
      </div>

      <div class="sec-3-contents">
        <box-icon type="logo" name="wordpress"></box-icon>
        <h2 class="sec-3-title">WordPress</h2>
        <p>WordPressでのサイト作成、お問い合わせフォームの設置、複数の投稿機能の実装、メジャープラグインのインストールをおこないます。</p>
      </div>

      <div class="sec-3-contents">
        <box-icon name="desktop"></box-icon>
        <h2 class="sec-3-title">LP制作・HP制作</h2>
        <p>個人・企業ページ問わず、Webサイト制作全般に対応いたします。SNS連携、バックアップ、各種設定代もおこなっておりますので、お気軽にご相談ください。</p>
      </div>
    </div>
    </section>

  </div>


</div>
  <!-- quality -->
  <div id="content">

<div id="main">
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
      <img src="<?php bloginfo('template_url');?>/img/pc.jpg" alt="">
      </div>
    </div>     
  </section>



</div>


</div>

</section>
</div>
</div>

          

  <?php get_footer();?>