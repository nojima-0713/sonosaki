<?php get_header(); ?>
<body>

<div class="wrapper">
  <div class="main-top sa">
   

    <div class="main-top-inner">
    <img src="<?php echo get_template_directory_uri(); ?>/images/jimin-logo.png" alt="" class="jimin-logo">
      <div class="main-top-inner-column-1">
        <picture>
          <source media="(max-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top-catch-sp.png" alt="" class="top-catch" alt="京都南部から閉塞感を打ち破る！"> 
          <source media="(min-width: 561px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top-catch.png" alt="" class="top-catch" alt="京都南部から閉塞感を打ち破る！">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top-catch.png" alt="" class="top-catch" alt="京都南部から閉塞感を打ち破る！">
        </picture>
        <picture>
          <source media="(max-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top-name-2.png" alt="衆議院京都府第六選挙区支部長 そのさき弘道（園崎ひろみち） トップ名前画像"> 
          <source media="(min-width: 561px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top-name-2.png" alt="衆議院京都府第六選挙区支部長 そのさき弘道（園崎ひろみち） トップ名前画像">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top-name-2.png" alt="衆議院京都府第六選挙区支部長 そのさき弘道（園崎ひろみち） トップ名前画像">
        </picture>
      </div>

    </div>
    <div class="main-top-back">

    </div>
  </div>


  <div class="main-wrapper">


  <?php
    $args = array(
      'post_type' => 'currenttrend',
      'posts_per_page' => 10,
      'ignore_sticky_posts'  => 1,
      'paged' => 1,
    );
    $wp_query = new WP_Query($args);
  ?>
  <?php if ($wp_query->have_posts()): ?>

  <div class="main-column-block currenttrend" id="currenttrend">
    <div class="current-wrapp">
      <div class="main-tit current-tit">
        <h2 class="main-tit-p">そのさき弘道　「今日の動向」</h2>
      </div>
      <ul class="postlists">
      <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <li class="postlists_item">
          <span class="content_date"><?php the_title(); ?></span>
          <?php the_content(); ?>
        </li>    
      <?php endwhile; ?>
      </ul>
    </div>
  </div>
  <?php else: ?>

  <?php endif; ?>



    <div class="main-column sns" id="sns">
      
      <div class="main-tit sns-tit">
        <h2 class="main-tit-p">SNS</h2>
      </div>

      <div class="sns-wrapp">

        <div class="sns-btn-block">
          <a href="https://www.instagram.com/sonosaki.hiromichi/" target="_brank" class="inbuner sa sa--up">
            <i class="ri-instagram-line"></i>
            <span>Instagram</span>
          </a>
        </div>

        <div class="gr-block sa sa--up">  
          <ul id="gallery" class="gallery">
            
          </ul>
        </div>

        <div class="sns-btn-block">
        <a href="https://x.com/sonosaki_kyoto" target="_brank" class="xbuner sa sa--up">
        <i class="ri-twitter-x-line"></i>
            <span>X</span>
          </a>
          <a href="https://www.facebook.com/sonosaki.hiromichi" target="_brank" class="fbbuner sa sa--up">
            <i class="ri-facebook-circle-fill"></i>
            <span>facebook</span>
          </a>
          <a href="https://youtube.com/@sonosakihiromichi?si=hTYrmlJp-CKqXco3" target="_brank" class="ytbuner sa sa--up">
            <i class="ri-youtube-fill"></i>
            <span>youtube</span>
          </a>
        </div>

      </div>

    </div>

    <div class="main-column message" id="message">

      <div class="main-tit-block">
        <div class="main-tit">
          <h2>MESSAGE</h2>
          <span>ご挨拶</span>
        </div>
      </div>
      
      <div class="message-columns">
        <div class="message-text">
          <p>これまで城陽市議会議員約7年、京都府議会議員（城陽市選挙区）約10年、地元をより良くするため知恵を絞り、
また地元を通じて京都府全体に様々な提案を行ってまいりました。<br>
2023年6月からは、地元京都南部12市町村をより元気により暮らしやすい地域とするため、
またその事を通じて、日本の抱える諸課題解決に向け、全力で活動をしております。</p>
        </div>
        <div class="message-text">
          <p>私たちにとって、今の日本は本当に生きやすい社会でしょうか？<br
>人口減少・少子高齢化、高騰する物の値段に所得が追いついていかない、格差と貧困の連鎖。<br
>ネットを中心とした誹謗中傷。自殺による死亡率は先進国の中で一番多い……。<br
>日本に覆われているこのような閉塞感を打破することこそが、最大の政治課題であると考えます。<br
>時代の変革期において、私たちの豊かな国「日本」を取り戻すために、<br
>覆われたこの閉塞感を打ち破るために、<br
>そのさき弘道は京都南部から取り組みを進めます。</p>
        </div>
      </div>

    </div>


  <div class="main-column policy" id="policy">

    <div class="main-tit-block">
      <div class="main-tit">
        <h2>POLICY</h2>
        <span>政策</span>
      </div>
    </div>

    <div class="policy-three sa sa--up">
      <div class="policy-three-tit">
        <img src="<?php echo get_template_directory_uri(); ?>/images/pol-th-tit.svg" alt="そのさき弘道　3つの信条">
      </div>
      <div class="policy-three-text">
        <div class="policy-three-text-line">
          <span>Mindset</span>
          <p>夢や希望を大いに語ること、<span class="aks">できることから始める</span></p>
        </div>
        <div class="policy-three-text-line">
          <span>Backcasting</span>
          <p>未来から今を逆算して、<span class="aks">今、すべきことに取り組む</span></p>
        </div>
        <div class="policy-three-text-line">
          <span>Redesign</span>
          <p>より良きものへ、<span class="aks">常に見直しを図る</span></p>
        </div>
      </div>
    </div>

    <div class="policy-top sa sa--up">
      <img src="<?php echo get_template_directory_uri(); ?>/images/pol-top.png" alt="そのさき弘道　5つのビジョン">
    </div>

    <div class="policy-inner">

      <div class="policy-box">
        <div class="p-box-image p-box-image-1 sa sa--up">
        </div>
        <div class="policy-text-wrapp">
          <div class="policy-text sa sa--up policy-text-1">
            <div class="pol-tit">
              <span class="pol-tit-num">
                01
              </span>
              <p>安全保障、<br>経済・食料安全保障</p>
            </div>
            <div class="pol-text">
              <p>国民の命と平和、<br class="sp_br">日本を護る！</p>
              <div class="pol-about">
                <a href="<?php echo esc_url( home_url('/policy') ); ?>#pol-1">
                  <span>詳しく見る</span><i class="ri-arrow-right-s-line"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="policy-box">
        <div class="p-box-image p-box-image-2 sa sa--up">
        </div>
        <div class="policy-text-wrapp">
          <div class="policy-text sa sa--up">
            <div class="pol-tit">
              <span class="pol-tit-num">
                02
              </span>
              <p>インフラ･投資</p>
            </div>
            <div class="pol-text">
              <p>京都南部から<br class="sp_br">日本が動き出す！</p>
              <div class="pol-about">
                <a href="<?php echo esc_url( home_url('/policy') ); ?>#pol-2">
                  <span>詳しく見る</span><i class="ri-arrow-right-s-line"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="policy-box">
        <div class="p-box-image p-box-image-3 sa sa--up">
        </div>
        <div class="policy-text-wrapp ptw-3">
          <div class="policy-text sa sa--up">
            <div class="pol-tit">
              <span class="pol-tit-num">
                03
              </span>
              <p>社会保障・福祉</p>
            </div>
            <div class="pol-text">
              <p>安心して暮らせる<br class="sp_br">地域社会の構築！</p>
              <div class="pol-about">
                <a href="<?php echo esc_url( home_url('/policy') ); ?>#pol-3">
                  <span>詳しく見る</span><i class="ri-arrow-right-s-line"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="policy-box">
        <div class="p-box-image p-box-image-4 sa sa--up">
        </div>
        <div class="policy-text-wrapp">
          <div class="policy-text sa sa--up">
            <div class="pol-tit">
              <span class="pol-tit-num">
                04
              </span>
              <p>夢づくり･教育</p>
            </div>
            <div class="pol-text">
              <p>豊かな心の醸成、<br class="sp_br">夢と希望にあふれる人づくり</p>
              <div class="pol-about">
                <a href="<?php echo esc_url( home_url('/policy') ); ?>#pol-4">
                  <span>詳しく見る</span><i class="ri-arrow-right-s-line"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      

      <div class="policy-box">
        <div class="p-box-image p-box-image-5 sa sa--up">
        </div>
        <div class="policy-text-wrapp">
          <div class="policy-text sa sa--up">
            <div class="pol-tit">
              <span class="pol-tit-num">
                05
              </span>
              <p>地域づくり・<br>地域内循環</p>
            </div>
            <div class="pol-text">
              <p>京都南部の未来創造<br class="sp_br"> ～その先に広がる未来へ～</p>
              <div class="pol-about">
                <a href="<?php echo esc_url( home_url('/policy') ); ?>#pol-5">
                  <span>詳しく見る</span><i class="ri-arrow-right-s-line"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      

    </div>

  </div>    <!-- /#policy -->

  <div class="main-column profile" id="profile">

      <div class="main-tit-block">
        <div class="main-tit">
          <h2 class="bold">PROFILE</h2>
          <span>プロフィール</span>
        </div>
      </div>

      
      <div class="profile-columns sa sa--up">

        <div class="profile-column p-c-text">

          <div class="profile-box-top">
            <div class="p-name bold">
              <p>そのさき弘道</p><span>プロフィール</span>
            </div>
          </div>

          <div class="profile-box">
            <div class="p-t-flex">
              <p>昭和55年3月23日 石川県生まれ</p>
            </div>
            <div class="p-t-flex">
              <span>平成10年</span>
              <p>三田学園高等学校（兵庫県）卒業</p>
            </div>
            <div class="p-t-flex">
              <span>平成14年</span>
              <p>神戸大学経営学部卒業</p>
            </div>
            <div class="p-t-flex">
              <span>平成14年</span>
              <p>カネボウ化粧品（京都支社）</p>
            </div>
            <div class="p-t-flex">
              <span>平成17年</span>
              <p>選挙事務所スタッフ、家庭教師、<br>キャディ等</p>
            </div>
            <div class="p-t-flex">
              <span>平成19年</span>
              <p>城陽市議会議員（2期7年）</p>
            </div>
            <div class="p-t-flex">
              <span>平成26年</span>
              <p>京都府議会議員（4期10年）</p>
            </div>
            <div class="p-t-flex">
              <span>平成28年〜</span>
              <p>京都スポーツ・障がい者スポーツ推進協会 理事長</p>
            </div>
            <div class="p-t-flex">
              <span>令和2年</span>
              <p>大阪市立大学大学院都市経営研究科（修士）修了</p>
            </div>
            <div class="p-t-flex">
              <span>令和5年〜</span>
              <p>自民党京都府第六選挙区支部長 就任</p>
            </div>
            <div class="p-t-flex">
              <span>令和6年</span>
              <p>京都大学公共政策大学院修了<br>衆議院議員選挙にて惜敗（65,152票）</p>
            </div>
          </div>

          <div class="profile-box">
            <div class="profile-box-tit">
              <p>元</p>
            </div>
            <p class="p-dot">全日本オセロ選手権 少年少女の部 2位（1993）</p>
            <p class="p-dot">神戸大学混声合唱団エルデ学生指揮者（2000、2001）</p>
            <p class="p-dot">城陽秋花火2016実行委員長（2016）</p>
            <p class="p-dot">城陽青年会議所理事長（2016）</p>
          </div>

          <div class="profile-box">
            <div class="profile-box-tit">
              <p>現</p>
            </div>
            <p class="p-dot">京都ホッケー協会 顧問</p>
            <p class="p-dot">NPO法人 京都スポーツ・障がい者スポーツ推進協会 理事長</p>
            <p class="p-dot">城陽市空手道連盟 会長</p>
            <p class="p-dot">消防団員（寺田分団）</p>
          </div>

        </div>

        <div class="profile-column image-column">
          <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/prof-image.jpg" alt="そのさき弘道　プロフィール画像">
  <figcaption>中学１年生の夏休み、国会議事堂前にて<br>（一番右）</figcaption>
</figure>

          <img src="<?php echo get_template_directory_uri(); ?>/images/prof-image.png" alt="そのさき弘道　プロフィール画像">
        </div>

      </div>

    </div>    <!-- /#profile -->

    <div class="main-column news" id="news">

    <div class="main-tit-block">
      <div class="main-tit">
        <h2>NEWS</h2>
        <span>そのさき弘道の活動</span>
      </div>
    </div>

    <div class="news-wrapp">
      <div class="news-list-wrapp">

        <div class="news-list">
          <?php
            //スマホ・PCで表示件数を変更する条件分岐
            if( wp_is_mobile() ){
            //スマホ・タブレットの時
              $num = 2;
            } else {
            //PCの時
              $num = 3;
            }
          $paged = (int) get_query_var('page');
          $args = array(
            'posts_per_page' => $num,
            'paged' => $paged,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'publish',
          );
          $the_query = new WP_Query($args);
          if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();
          ?>

            <!-- ここにループを回して表示させるhtml -->
            <div class="news_item sa sa--up">

              <div class="news-image-block">
                <div class="news_time">
                  <?php the_time('Y.m.d') ?>
                </div>
                <div class="news-image">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                  <?php else : ?>
                    <img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" />
                  <?php endif ; ?>
                </div>
              </div>
              <div class="news-flex-block">
                <p class="news_in_title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </p>
              </div>

            </div>

          <?php
            endwhile;
            endif;
          // 記事一覧のループ終わり
          wp_reset_postdata();
          ?>
        </div>
      </div>

      <div class="news-link">
        <button class="button-34">
          <a href="<?php echo esc_url( home_url('/activity') ); ?>" class="fancy">
           <span>一覧を見る</span>
           <i class="ri-arrow-right-s-line"></i>
          </a>
        </button>
      </div>

    </div>  

  </div><!-- /news -->

  <div class="map sa sa--up">

    <div id="map" style="width: 100%; margin: 0px auto;"></div>

  </div>

  <!--googlemap -->
<script type="text/javascript" src="https://www.google.com/jsapi/"></script>
	<script type="text/javascript">
	google.load('maps', '3.x', {
	'other_params': 'key=AIzaSyAXM20rdGcVbU0UUNRpnmkPf_ZJVOAmROo&callback=initialize'
	});
	function initialize() {

		//マップの中心座標
	  var latlng = new google.maps.LatLng(34.864715,135.7710238);/*表示したい場所の経度、緯度*/

	  var myOptions = {
	    zoom: 17, /*拡大比率*/
	    center: latlng, /*表示枠内の中心点*/
	    mapTypeId: google.maps.MapTypeId.ROADMAP,/*表示タイプの指定*/
			disableDoubleClickZoom: true, //ダブルクリックでの移動を無効化
			scrollwheel: false //ホイールでの移動を無効化
	  };

	  var map = new google.maps.Map(document.getElementById('map'), myOptions);

		var iconBase = '<?php echo get_template_directory_uri(); ?>/';

		  var m_latlng1 = new google.maps.LatLng(34.864806,135.771537);
		 	marker1 = new google.maps.Marker({
		  position: m_latlng1,
		  map: map,
		  icon:{ url: iconBase + 'images/mark-2.svg',
		         scaledSize : new google.maps.Size(250, 100),
						}
					});

		var samplestyle = [
  {
    "elementType": "labels.text",
    "stylers": [
      {
        "color": "#101d5b"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#101d5b"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "landscape.man_made",
    "elementType": "geometry",
    "stylers": [
      {
        "visibility": "simplified"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.icon",
    "stylers": [
      {
        "color": "#4d67a3"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#4f6196"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#4f538c"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#233861"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#b0b0b0"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#c7c7c7"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#98bcd7"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#b3bcd1"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]
		var sampleMapType = new google.maps.StyledMapType(samplestyle, {});
		map.mapTypes.set('sample', sampleMapType);
		map.setMapTypeId('sample');
	}

		//作成したマップの呼び出し
	google.setOnLoadCallback(initialize);

	</script>
  <!-- googlemap end -->


</div><!-- /main-wrapper -->

  <?php get_footer(); ?>
