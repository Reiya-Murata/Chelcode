<?php get_header();?>
  <!-- 1st-section -->
  <section class="sec-1" id="home">
    <div class="container-1">
      <img src="<?php bloginfo("template_url");?>/img/1353454.jpg" alt="">
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
          <h2>portfolio site</h2>
          <a href="https://twitter.com/Rachel_hkz"  class="ps-pe-3"><box-icon type="logo"  name="twitter" ></box-icon></a>
          <a href="https://github.com/reiya-murata"><box-icon type="logo"   name="github" ></box-icon></a>
          </div>
          <br><h3>HP制作・LP制作</h3>
          <h3>コーディング業務</h3>
          <h3>WordPressサイト制作</h3>
          <br><h2>お気軽にお問い合わせください!!</h2>
          <div class="btn"><button><a href="<?php bloginfo('url')?>/contact">お問い合わせはこちら➡</a></button></div>

          <!-- お知らせ -->
          <section class="front_news">
          <div class="sec_head">お知らせ</div>
          <div class="news_list">
            <ul>

            <?php if (have_posts()):while(have_posts()):the_post();?>

            <li>
            
              <a href="<?php the_permalink();?>">
              <div class="date"><?php echo get_the_date("Y.m.d");?> 
              <?php the_title();?>
              
              </div>

              </a>
            </li>

            <?php endwhile;endif;?>

            </ul>
          
          <div class="btn"><button><a href="<?php bloginfo('url')?>/news">一覧を見る</a></button></div>
          </div>
          </section>
          </div>
        </div>
      </div>
    </div>
  </section>

            <!-- 制作実績 -->
            <section class="work_list">
            <div class="container-5"> 
            <div class="portfolio txt">
            
            <div class="head">制作実績</div>
            <div class="work_list">
              <?php
              $args=array(
                "post_type"=>"works",//投稿タイプスラッグ
                "post_per_page"=>3
              );
              $the_query=new WP_Query($args);
              if($the_query->have_posts()):
              ?>
              <ul>
                <?php while($the_query->have_posts()):$the_query->the_post();?>
                <li>
                  <div>
                  <a href="<?php the_permalink();?>">
                  <div class="img"><img src="<?php echo CFS()->get("thumbnail");?>"></div>
                  <div class="client">クライアント:<?php echo CFS()->get("client");?></div>
                  </a>
                </div>
                </li>
                <?php endwhile;?>
            </ul>
              </div>
              <?php wp_reset_postdata();?>
              <?php else:?>
              <?php endif;?>
              </div>
              </div>
              <div class="btn">
              <button>
                <a href="<?php bloginfo('url');?>/works">一覧を見る</a>
              </button>
              </div>
              </section>
              
          

  <?php get_footer();?>