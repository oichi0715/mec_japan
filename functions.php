
<?php
function my_theme_enqueue_items()
{

    wp_enqueue_style('main-design', get_template_directory_uri() . '/css/style.css');

    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

    // SwiperのCSS　スライドショー
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');

    // SwiperのJS　スライドショー
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0', true);

    // JS
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_items');



/* --------------------------------------------------
   カスタムフィールドでeventscheduleをカスタムフィールドで更新するときにブロックエディターがあると見にくいのでそれを批評うじにする設定　
   -------------------------------------------------- */
function my_hide_editor_for_schedule()
{
    // 1. 今開いているページのIDを取得
    $post_id = $_GET['post'] ?? $_POST['post_ID'] ?? null;
    if (!isset($post_id)) return;

    // 2. そのページが使っているテンプレートファイル名を取得
    $template_file = get_post_meta($post_id, '_wp_page_template', true);

    // 3. もし「page-eventschedule.php」なら、エディタ機能を削除！
    if ($template_file == 'page-eventschedule.php') {
        remove_post_type_support('page', 'editor');
    }
}
// 管理画面を開いたタイミングで実行
add_action('admin_init', 'my_hide_editor_for_schedule');




// メニュー画面を追加する。これをしないとサブメニューが表示されない
function my_theme_setup()
{
    // メニュー機能を有効化
    register_nav_menus(array(
        'main-menu' => 'ヘッダーメニュー',
    ));
}
add_action('after_setup_theme', 'my_theme_setup');
