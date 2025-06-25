<aside id="sidebar" class="sa sa--up">

  <!-- カレンダー -->
  <div class="calender-wrapper">
    
    <h4 class="sidebar-title">カレンダー</h4>
    <div class="sidebar-block calender-block">
      <div class="side-inner">
        <?php get_calendar(); ?>
      </div>
    </div>

  </div><!-- /sidebar-wrapper -->

  <!-- 最近の投稿 -->
  <div class="sidebar-wrapper">

   <div class="sidebar-wrapper-inner">
    <h4 class="sidebar-title">最近の投稿</h4>

    <ul class="side-item-list">
    <?php
      $newposts = get_posts( array(
        'post_type' => 'post',
        'posts_per_page' => '5'
      ));
      if( $newposts ): ?>
        <?php foreach($newposts as $post):
        setup_postdata($post); ?>
        <li class="side-item">
          <a href="<?php the_permalink() ?>">
            <?php the_title(); ?>
          </a>
        </li>
        <?php endforeach; ?>
        <?php wp_reset_postdata();
        endif; ?>
      </ul>
   </div>

  </div><!-- /sidebar-wrapper -->

  <!-- 年別アーカイブ -->
  <div class="sidebar-wrapper">

    <div class="sidebar-wrapper-inner">
      <h4 class="sidebar-title">アーカイブ</h4>
      <div class="year-archive-inner side-inner">
        <ul class="side-item-list">
          <?php wp_get_archives( 'post_type=post&type=monthly&show_post_count=1' ); ?>
        </ul>
      </div>
    </div>

  </div><!-- /sidebar-wrapper -->

</aside>
