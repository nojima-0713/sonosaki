<?php get_header(); ?>

</header>

<body ontouchstart="">

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

      </div>

      <div class="content--block sa sa--up">

        <div class="content--block-inner">

          <!-- サイドバー -->
          <?php get_sidebar(); ?>

          <?php if(have_posts()): the_post(); ?>

          <article class="article-content sa sa--up">

            <div class="article-info">

              <div class="arc-info-box">
                <!-- 投稿日取得 -->
                <p class="single-day"><?php echo get_the_date('Y.n.j'); ?></p>
                <!-- カテゴリー取得-->
                <div class="single-cat">
                  <p>
                    <?php $category = get_the_category(); $cat_name = $category[0]->cat_name; echo $cat_name; ?>
                  </p>
                </div>

              </div>

              <!--タイトル-->
              <h2 class="article-title-s"><?php the_title(); ?></h2>
            </div>

              <!--本文取得-->
            <div class="single-inner">
              <?php the_content(); ?>
            </div>

            <!-- 次の記事・前の記事 -->
            <div class="p_page_pager_block">

              <?php
                $prevpost = get_adjacent_post(false, '', true); //前の記事
                $nextpost = get_adjacent_post(false, '', false); //次の記事
                if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
                ?>
              <div class="p_page_pager">
                <?php
                if ( $prevpost ) { //前の記事が存在しているとき
                echo '<div class="p_pager_prev">' . '<a href="' . get_permalink($prevpost->ID) . '"> ' .'<span class="arrow01"></span><p>前の記事</p></a></div>';
                }
                echo '<div class="top_next"><a href="' . home_url('/activity') . '">一覧へ戻る</a></div>';
                if ( $nextpost ) { //次の記事が存在しているとき
                echo '<div class="p_pager_next">' . '<a href="' . get_permalink($nextpost->ID) . '">' .'<p>次の記事</p><span class="arrow02"></span></a></div>';
              }
                ?>
              </div>
              <?php } ?>

            </div><!--/p_page_pager_block -->

          </article>

          <?php endif; ?>


        </div><!-- /content--block-inner-->

      </div><!-- /content--block -->

    </main>

<?php get_footer(); ?>
