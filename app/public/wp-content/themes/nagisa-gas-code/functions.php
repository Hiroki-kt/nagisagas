<?php
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type('news',
    array(
      'label' => 'お知らせ',
      'description' => '',
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => true,
      'query_var' => false,
      'has_archive' => true,
      'exclude_from_search' => false,
      'menu_position' => 20,
      'supports' => array('title','editor','revisions','thumbnail','page-attributes'),
      'taxonomies' => array('blog_cat'),
      'labels' => array (
        'name' => 'お知らせ',
        'all_items' => 'お知らせ一覧'
      )
    )
  );

   register_post_type('product',
    array(
      'label' => '取扱い製品',
      'description' => '',
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => true,
      'query_var' => false,
      'has_archive' => true,
      'exclude_from_search' => false,
      'menu_position' => 20,
      'supports' => array('title','editor','revisions','thumbnail','page-attributes'),
      'taxonomies' => array('product_cat'),
      'labels' => array (
        'name' => '取扱い製品',
        'all_items' => '取扱い製品一覧'
      )
    )
  );

  register_post_type('works',
    array(
      'label' => '施工実績',
      'description' => '',
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => true,
      'query_var' => false,
      'has_archive' => true,
      'exclude_from_search' => false,
      'menu_position' => 20,
      'supports' => array('title','editor','revisions','thumbnail','page-attributes'),
      'labels' => array (
        'name' => '施工実績',
        'all_items' => '施工実績一覧'
      )
    )
  );
  register_taxonomy(
    'product_cat',
    'product',
    array(
      'hierarchical' => true,
      'label' => '取扱い製品カテゴリ',
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'product'),
      'singular_label' => '取扱い製品カテゴリ'
    )
  );
}
//数字を漢数字に変換

// メニュー非表示
function remove_menu() {
	   global $current_user;
 get_currentuserinfo();
 if($current_user->user_login=="nagisa-gas-user"){
  remove_menu_page('plugins.php'); // プラグイン
  remove_menu_page('tools.php'); // ツール
  remove_menu_page('options-general.php'); // 設定
  remove_menu_page('themes.php'); // 外観
  remove_menu_page('edit.php?post_type=page'); // 固定ページ
	 remove_menu_page('edit.php?post_type=product'); // 取扱製品
remove_menu_page('edit.php?post_type=works'); // 施工実績

 }
  //remove_menu_page('index.php'); // ダッシュボード
  remove_menu_page('edit.php'); // 投稿
  //remove_menu_page('upload.php'); // メディア
  remove_menu_page('link-manager.php'); // リンク
  //remove_menu_page('edit.php?post_type=page'); // 固定ページ
  remove_menu_page('edit-comments.php'); // コメント
  //remove_menu_page('themes.php'); // 外観
  //remove_menu_page('plugins.php'); // プラグイン
  //remove_menu_page('users.php'); // ユーザー
  //remove_menu_page('tools.php'); // ツール
  //remove_menu_page('options-general.php'); // 設定
}
add_action('admin_menu', 'remove_menu');

// オートセーブ無効
// function disable_autosave() {
//   wp_deregister_script('autosave');
// }
// add_action('wp_print_scripts','disable_autosave');

// リライトルール
add_filter('author_rewrite_rules', '__return_empty_array');
add_filter('date_rewrite_rules', '__return_empty_array');
add_filter('comments_rewrite_rules', '__return_empty_array');

// 全ての「?ver=」の削除
function vc_remove_wp_ver_css_js($src) {
  if (strpos($src, 'ver='))
    $src = remove_query_arg('ver', $src);
  return $src;
}
add_filter('style_loader_src', 'vc_remove_wp_ver_css_js', 9999);
add_filter('script_loader_src', 'vc_remove_wp_ver_css_js', 9999);

// 不要なタグの削除
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'feed_links_extra', 3);

// canonical urlの削除
remove_action('wp_head', 'rel_canonical');

// 絵文字削除
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// バージョン更新の非表示
//add_filter('pre_site_transient_update_core', '__return_zero');

// APIによるバージョンチェックの通信をさせない
//remove_action('wp_version_check', 'wp_version_check');
//remove_action('admin_init', '_maybe_update_core');

// Wordpressのアップデート通知を非表示
//add_filter('pre_site_transient_update_core', create_function('$a', "return  null;"));

// テーマの更新通知を非表示
//remove_action('load-update-core.php', 'wp_update_themes');
//add_filter('pre_site_transient_update_themes', create_function('$a', "return null;"));

// プラグイン更新通知を非表示
//remove_action('load-update-core.php', 'wp_update_plugins');
//add_filter('pre_site_transient_update_plugins', create_function('$a', "return null;"));

// カスタムメニュー
register_nav_menus(array(
  'navi' => 'グローバルナビゲーション'
));

// カスタムメニューのカスタマイズ
function my_css_attributes_filter($var) {
  return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);

// 管理バーにログアウトを追加
function add_new_item_in_admin_bar() {
  global $wp_admin_bar;
  $wp_admin_bar -> add_menu(array(
    'id' => 'new_item_in_admin_bar',
    'title' => __('ログアウト'),
    'href' => wp_logout_url()
  ));
}
add_action('wp_before_admin_bar_render', 'add_new_item_in_admin_bar');

// ログイン画面ロゴ変更
function custom_login_logo() { ?>
  <style>
  .login #login h1 a {
    width: 140px;
    height: 140px;
    background: url(<?php echo get_stylesheet_directory_uri(); ?>/Images/common/login_logo.png) no-repeat 0 0;
  }
  </style>
<?php }
// add_action('login_enqueue_scripts', 'custom_login_logo');

// ダッシュボードのフッターリンクの改編
function custom_admin_footer() {
  echo '<a href="#"></a>';
}
// add_filter('admin_footer_text', 'custom_admin_footer');

// コンテンツ幅の設定
// if (!isset($content_width)) {
//     $content_width = 820;
// }

// アイキャッチ画像の設定
add_theme_support('post-thumbnails');
// add_theme_support('post-thumbnails', array('post'));
// add_theme_support('post-thumbnails', array('page'));
// set_post_thumbnail_size(300, 300, true);
add_image_size('news_thumb', 299, 200, true);
add_image_size('thum2', 75, 75, true);

// ブログ記事の抜粋表示
function new_excerpt($length) {
  global $post;
      $content =strip_tags($post -> post_content);
    if(mb_strlen($content)>=$length){
  $content = mb_substr($content, 0, $length );
  $content = $content . '...';
    }
  return $content;
}
add_filter('excerpt_length', 'new_excerpt');


//投稿の1つ目の画像をサムネイルに
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+(jpg|jpeg|png)+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)) {
    $first_img = home_url()."/Image/common/noimage.jpg";
  }
  return $first_img;
}

// ダッシュボードの概要のカスタム投稿タイプの投稿件数を表示
function mytheme_dashboard_glance_items( $elements ) {
foreach ( array(
'property', 'works', 'voice', 'topics'
) as $post_type ) {
  $num_posts = wp_count_posts( $post_type );
  if ( $num_posts && $num_posts->publish ) {
      $post_type_object = get_post_type_object($post_type);
      $post_type_label = $post_type_object->label;
      $text = number_format_i18n( $num_posts->publish ).'件の '.$post_type_label.'の投稿';
      $elements[] = sprintf( '<a href="edit.php?post_type=%1$s" class="%1$s-count">%2$s</a>', $post_type, $text );
  }
}
return $elements;
}
add_filter( 'dashboard_glance_items', 'mytheme_dashboard_glance_items' );

// タイトル未入力時にアラート
function my_title_required() {
?>
<script type="text/javascript">
  jQuery(document).ready(function($){
    if('property' || 'works' || 'voice' || 'topics' == $('#post_type').val()){
      $("#post").submit(function(e){
        if('' == $('#title').val()) {
          alert('タイトルを入力してください');
          $('#ajax-loading').css('visibility', 'hidden');
          $('#publish').removeClass('button-primary-disabled');
          $('#title').focus();
          return false;
        }
      });
    }
  });
</script>
<?php
}
add_action( 'admin_head-post-new.php', 'my_title_required' );
add_action( 'admin_head-post.php', 'my_title_required' );

// カスタム投稿タイプの編集・投稿画面に作成者メタボックスを表示する
// function myplugin_add_custom_box()
// {
//   if (function_exists('add_meta_box')) {
//     add_meta_box('myplugin_sectionid', __('作成者', 'myplugin_textdomain'), 'post_author_meta_box', 'works', 'advanced');
//   }
// }
// add_action('admin_menu', 'myplugin_add_custom_box');


add_action('admin_print_footer_scripts', 'limit_category_select1');

// 新着カテゴリを1つのみにする
function limit_category_select2() {
?>
  <script type="text/javascript">
    jQuery(function($) {
      // 投稿画面のカテゴリー選択を制限
      var cat_checklist = $('#topics_catchecklist input[type=checkbox]');
      cat_checklist.click( function() {
          $(this).parents('#topics_catchecklist').find('input[type=checkbox]').attr('checked', false);
          $(this).attr('checked', true);
      });

      // クイック編集のカテゴリー選択を制限
      var quickedit_cat_checklist = $('.cat-checklist.topics_cat-checklist input[type=checkbox]');
      quickedit_cat_checklist.click( function() {
          $(this).parents('.cat-checklist.topics_cat-checklist').find('input[type=checkbox]').attr('checked', false);
          $(this).attr('checked', true);
      });

      $('#topics_catchecklist>li:first-child, .cat-checklist.topics_cat-checklist>li:first-child').before('<p style="padding-top:5px;">カテゴリーは1つしか選択できません</p>');
    });
  </script>
  <?php
}
add_action('admin_print_footer_scripts', 'limit_category_select2');

//管理画面のカスタム投稿一覧にカテゴリ（物件カテゴリ）
function add_posts_columns1($columns1) {
  $columns1['property_cat'] = '物件カテゴリ'; //カスタム分類（カテゴリ）のスラッグ
  return $columns1;
}
function add_posts_columns_list1($column_name1, $post_id) {
  if ( 'property_cat' == $column_name1 ) {
    $terms = $terms = get_the_terms( $id, 'property_cat' );
    $cnt = 0;
    foreach((array)$terms as $var) {
      echo $cnt != 0 ? ", " : "";
      echo "" . $var->name . "";
      ++$cnt;
    }
  }
}
add_filter( 'manage_edit-property_columns', 'add_posts_columns1' );
add_action( 'manage_property_posts_custom_column', 'add_posts_columns_list1', 10, 2 );

//管理画面のカスタム投稿一覧にカテゴリ（新着カテゴリ）
function add_posts_columns2($columns2) {
  $columns2['topics_cat'] = '新着カテゴリ'; //カスタム分類（カテゴリ）のスラッグ
  return $columns2;
}
function add_posts_columns_list2($column_name2, $post_id) {
  if ( 'topics_cat' == $column_name2 ) {
    $terms = $terms = get_the_terms( $id, 'topics_cat' );
    $cnt = 0;
    foreach((array)$terms as $var) {
      echo $cnt != 0 ? ", " : "";
      echo "" . $var->name . "";
      ++$cnt;
    }
  }
}
add_filter( 'manage_edit-topics_columns', 'add_posts_columns2' );
add_action( 'manage_topics_posts_custom_column', 'add_posts_columns_list2', 10, 2 );

//固定ページ内にphpファイルをインクルード
function Include_my_php($params = array()) {
  extract(shortcode_atts(array(
    'file' => 'default'
  ), $params));
  ob_start();
  include(get_theme_root() . '/' . get_template() . "/$file.php");
  return ob_get_clean();
}
add_shortcode('myphp', 'Include_my_php');


/* ページネーション */
function pagination($pages = '', $range = 3)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo "<div class=\"pager\"><span class=\"pages\">".$paged."/".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; 最初</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; 前へ</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">次へ &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>最後 &raquo;</a>";
         echo "</div>\n";
     }
}
//現在のURLを取得
function print_current_uri() {
	$protocol = is_ssl() ? 'https' : 'http';
	$uri = $protocol . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
	echo $uri;
}



// MW WP FORM
function my_error_message( $error, $key, $rule ) {
  if ( $key === 'contact_type' && $rule === 'required' ) {
    return 'お問い合わせ種別を最低１つ選択してください。';
  } elseif ( $key === 'inquiry_content' && $rule === 'noEmpty' ) {
    return 'ご相談内容をご入力ください。';
  } elseif ( $key === 'yourname' && $rule === 'noEmpty' ) {
    return 'お名前をご入力ください。';
  } elseif ( $key === 'yourkana' && $rule === 'noEmpty' ) {
    return 'フリガナをご入力ください。';
  } elseif ( $key === 'email' && $rule === 'noEmpty' ) {
    return 'メールアドレスをご入力ください。';
  } elseif ( $key === 'phonenumber' && $rule === 'noEmpty' ) {
    return '電話番号をご入力ください。';
  } elseif ( $key === 'inquiry_process' && $rule === 'required' ) {
    return '連絡方法を選択してください。';
  } elseif ( $rule === 'filesize' ) {
    return 'ファイルサイズは５MB以下にして下さい。';
  }
  return $error;
}
add_filter( 'mwform_error_message_mw-wp-form-333', 'my_error_message', 10, 3 );

// Read css file
function twpp_enqueue_styles() {
  wp_enqueue_style(
    'aos-style',
    get_template_directory_uri() . '/assets/css/aos.css'
  );
  wp_enqueue_style(
    'base-style',
    get_template_directory_uri() . '/assets/css/base.css'
  );
  wp_enqueue_style(
    'common-style',
    get_template_directory_uri() . '/assets/css/common.css'
  );
  wp_enqueue_style(
    'drawer-style',
    get_template_directory_uri() . '/assets/css/drawer.css'
  );
  wp_enqueue_style(
    'page-style',
    get_template_directory_uri() . '/assets/css/page.css'
  );
  wp_enqueue_style(
    'reset-style',
    get_template_directory_uri() . '/assets/css/reset.css'
  );
  wp_enqueue_style(
    'sp-style',
    get_template_directory_uri() . '/assets/css/sp.css'
  );
  wp_enqueue_style(
    'style-min-style',
    get_template_directory_uri() . '/assets/css/style.min.css'
  );
}
add_action( 'wp_enqueue_scripts', 'twpp_enqueue_styles' );
