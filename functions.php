<?php
// 管理バーを非表示
add_filter('show_admin_bar', '__return_false');

add_theme_support( 'post-thumbnails' );

// remove_filter ( 'the_content', 'wpautop' ); // 本文
// remove_filter ( 'the_excerpt', 'wpautop' ); // 抜粋

add_action('init', function() {
  if ( is_page() ) {
    remove_filter('the_content', 'wpautop');
  };
});

function custom_tag_filter($tag){
  if ( ! is_array( $tag ) ){
    return $tag;
  }
	$name = $tag['name'];
	//ラジオボタンの場合
	if(isset($_GET['radio'])){
		if($name == 'radio'){
			$tag['options'][] = "default:" . $_GET['radio'];
		}
	}
  return $tag;
}
add_filter('wpcf7_form_tag', 'custom_tag_filter', 11);


// 固定ページでの ショートコード url
function shortcode_url() { return get_bloginfo('url'); } add_shortcode('url', 'shortcode_url');

// 固定ページでの ショートコード 画像など
function shortcode_templateurl() {
  return get_bloginfo('template_url');
}
add_shortcode('template_url', 'shortcode_templateurl');

add_filter( 'wp_kses_allowed_html', 'my_wp_kses_allowed_html', 10, 2 );
function my_wp_kses_allowed_html( $tags, $context ) {
    $tags['source']['srcset'] = true;
    return $tags;
}


//投稿の名前変更

function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'お知らせ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'お知らせ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );

function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'information';
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


//カスタム投稿関連
function create_post_type(){
  $supports = array(
    'title',
    'editor',
    'thumbnail',
    'revisions',
  );
  register_post_type('line',
    array(
      'label' => 'LINE運用・配信代行',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 12,
      'show_in_rest' => true,
      'supports' => $supports,
    )
  );
  register_post_type('advertise',
    array(
      'label' => '広告運用',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 13,
      'show_in_rest' => true,
      'supports' => $supports,
    )
  );
  register_post_type('creative',
    array(
      'label' => 'ホームページ制作',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 14,
      'show_in_rest' => true,
      'supports' => $supports,
    )
  );
  register_post_type('media',
    array(
      'label' => 'メディア運用',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 15,
      'show_in_rest' => true,
      'supports' => $supports,
    )
  );
  register_post_type('consulting',
    array(
      'label' => '伴走コンサルティング',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 16,
      'show_in_rest' => true,
      'supports' => $supports,
    )
  );
  register_taxonomy(
    'line_cat',
    'line',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カスタムカテゴリー',
      'query_var' => true,
      'public' => true,
      'show_ui' => true,
      'rewrite' => array('slug'=>'line'),//paralux-catを変更
    )
  );
  register_taxonomy(
    'advertise_cat',
    'advertise',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カスタムカテゴリー',
      'query_var' => true,
      'public' => true,
      'show_ui' => true,
      'rewrite' => array('slug'=>'advertise'),//paralux-catを変更
    )
  );
  register_taxonomy(
    'creative_cat',
    'creative',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カスタムカテゴリー',
      'query_var' => true,
      'public' => true,
      'show_ui' => true,
      'rewrite' => array('slug'=>'creative'),//paralux-catを変更
    )
  );
  register_taxonomy(
    'media_cat',
    'media',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カスタムカテゴリー',
      'query_var' => true,
      'public' => true,
      'show_ui' => true,
      'rewrite' => array('slug'=>'media'),//paralux-catを変更
    )
  );
  register_taxonomy(
    'consulting_cat',
    'consulting',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カスタムカテゴリー',
      'query_var' => true,
      'public' => true,
      'show_ui' => true,
      'rewrite' => array('slug'=>'consulting'),//paralux-catを変更
    )
  );
}
add_action('init','create_post_type');

function custom_rewrite_rules() {
  add_rewrite_rule('line/([^/]+)/?', 'index.php?line_cat=$matches[1]', 'top');
  add_rewrite_rule('advertise/([^/]+)/?', 'index.php?advertise_cat=$matches[1]', 'top');
  add_rewrite_rule('creative/([^/]+)/?', 'index.php?creative_cat=$matches[1]', 'top');
  add_rewrite_rule('media/([^/]+)/?', 'index.php?media_cat=$matches[1]', 'top');
  add_rewrite_rule('consulting/([^/]+)/?', 'index.php?consulting_cat=$matches[1]', 'top');
}
add_action('init', 'custom_rewrite_rules');


add_filter('post_type_link', 'generateCustomPostLink1', 1, 2);
add_filter('rewrite_rules_array', 'addRewriteRules1');
add_filter('post_type_link', 'generateCustomPostLink2', 1, 2);
add_filter('rewrite_rules_array', 'addRewriteRules2');
add_filter('post_type_link', 'generateCustomPostLink3', 1, 2);
add_filter('rewrite_rules_array', 'addRewriteRules3');
add_filter('post_type_link', 'generateCustomPostLink4', 1, 2);
add_filter('rewrite_rules_array', 'addRewriteRules4');
add_filter('post_type_link', 'generateCustomPostLink5', 1, 2);
add_filter('rewrite_rules_array', 'addRewriteRules5');


function generateCustomPostLink1($link, $post){
    if ($post->post_type === 'line') {
        $terms = get_the_terms($post->ID, 'line_cat');
        if ($terms && !is_wp_error($terms)) {
            $term_slug = $terms[0]->slug;
            return home_url("/line/$term_slug/{$post->ID}");
        }
    }
    return $link;
}

function addRewriteRules1($rules){
    $new_rules = array(
        'line/([^/]+)/([0-9]+)/?$' => 'index.php?post_type=line&line_cat=$matches[1]&p=$matches[2]',
    );
    return $new_rules + $rules;
}

function generateCustomPostLink2($link, $post){
  if ($post->post_type === 'advertise') {
      $terms = get_the_terms($post->ID, 'advertise_cat');
      if ($terms && !is_wp_error($terms)) {
          $term_slug = $terms[0]->slug;
          return home_url("/advertise/$term_slug/{$post->ID}");
      }
  }
  return $link;
}

function addRewriteRules2($rules){
  $new_rules = array(
      'advertise/([^/]+)/([0-9]+)/?$' => 'index.php?post_type=advertise&advertise_cat=$matches[1]&p=$matches[2]',
  );
  return $new_rules + $rules;
}


function generateCustomPostLink3($link, $post){
  if ($post->post_type === 'creative') {
      $terms = get_the_terms($post->ID, 'creative_cat');
      if ($terms && !is_wp_error($terms)) {
          $term_slug = $terms[0]->slug;
          return home_url("/creative/$term_slug/{$post->ID}");
      }
  }
  return $link;
}

function addRewriteRules3($rules){
  $new_rules = array(
      'creative/([^/]+)/([0-9]+)/?$' => 'index.php?post_type=creative&creative_cat=$matches[1]&p=$matches[2]',
  );
  return $new_rules + $rules;
}
function generateCustomPostLink4($link, $post){
  if ($post->post_type === 'media') {
      $terms = get_the_terms($post->ID, 'media_cat');
      if ($terms && !is_wp_error($terms)) {
          $term_slug = $terms[0]->slug;
          return home_url("/media/$term_slug/{$post->ID}");
      }
  }
  return $link;
}

function addRewriteRules4($rules){
  $new_rules = array(
      'media/([^/]+)/([0-9]+)/?$' => 'index.php?post_type=media&media_cat=$matches[1]&p=$matches[2]',
  );
  return $new_rules + $rules;
}

function generateCustomPostLink5($link, $post){
  if ($post->post_type === 'consulting') {
      $terms = get_the_terms($post->ID, 'consulting_cat');
      if ($terms && !is_wp_error($terms)) {
          $term_slug = $terms[0]->slug;
          return home_url("/consulting/$term_slug/{$post->ID}");
      }
  }
  return $link;
}

function addRewriteRules5($rules){
  $new_rules = array(
      'consulting/([^/]+)/([0-9]+)/?$' => 'index.php?post_type=consulting&consulting_cat=$matches[1]&p=$matches[2]',
  );
  return $new_rules + $rules;
}



//* メディアでWebPをアップできるようにする
function add_file_types_to_uploads( $mimes ) {
  $mimes['webp'] = 'image/webp';
  return $mimes;
}
add_filter( 'upload_mimes', 'add_file_types_to_uploads' );

//* WebP image thumbnail display on media　Library
function webp_is_displayable($result, $path) {
  if ($result === false) {
      $displayable_image_types = array( IMAGETYPE_WEBP );
      $info = @getimagesize( $path );

      if (empty($info)) {
          $result = false;
      } elseif (!in_array($info[2], $displayable_image_types)) {
          $result = false;
      } else {
          $result = true;
      }
  }
  return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);

//画像アップロード時の自動生成(リサイズ)停止
function stop_image_sizes( $new_sizes ) {
  unset( $new_sizes['thumbnail'] );
  unset( $new_sizes['medium'] );
  unset( $new_sizes['large'] );
  unset( $new_sizes['medium_large'] );
  unset( $new_sizes['1536x1536'] );
  unset( $new_sizes['2048x2048'] );
  //unset( $new_sizes['post-thumbnail'] );
  return $new_sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'stop_image_sizes' );
//2560px以上の画像(scaled)の自動生成を停止
add_filter( 'big_image_size_threshold', '__return_false' );


//固定ページでビジュアルエディタ非活性にするため
function visual_editor_off(){
  global $typenow;
  if( in_array( $typenow, array( 'page' ,'mw-wp-form' ) ) ){
      add_filter('user_can_richedit', 'off_visual_editor');
  }
}
function off_visual_editor(){
  return false;
}
add_action( 'load-post.php', 'visual_editor_off' );
add_action( 'load-post-new.php', 'visual_editor_off' );


//人気記事関連
function getPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count=='') {
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0 View";
  }
  return $count.' Views';
}

function setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count=='') {
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
  } else {
    $count++;
    update_post_meta($postID, $count_key, $count);
  }

}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


//ウィジェット ショートコード
add_filter('widget_text', 'do_shortcode' );


// ショートコード自作のため
function Include_my_php($params = array()) {
  extract(shortcode_atts(array(
      'file' => 'default'
  ), $params));
  ob_start();
  include(get_theme_root() . '/' . get_template() . "/include/$file.php");
  return ob_get_clean();
}
add_shortcode('myphp', 'Include_my_php');


//目次

/**
 * 目次.
 *
 * @param string $content 記事の内容.
 * @return string $content 目次追加後の内容.
 */
function add_index( $content ) {
	if ( is_single() ) {
		$pattern = '/<h[1-4]>(.+?)<\/h[1-4]>/s';
		preg_match_all( $pattern, $content, $elements, PREG_SET_ORDER );

		if ( count( $elements ) >= 1 ) {
			$toc          = '';
			$i            = 0;
			$currentlevel = 0;
			$id           = 'chapter-';

			foreach ( $elements as $element ) {
				$id           .= $i + 1;
				$regex         = '/' . preg_quote( $element[0], '/' ) . '/su';
				$replace_title = preg_replace( '/<(h[1-6])>(.+?)<\/(h[1-6])>/s', '<$1 id="' . $id . '">$2</$3>', $element[0], 1 );
				$content       = preg_replace( $regex, $replace_title, $content, 1 );

				if ( strpos( $element[0], '<h2' ) !== false ) {
					$level = 1;
				} elseif ( strpos( $element[0], '<h3' ) !== false ) {
					$level = 2;
				} elseif ( strpos( $element[0], '<h4' ) !== false ) {
					$level = 3;
				}

				while ( $currentlevel < $level ) {
					if ( 0 === $currentlevel ) {
						$toc .= '<ol class="p-custom_single__list__content p-custom_single__list__content-h2 js-list_content js-open">';
          } elseif($currentlevel == 1){
            $toc .= '<ol class="p-custom_single__list__content-h3">';
					} else {
						$toc .= '<ol class="p-custom_single__list__content-h4">';
					}
					$currentlevel++;
				}

				while ( $currentlevel > $level ) {
					$toc .= '</li></ol>';
					$currentlevel--;
				}


				$toc .= '<li class="p-custom_single__list__item"><a href="#' . $id . '" class="p-custom_single__list__link">' . $element[1] . '</a>';
				$i++;
				$id = 'chapter-';
			}

			// 目次の最後の項目をどの要素から作成したかによりタグの閉じ方を変更
			while ( $currentlevel > 0 ) {
				$toc .= '</li></ul>';
				$currentlevel--;
			}

			$index = '<div class="p-custom_single__list" id="toc"><div class="p-custom_single__list__title"><span>目次</span><span class="js-list_button">［非表示］</span></div>' . $toc . '</div>';
			$h2    = '/<h2.*?>/i';

			if ( preg_match( $h2, $content, $h2s ) ) {
				$content = preg_replace( $h2, $index . $h2s[0], $content, 1 );
			}
		}
	}
	return $content;
}
add_filter( 'the_content', 'add_index' );


//「Wordpress本体」の自動更新メール通知を停止する
add_filter('auto_core_update_send_email' , '__return_false');
// 「プラグイン」の自動更新メール通知を停止する
add_filter( 'auto_plugin_update_send_email', '__return_false' );

// 「テーマ」の自動更新メール通知を停止する
add_filter( 'auto_theme_update_send_email', '__return_false' );

// 作成したプラグインを登録
add_filter( 'mce_external_plugins', function ( $plugin_array ) {
  $plugin_array[ 'original_tinymce_button_plugin' ] = get_template_directory_uri() . '/assets/js/tinymce_quotebutton.js';
  return $plugin_array;
});
// プラグインで作ったボタンを登録
add_filter( 'mce_buttons', function ( $buttons ) {
  $buttons[] = 'insert_template';
  return $buttons;
});

/* リンクをカード形式で表示するための関数 */
function show_Linkcard($atts) {
  extract(shortcode_atts(array(
    'url'=>"",
    'title'=>"",
    'excerpt'=>""
  ),$atts));

  $post_id = url_to_postid($url); // URLから投稿IDを取得

  if (!$post_id) {
    return ''; // 投稿IDが取得できない場合は空文字を返す
  }

  $post = get_post($post_id); // 投稿オブジェクトを取得

  // タイトルと抜粋を取得
  $Link_title = get_the_title($post_id);
  $Link_excerpt = get_the_excerpt($post_id);

  // サムネイル画像を取得
  $src = get_the_post_thumbnail_url($post_id, 'thumbnail');

  // HTML出力
  $sc_Linkcard = '<a class="blogcard ex" href="'. $url .'" target="_blank" rel="noopener noreferrer">
   <div class="blogcard__image"><img src="'. $src .'" /></div>
   <div class="blogcard__content">
    <div class="blogcard__content__title">'. $Link_title .'</div>
    <div class="blogcard__content__yajirushi"><svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.097.415a.394.394 0 00-.243.364v3.152H1.126a.394.394 0 100 .788h4.728V7.87a.394.394 0 00.673.278l3.545-3.545a.394.394 0 000-.558L6.527.5a.394.394 0 00-.43-.085z" fill="#1DC18D"/></svg></div>
   </div>
  </a>';

  return $sc_Linkcard;
}
//関数利用時のフォーマット
add_shortcode("sc_Linkcard", "show_Linkcard");

// //ログインURL変更

// define( 'LOGIN_CHANGE_PAGE', 'wp-login_82946282.php' );

// if ( ! function_exists( 'login_change_init' ) ) {
//   function login_change_init() {
//     if ( !defined( 'LOGIN_CHANGE' ) || sha1( 'keyword' ) != LOGIN_CHANGE ) {
//       wp_safe_redirect( home_url() );
//       exit;
//     }
//   }
// }
// add_action( 'login_init', 'login_change_init' );


// if ( ! function_exists( 'login_change_site_url' ) ) {
//   function login_change_site_url( $url, $path, $orig_scheme, $blog_id ) {
//     if ( $path == 'wp-login.php' &&
//       ( is_user_logged_in() || strpos( $_SERVER['REQUEST_URI'], LOGIN_CHANGE_PAGE ) !== false ) )
//       $url = str_replace( 'wp-login.php', LOGIN_CHANGE_PAGE, $url );
//     return $url;
//   }
// }
// add_filter( 'site_url', 'login_change_site_url', 10, 4 );

// if ( ! function_exists( 'login_change_wp_redirect' ) ) {
//   function login_change_wp_redirect( $location, $status ) {
//     if ( strpos( $_SERVER['REQUEST_URI'], LOGIN_CHANGE_PAGE ) !== false )
//       $location = str_replace( 'wp-login.php', LOGIN_CHANGE_PAGE, $location );
//     return $location;
//   }
// }
// add_filter( 'wp_redirect', 'login_change_wp_redirect', 10, 2 );


//カスタム投稿 タクソノミー設定時にブログへ自動的に当てはめる
function add_defaultcategory_automatically_line($post_ID) {
  global $wpdb;
  $curTerm = wp_get_object_terms($post_ID, 'line_cat');
  if (0 == count($curTerm)) {
    $defaultTerm = array(3);
    wp_set_object_terms($post_ID, $defaultTerm, 'line_cat');
  }
}
add_action('publish_line', 'add_defaultcategory_automatically_line');

function add_defaultcategory_automatically_advertise($post_ID) {
  global $wpdb;
  $curTerm = wp_get_object_terms($post_ID, 'advertise_cat');
  if (0 == count($curTerm)) {
    $defaultTerm = array(5);
    wp_set_object_terms($post_ID, $defaultTerm, 'advertise_cat');
  }
}
add_action('publish_advertise', 'add_defaultcategory_automatically_advertise');

function add_defaultcategory_automatically_consulting($post_ID) {
  global $wpdb;
  $curTerm = wp_get_object_terms($post_ID, 'consulting_cat');
  if (0 == count($curTerm)) {
    $defaultTerm = array(11);
    wp_set_object_terms($post_ID, $defaultTerm, 'consulting_cat');
  }
}
add_action('publish_consulting', 'add_defaultcategory_automatically_consulting');

function add_defaultcategory_automatically_creative($post_ID) {
  global $wpdb;
  $curTerm = wp_get_object_terms($post_ID, 'creative_cat');
  if (0 == count($curTerm)) {
    $defaultTerm = array(7);
    wp_set_object_terms($post_ID, $defaultTerm, 'creative_cat');
  }
}
add_action('publish_creative', 'add_defaultcategory_automatically_creative');

function add_defaultcategory_automatically_media($post_ID) {
  global $wpdb;
  $curTerm = wp_get_object_terms($post_ID, 'media_cat');
  if (0 == count($curTerm)) {
    $defaultTerm = array(9);
    wp_set_object_terms($post_ID, $defaultTerm, 'media_cat');
  }
}
add_action('publish_media', 'add_defaultcategory_automatically_media');



function my_tiny_mce_before_init( $init_array ) {
  $init_array['valid_elements']          = '*[*]';
  $init_array['extended_valid_elements'] = '*[*]';

  return $init_array;
}
add_filter( 'tiny_mce_before_init' , 'my_tiny_mce_before_init' );


?>