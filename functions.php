<?php


/* titleタグの出力 */
add_theme_support('title-tag');

function change_title( $title ) { 
  //title部分に好きな文字列を入力する
  if ( is_archive()  ) {
    $title = 'そのさき弘道 | 活動報告';
  }
  return $title;
}

add_filter( 'pre_get_document_title', 'change_title' );


/* 404ページをトップへリダイレクト */
add_action( 'template_redirect', 'is404_redirect_home' );
function is404_redirect_home() {
  if ( is_404() ) {
    wp_safe_redirect( home_url( '/' ) );
    exit();
  }
}

/* アイキャッチ画像を使用する設定 */
add_theme_support( 'post-thumbnails' );

/*
 * アイキャッチがない場合の設定
 */
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
    if(empty($first_img)){
	$first_img = get_template_directory_uri() . '/images/no-image.png';
	}
	return $first_img;
}

/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'activity'; //任意のスラッグ名
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );



/*
 * デフォルトのjQueryを解除
 */
function load_script(){
  if ( !is_admin() ){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1');
  }
}
add_action('init', 'load_script');

//jsの読み込み
function add_js() {
  wp_enqueue_script(
    'main-script',
    get_template_directory_uri() . '/js/script.js',
    array(),
    false,
    true
  );

  wp_enqueue_script(
    'wp-scloll',
    'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js',
    array('main-script'),
    false,
    true
   );

}
add_action( 'wp_enqueue_scripts', 'add_js' );


function add_css() {//関数名add_css_js()を作成
	//CSSの読み込みはここから

  //全てのページにstyle.cssを読み込み
 wp_enqueue_style(
    'sub-style',
    get_template_directory_uri() . '/css/style.css',
     array()
  );

  wp_enqueue_style(
    'remix-icon',
    'https://cdn.jsdelivr.net/npm/remixicon@v4.3.0/fonts/remixicon.css',
     array('sub-style')
  );

  //フロントページにfrontpage.cssを読み込み
  if (is_front_page()){
    wp_enqueue_style(
      'front-style',
      get_template_directory_uri() . '/css/frontpage.css',
      array()
    );
  }


  if (is_page(array('policy', 'supporter','contact'))){
    wp_enqueue_style(
        'page-style',
        get_template_directory_uri() . '/css/page-base.css'
      );
  }

  if (is_page('policy')){
    wp_enqueue_style(
        'policy-style',
        get_template_directory_uri() . '/css/page/policy.css'
      );
  }

  if (is_page('history')){
    wp_enqueue_style(
        'history-style',
        get_template_directory_uri() . '/css/page/history.css'
      );
  }



  if (is_page(array('supporter'))){
    wp_enqueue_style(
        'supporter-style',
        get_template_directory_uri() . '/css/page/supporter.css'
    );
  }
  

    //記事一覧ページにarchive.cssを読み込み
    if (is_archive()){
      wp_enqueue_style(
         'archive-style',
         get_template_directory_uri() . '/css/archive.css'
       );
    }

      //記事ページにsingle.cssを読み込み
  if (is_single() || is_archive()){
    wp_enqueue_style(
       'single-style',
       get_template_directory_uri() . '/css/single.css'
     );
  }

}
  //関数名add_scripts()を表側で呼び出す
add_action('wp_enqueue_scripts', 'add_css' );


// 検索結果及び４０４ページをnoindexにする
function add_noindex_action(){
    if( is_search() || is_404() )
    echo '<meta name="robots" content="noindex,follow">';
}
add_action('wp_head','add_noindex_action', 4 );



// pre_get_postsの設定 */
function change_posts_per_page($query) {
   /* 管理画面,メインクエリに干渉しないために必須 */
  if ( is_admin() || ! $query->is_main_query() ){
       return;
   }

   /* カテゴリーページ,アーカイブページの表示件数を5件にする */
   if ( $query->is_category() || $query->is_archive() ) {
        $query->set( 'post_type' , 'post' );
        $query->set( 'posts_per_page' , '5' );
       return;
   }

}
add_action( 'pre_get_posts', 'change_posts_per_page' );


//投稿者アーカイブページ無効*/
function custom_handle_redirect() {
  if (is_author()) {
    nocache_headers();
    wp_redirect( home_url() );
    exit;
  }
}
add_action( 'parse_query', 'custom_handle_redirect' );


/*
 * ページネーション
 */
function pagenation($pages = '', $range = 2){
  $first_page  =
      '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10.3 8.4" width="13" height="14" class="pager-svg">
      <g id="Icon_feather-chevrons-right" transform="translate(10.699 8.445) rotate(180)">
      	<polygon class="st0" points="6.5,0 10.7,4.2 6.5,8.4 5.8,7.7 9.3,4.2 5.8,0.7 	"/>
      	<polygon class="st0" points="1.1,0 5.3,4.2 1.1,8.4 0.4,7.7 3.9,4.2 0.4,0.7 	"/>
      </g>
      </svg>';
    $showitems = ($range * 1)+1;
    global $paged;
    if(empty($paged)) $paged = 1;
    if($pages == ''){
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages){
            $pages = 1;
        }
    }
  if(1 != $pages){
      // 画像を使う時用に、テーマのパスを取得
      $img_pass = get_template_directory_uri();
      echo "<div class=\"m-pagenation\">";
      // 「前へ」を表示
      // if($paged > 1) echo "<div class=\"m-pagenation__prev\"><a href='".get_pagenum_link($paged - 1)."'>前へ</a></div>";

      // ページ番号を出力
      echo "<ol class=\"m-pagenation__body\">\n";
       if($paged > 1) echo "<li class=\"pager-first\"><a href='".get_pagenum_link(1)."'>".$first_page."</a></li>";
      for ($i=1; $i <= $pages; $i++){
          if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
              echo ($paged == $i)? "<li class=\"-current\">".$i."</li>": // 現在のページの数字はリンク無し
                  "<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
          }
      }
      // [...] 表示
       if(($paged + 4 ) < $pages){
          echo "<li class=\"notNumbering\">...</li>";
           echo "<li><a href='".get_pagenum_link($pages)."'>".$pages."</a></li>";
       }
      echo "</ol>\n";

      // 「1/2」表示 現在のページ数 / 総ページ数
      echo "<p class=\"m-pagenation__result\">". $paged."/". $pages."</p>";

      // if($paged < $pages) echo "<div class=\"m-pagenation__next\"><a href='".get_pagenum_link($paged + 1)."'>次へ</a></div>";
      echo "</div>\n";
  }
}

/*【出力カスタマイズ】年別アーカイブリストに年を表示する */
function my_get_archives_link($html){
  return preg_replace ( '/<\/a>/', '年</a>', $html );
}
add_filter('get_archives_link','my_get_archives_link');

/*年別アーカイブリストの投稿数をaタグの中に移動*/
function filter_to_archives_link( $link_html, $url, $text, $format, $before, $after ) {
  if ( 'html' === $format ) {
    $link_html = "<li>$before<a href='$url'>$text$after</a></li>";
  }
  return $link_html;
}
add_filter('get_archives_link', 'filter_to_archives_link', 10, 6 );


/*
 * カレンダー土日クラス
 */
function add_week_class2calendar( $calendar_output ) {
  $week_map = array(
      'mon' => '月曜日',
      'tue' => '火曜日',
      'wed' => '水曜日',
      'thu' => '木曜日',
      'fri' => '金曜日',
      'sat' => '土曜日',
      'sun' => '日曜日',
  );

  $regex = '/<th scope="col" title="([^"]+?)"/';
  $num = preg_match_all( $regex, $calendar_output, $m );

  if ( $num ) {
      $replace = array();
      for ( $i = 0; $i < $num; $i++ ) {
          $replace[$i] = '<th scope="col" class="' . array_search( $m[1][$i], $week_map ) . '" title="' . $m[1][$i] . '"';
      }
      $calendar_output = str_replace( $m[0], $replace, $calendar_output );
  }
  return $calendar_output;
}
add_filter( 'get_calendar', 'add_week_class2calendar' );

function add_week_classes2calendar( $calendar_output ) {
  global $wpdb, $m, $monthnum, $year, $wp_locale, $posts;

  if ( isset($_GET['w']) )
      $w = ''.intval($_GET['w']);

  // Let's figure out when we are
  if ( !empty($monthnum) && !empty($year) ) {
      $thismonth = ''.zeroise(intval($monthnum), 2);
      $thisyear = ''.intval($year);
  } elseif ( !empty($w) ) {
      // We need to get the month from MySQL
      $thisyear = ''.intval(substr($m, 0, 4));
      $d = (($w - 1) * 7) + 6; //it seems MySQL's weeks disagree with PHP's
      $thismonth = $wpdb->get_var("SELECT DATE_FORMAT((DATE_ADD('{$thisyear}0101', INTERVAL $d DAY) ), '%m')");
  } elseif ( !empty($m) ) {
      $thisyear = ''.intval(substr($m, 0, 4));
      if ( strlen($m) < 6 )
              $thismonth = '01';
      else
              $thismonth = ''.zeroise(intval(substr($m, 4, 2)), 2);
  } else {
      $thisyear = gmdate('Y', current_time('timestamp'));
      $thismonth = gmdate('m', current_time('timestamp'));
  }

  $jp_holidays = get_option( 'jp_holidays' );

  if ( ( ! $jp_holidays || !isset( $jp_holidays[$thisyear . $thismonth] ) || $jp_holidays[$thisyear . $thismonth]['expire'] < time() ) && $thisyear >= 2000 ) {
      $holiday_api = '<a class="vglnk" href="http://www.finds.jp/ws/calendar.php?php&y=" rel="nofollow"><span>http</span><span>://</span><span>www</span><span>.</span><span>finds</span><span>.</span><span>jp</span><span>/</span><span>ws</span><span>/</span><span>calendar</span><span>.</span><span>php</span><span>?</span><span>php</span><span>&</span><span>y</span><span>=</span></a>' . $thisyear . '&m=' . $thismonth . '&t=h&l=2';
      $ch = curl_init( $holiday_api );
      curl_setopt( $ch, CURLOPT_FAILONERROR, true );
      curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
      curl_setopt( $ch, CURLOPT_TIMEOUT, 5 );
      $source = curl_exec( $ch );
      curl_close( $ch );
      if ( $source ) {
          $results = maybe_unserialize( $source );
          if ( isset( $results['status'] ) && $results['status'] == 200 ) {
              if ( ! is_array( $jp_holidays ) ) {
                  $jp_holidays = array();
              }
              $jp_holidays[$thisyear . $thismonth] = array();
              if ( isset( $results['result']['day'] ) ) {
                  foreach ( $results['result']['day'] as $hday ) {
                      $jp_holidays[$thisyear . $thismonth][$hday['mday']] = array( 'type' => $hday['htype'], 'name' => $hday['hname'] );
                  }
                  $jp_holidays[$thisyear . $thismonth]['expire'] = time() + 365 * 24 * 3600;
              }
              update_option( 'jp_holidays', $jp_holidays );
          }
      }
  }

  $yar = (int)$thisyear;
  $mon = (int)$thismonth;
  $day = 1;
  $regex = array();
  while( checkdate( $mon, $day, $yar ) ) {
      $classes = array();
      $wday = date( 'w', strtotime( sprintf( '%04d-%02d-%02d', $yar, $mon, $day ) ) );
      switch ( $wday ) {
      case 0 :
          $classes[] = 'sun';
          break;
      case 6 :
          $classes[] = 'sat';
          break;
      default :
      }
      if ( $jp_holidays && is_array( $jp_holidays ) && count( $jp_holidays[$thisyear . $thismonth] ) && isset( $jp_holidays[$thisyear . $thismonth][$day] ) ) {
          $classes[] = 'holiday';
      }
      $class = '';

      if ( count( $classes ) ) {
          $class =  ' class="' . implode( ' ', $classes ) . '"';
      }
      if ( $class ) {
          $regex['|<td( id="today")?>(()?' . $day . '()?)</td>|'] = '<td$1' . $class . '>$2</td>';
      }
      $day++;
  }

  $calendar_output = preg_replace( array_keys( $regex ), $regex, $calendar_output );

  return $calendar_output;
}
add_filter( 'get_calendar', 'add_week_classes2calendar', 0 );




// functions.phpに追加
add_action('admin_menu', 'add_custom_fields');
add_action('save_post', 'save_custom_fields');
 
// 記事ページと固定ページでカスタムフィールドを表示
function add_custom_fields() {
  add_meta_box( 'my_sectionid', 'メタ設定', 'my_custom_fields', 'post');
  add_meta_box( 'my_sectionid', 'メタ設定', 'my_custom_fields', 'page');
}
 
function my_custom_fields() {
  global $post;
  $keywords = get_post_meta($post->ID,'keywords',true);
  $description = get_post_meta($post->ID,'description',true);
   
  echo '<p>キーワード（半角カンマ区切り）<br>';
  echo '<input type="text" name="keywords" value="'.esc_html($keywords).'" size="60"></p>';
   
  echo '<p>ページの説明（description）160文字以内<br>';
  echo '<input type="text" style="width: 600px;height: 40px;" name="description" value="'.esc_html($description).'" maxlength="160"></p>';
}
 
// カスタムフィールドの値を保存
function save_custom_fields( $post_id ) {
  if(!empty($_POST['keywords']))
    update_post_meta($post_id, 'keywords', $_POST['keywords'] );
  else delete_post_meta($post_id, 'keywords');
 
  if(!empty($_POST['description']))
    update_post_meta($post_id, 'description', $_POST['description'] );
  else delete_post_meta($post_id, 'description');
}
 
function page_description() {
 
// カスタムフィールドの値を読み込む
$custom = get_post_custom();
if(!empty( $custom['keywords'][0])) {
  $keywords = $custom['keywords'][0];
}
if(!empty( $custom['description'][0])) {
  $description = $custom['description'][0];
}
?>
  <?php if(is_front_page()): // トップページ ?>
  <meta name="robots" content="index, follow">
  <meta name="keywords" content="そのさき弘道,園崎ひろみち,自由民主党,京都府第六選挙区支部長,宇治市,城陽市,八幡市,京田辺市,木津川市,精華町市,井手町,久御山町,宇治田原町,和束町,笠置町,南山城村,京都">
  <meta name="description" content="京都府第六選挙区支部長 そのさき弘道（園崎ひろみち）のオフィシャルサイト。「京都南部から日本再生。」をスローガンとし、夢や挑戦であふれる国づくりに取り組みます。">
  <?php elseif(is_single()): // 記事ページ ?>
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="<?php echo $keywords ?>">
  <meta name="description" content="<?php echo $description ?>">
  <?php elseif(is_page()): // 固定ページ ?>
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="<?php echo $keywords ?>">
  <meta name="description" content="<?php echo $description ?>">
  <?php elseif (is_category()): // カテゴリーページ ?>
  <meta name="robots" content="index, follow" />
  <meta name="description" content="<?php single_cat_title(); ?>の記事一覧">
  <?php elseif (is_tag()): // タグページ ?>
  <meta name="robots" content="noindex, follow" />
  <meta name="description" content="<?php single_tag_title("", true); ?>の記事一覧">
  <?php elseif(is_404()): // 404ページ ?>
  <meta name="robots" content="noindex, follow">
  <title><?php echo 'お探しのページが見つかりませんでした'; ?></title>
  <?php else: // その他ページ ?>
  <meta name="robots" content="noindex, follow">
  <?php endif; ?>
  <?php
}



//更新通知を管理者権限のみに表示
function update_nag_admin_only() {
  if ( ! current_user_can( 'administrator' ) ) {
    remove_action( 'admin_notices', 'update_nag', 3 );
  }
}
add_action( 'admin_init', 'update_nag_admin_only' );

function remove_dashboard_widget() {
  remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' ); // 概要
  remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' ); // クイックドラフト
  remove_meta_box( 'dashboard_primary', 'dashboard', 'side' ); // WordPress イベントとニュース
  remove_action( 'welcome_panel', 'wp_welcome_panel' ); // ウェルカムパネル
}
add_action( 'wp_dashboard_setup', 'remove_dashboard_widget' );


function remove_menus () {
  global $menu; // 左メニューのグローバル変数

  remove_menu_page('edit-comments.php'); // コメントメニュー
}
add_action('admin_menu', 'remove_menus', 99);

   function remove_wp_nodes()
{
  global $wp_admin_bar; // 上部ツールバーのグローバル変数

  $wp_admin_bar->remove_node( 'comments' ); // コメント
}
add_action('admin_bar_menu', 'remove_wp_nodes', 99);



/*
 * 管理者あてメールとユーザーあてメールにCc, Bcc, Reply-to を指定する
 */

// 問い合わせフォームBCC追加
add_filter(
	'snow_monkey_forms/administrator_mailer/headers',
	function ($headers) {
		return [
			'Bcc: design_section_07@senkyo-pro.com',
		];
	}
);


// カスタム投稿タイプとタグを追加する
function add_create_custom_post_type() {
  $supports = array(
		'title',
		'editor',
		'author',
		'thumbnail',
		'revisions'
	);
  register_post_type(
    'currenttrend', // 投稿タイプ名
    [
    'labels' => [
        'name' => '今日の動向', // 管理画面上で表示する投稿タイプ名
        'add_new' => '新規追加', // 新規追加のラベル
        // 'add_new_item' => '国政レポート新規登録', // 編集画面ラベル(新規登録時)
        // 'edit_item' => '国政レポート編集', //編集画面ラベル(既存投稿編集時)
        // 'menu_name' => '国政レポート', //管理画面メニュー(親ラベル)
        // 'all_items' => '国政レポート', //管理画面メニュー(一覧ラベル)
        // 'search_items' => '国政レポートを検索' , //検索フォームボタンラベル
        // 'singular_name' => '国政レポート識別名',    // カスタム投稿の識別名
    ],
    'public'        => true,  // カスタム投稿タイプの表示(trueにする)
    'has_archive'   => true, // カスタム投稿一覧(true:表示/false:非表示)
    'menu_position' => 5,     // 管理画面上での表示位置
    'show_in_rest'  => true,  // true:「Gutenberg」/ false:「ClassicEditor」
    'supports' => $supports
    ]
);

// カスタム投稿タイプにタグを追加
register_taxonomy(
  'tag',
  'currenttrend',
  array(
    'label' => 'タグ',
    'rewrite' => array( 'slug' => 'currenttrend' ),
    'hierarchical' => false,
    'has_archive' => true
  )
);

}
add_action('init','add_create_custom_post_type');