<?php
/*
Template Name: 後援会入会テンプレート
*/
?>
<?php get_header(); ?>

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

      <div class="main-tit-block sp-top-block main-top">
        <div class="ov-grad"></div>
        <div class="main-tit sp-tit">
          <h2>SUPPORTER</h2>
          <span>後援会入会のご案内</span>
        </div>

      </div>

      <div class="sp-at">
        <p>そのさき弘道後援会ではメンバーを募集しております。<br
    >さらに、京都府の未来のために活動しているそのさき弘道を多くの方に知っていただきたく、<br>京都府に在住のご親戚・ご友人・お知り合いなどをぜひご紹介ください。<br
    >※ご入力いただいた情報は個人情報保護のため、そのさき弘道の政治活動以外には一切使用いたしません。</p>
      </div>

      <div class="main-column supporter" id="supporter">

        <div class="supporter-columns">
          <?php the_content(); ?>
          <p class="recaptcha_policy">このサイトはreCAPTCHAとGoogleによって保護されています。<a href="https://policies.google.com/privacy" target="_blank">プライバシーポリシー</a>と<a href="https://policies.google.com/terms" target="_blank">利用規約</a>が適用されます。</p>
        </div>

      </div><!-- /#supporter -->


    </main>

  </div>

<?php get_footer(); ?>

