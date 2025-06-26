<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if (  is_front_page() ) : ?>
<title>そのさき弘道（園崎ひろみち） | 京都府第六選挙区支部長</title>
<?php endif; ?>


<?php page_description(); ?>
<meta property="og:url"  content="https://sonosakimirai.com/" />
<meta property="og:type" content="website" />
<meta property="og:title" content="そのさき弘道（園崎ひろみち） | 京都府第六選挙区支部長" />
<meta property="og:description" content="京都府第六選挙区支部長 そのさき弘道（園崎ひろみち）のオフィシャルサイト。「京都南部から日本再生。」をスローガンとし、夢や挑戦であふれる国づくりに取り組みます。" />
<link rel="icon alternate" href="/favicon.ico">
<meta property="og:image" content="https://sonosakimirai.com/wp/wp-content/themes/sonosaki/images/ogp.png" />
<link rel="apple-touch-icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icon-192x192.png">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B5RHF15EJ7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-B5RHF15EJ7');
</script>
<?php wp_head(); ?>
</head>

<header class="header">

  <div class="header-top" id="header-top">

    <div class="header-top-back">

      <div class="header-top-back-inner">

        <div class="header-nav-name">
          <h1>
            <a href="<?php echo esc_url( home_url() ); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/head-name-5.svg" class="top-img-2" alt="京都府第六選挙区支部長 そのさき弘道">
            </a>
          </h1>
        </div>


        <div id="nav-toggle">
          <span></span>
          <span></span>
          <span></span>
          <p id="menu-text">MENU</p>
        </div>

        <ul class="menu-header bold">

          <li class="menu-header-link">
            <a href="<?php echo esc_url( home_url() ); ?>" data-text="トップ"><span>トップ</span></a>
          </li>

          <li class="menu-header-link">
            <?php if ( is_front_page() ) : ?>
              <a href="#sns" data-text="SNS"><span>SNS</span></a>
            <?php else:?>
              <a href="<?php echo esc_url( home_url() ); ?>#sns" data-text="SNS"><span>SNS</span></a>
            <?php endif; ?>  
          </li>

          <li class="menu-header-link">
            <a href="<?php echo esc_url( home_url('/policy') ); ?>" data-text="政策"><span>政策</span></a>   
          </li>

          <li class="menu-header-link">
            <?php if ( is_front_page() ) : ?>
              <a href="#profile" data-text="プロフィール"><span>プロフィール</span></a>
            <?php else:?>
              <a href="<?php echo esc_url( home_url() ); ?>#profile" data-text="プロフィール"><span>プロフィール</span></a>
            <?php endif; ?>  
          </li>

          <li class="menu-header-link">
            <a href="<?php echo esc_url( home_url('/history') ); ?>" data-text="そのさき弘道の歩み"><span>そのさき弘道の歩み</span></a>   
          </li>

          <li class="menu-header-link">
            <a href="<?php echo esc_url( home_url('/activity') ); ?>" data-text="活動報告"><span>活動報告</span></a>   
          </li>

          <li class="menu-header-link">
            <a href="<?php echo esc_url( home_url('/supporter') ); ?>" data-text="後援会"><span>後援会</span></a>   
          </li>

          <li class="menu-header-link h-sns-link">
            <a href="https://www.facebook.com/sonosaki.hiromichi" target="_blank"><i class="ri-facebook-circle-fill"></i></a>   
            <a href="https://www.instagram.com/sonosaki.hiromichi/" target="_blank"><i class="ri-instagram-line"></i></a>
            <a href="https://x.com/sonosaki_kyoto" target="_blank"><i class="ri-twitter-x-line"></i></a>
          </li>

        </ul>

      </div>

    </div>

  </div><!--/header_top-->

  <!--スマホメニュー -->
  <div class="sp-nav">
    <div class="nav-container">
      <div class="nav-text-block">

        <ul class="nav-menu">

          <li class="nav-menu-list1">
            <a href="<?php echo esc_url( home_url() ); ?>" class="pc-h-link">
              <span>トップ</span>
              <span class="sp-en">TOP</span>
            </a>
          </li>

          <li class="nav-menu-list2">
            <?php if ( is_front_page() ) : ?>
              <a href="#sns" class="pc-h-link">
                <span>SNS</span>
                <span class="sp-en">SNS</span>
              </a>
            <?php else:?>
              <a href="<?php echo esc_url( home_url() ); ?>#sns" class="pc-h-link">
                <span>SNS</span>
                <span class="sp-en">SNS</span>
              </a>
            <?php endif; ?>
          </li>

          <li class="nav-menu-list3">
            <a href="<?php echo esc_url( home_url('/policy') ); ?>" class="pc-h-link">
              <span>政策</span>
              <span class="sp-en">POLICY</span>
            </a>
          </li>

          <li class="nav-menu-list4">
            <?php if ( is_front_page() ) : ?>
              <a href="#profile" class="pc-h-link">
                <span>プロフィール</span>
                <span class="sp-en">PROFILE</span>
              </a>
            <?php else:?>
              <a href="<?php echo esc_url( home_url() ); ?>#profile" class="pc-h-link">
                <span>プロフィール</span>
                <span class="sp-en">PROFILE</span>
              </a>
            <?php endif; ?>
          </li>

          <li class="nav-menu-list5">
            <a href="<?php echo esc_url( home_url('/history') ); ?>" class="pc-h-link">
              <span>そのさき弘道の歩み</span>
              <span class="sp-en">HISTORY</span>
            </a>   
          </li>

          <li class="nav-menu-list6">
            <a href="<?php echo esc_url( home_url('/activity') ); ?>" class="pc-h-link">
              <span>活動報告</span>
              <span class="sp-en">ACTIVITY</span>
            </a>
          </li>

          <li class="nav-menu-list7">
            <a href="<?php echo esc_url( home_url('/supporter') ); ?>" class="pc-h-link">
              <span>後援会</span>
              <span class="sp-en">SUPPORTER</span>
            </a>
          </li>

          <li class="f-sns nav-menu-list8">
            <a href="https://www.facebook.com/sonosaki.hiromichi" target="_blank"><i class="ri-facebook-circle-fill"></i></a>   
            <a href="https://www.instagram.com/sonosaki.hiromichi/" target="_blank"><i class="ri-instagram-line"></i></a>
            <a href="https://x.com/sonosaki_kyoto" target="_blank"><i class="ri-twitter-x-line"></i></a>
          </li>

        </ul><!-- /nav-menu -->

      </div><!-- /nav-text-block -->
    </div><!-- /nav-container -->
  </div><!-- /sp-nav -->



</header> 

