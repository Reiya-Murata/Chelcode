<?php get_header();?>
  <!-- 1st-section -->
  <section class="sec-1" id="home">
    <div class="container-1">
    <div id="viewer">
        <img src="<?php bloginfo("template_url");?>/img/img1.jpg" alt="">
        <img src="<?php bloginfo("template_url");?>/img/img2.jpg" alt="">
        <img src="<?php bloginfo("template_url");?>/img/img3.jpg" alt="">
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
                  <div class="client">クライアント:<?php echo CFS()->get("client");?></div>
                  
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
              
          

  <?php get_footer();?>