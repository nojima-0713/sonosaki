<?php get_header(); ?>

</header>

<body <?php body_class('fo'); ?> ontouchstart="">

<div class="wrapper">

  <main id="main-top">

      <!-- パンくずリスト -->
      <?php if( !(is_home() || is_front_page() )): ?>
      <div class="breadcrumb-area">
      <?php
      if ( function_exists( 'bcn_display' ) ) {
      bcn_display();
      }
      ?>
      </div>
    <?php endif; ?>


    <div class="main-tit-block main-top">

      <div class="ov-grad">
      </div>

      <div class="main-tit">
        <h2>ACTIVITY</h2>
        <span>活動報告</span>
      </div>

    </div><!--/main-tit-block-->

    <div class="content--block sa sa--up">


      <div class="content--block-inner">

        <!-- サイドバー -->
        <?php get_sidebar(); ?>

        <div class="archive_box sa sa--up">
          <!-- 日付別アーカイブリスト -->
          <?php if( is_date() ) : ?>
            <p class="date-arc-tit"><?php echo get_the_date('Y年n月'); ?> <span>の記事一覧</span></p>
          <?php endif; ?>

        <?php if(have_posts()): while(have_posts()): the_post(); ?>

          <article class="arc-list">

            <a href="<?php the_permalink(); ?>" class="arc-wrap-link"></a>

            <div class="list_box">

              <div class="arc-image-box">

                  <!--カテゴリ取得-->
                  <div class="arc-cat">
                    <?php $category = get_the_category(); $cat_name = $category[0]->cat_name; echo $cat_name; ?>
                  </div>

                <div class="list_img_box">
                  <!-- サムネイル取得 -->
                  <?php if (has_post_thumbnail()) :?>
                    <?php the_post_thumbnail('full');?>
                  <?php else :?>
                    <img src="<?php echo catch_that_image(); ?>" alt="<?php the_title();?>">
                  <?php endif ;?>
                </div>

              </div><!-- /arc-image-box -->

              <div class="arc-text-box">

                <div class="text-sp">
                  <!-- 投稿日取得 -->
                  <p class="archive-day"><?php echo get_the_date('Y.n.j'); ?></p>
                  <!-- タイトル取得 -->
                  <p class="tit-p"><?php the_title(); ?></p>
                </div>

                <button class="more-btn-box">
                  <a href="<?php the_permalink(); ?>" class="more-btn">
                  <span>続きを読む</span>
                  <i class="ri-arrow-right-s-line"></i>
                  </a>
                </button>

              </div><!-- /arc-text-box -->

            </div><!-- /list_box -->

          </article><!-- /arc-list -->

        <?php endwhile; else:?>
        <p>記事がありません。</p>
        <?php endif; ?>


         <!--ページネーション  -->
         <?php
         if( function_exists('pagenation') ){ // 関数が定義されていたらtrueになる
         pagenation();
         }?>

        </div><!--/archive_box -->

      </div><!--/content--block-inner -->

    </div><!-- /content--block -->

  </main>


<?php get_footer(); ?>
