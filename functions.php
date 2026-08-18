<?php
/**
 * Vite + WordPress 用のアセット読み込み
 */

/**
 * manifest からファイルURLを取得
 */
function vite_asset($entry) {
    $manifest_path = get_template_directory() . '/dist/.vite/manifest.json';
    if (!file_exists($manifest_path)) return null;

    $manifest = json_decode(file_get_contents($manifest_path), true);
    if (!isset($manifest[$entry])) return null;

    return get_template_directory_uri() . '/dist/' . $manifest[$entry]['file'];
}

/**
 * アセット読み込み
 */
function enqueue_vite_assets() {
    $entry = 'main.js'; // Vite の入力エントリに合わせる

    if (true) {
        // 開発環境 → Vite Dev サーバーから直接読み込み（HMR対応）
        wp_enqueue_script(
            'vite-dev',
            'http://localhost:5173/main.js',
            [],
            null,
            true
        );
    } else {
        // 本番環境 → manifest を1回だけ読み込む
        $manifest_path = get_template_directory() . '/dist/.vite/manifest.json';
        if (!file_exists($manifest_path)) return;

        $manifest = json_decode(file_get_contents($manifest_path), true);
        if (!isset($manifest[$entry])) return;

        // CSS 読み込み
        if (isset($manifest[$entry]['css'])) {
            foreach ($manifest[$entry]['css'] as $css) {
                wp_enqueue_style(
                    'vite-style-' . basename($css),
                    get_template_directory_uri() . '/dist/' . $css,
                    [],
                    null
                );
            }
        }

        // JS 読み込み
        wp_enqueue_script(
            'vite-script',
            get_template_directory_uri() . '/dist/' . $manifest[$entry]['file'],
            [],
            null,
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'enqueue_vite_assets');

add_filter('script_loader_tag', function($tag, $handle, $src) {
    if ($handle === 'vite-dev') {
        return '<script type="module" src="' . esc_url($src) . '"></script>';
    }
    return $tag;
}, 10, 3);

/************************* 
 * テーマURLショートコード
*************************/

// サイトURLを返すショートコード [homeurl]
function shortcode_home_url() {
    return esc_url( home_url() );
}
add_shortcode('homeurl', 'shortcode_home_url');

// 親テーマURLを返すショートコード [tempurl]
function shortcode_parent_theme_url() {
return esc_url( get_template_directory_uri() );
}
add_shortcode('tempurl', 'shortcode_parent_theme_url');

// 子テーマ（もしくは現在のテーマ）URLを返すショートコード [childurl]
function shortcode_child_theme_url() {
return esc_url( get_stylesheet_directory_uri() );
}
add_shortcode('childurl', 'shortcode_child_theme_url');

// phpファイル用_ショートコード [homeurl] のショートハンド関数
function homeurl() {
echo do_shortcode('[homeurl]');
}

// phpファイル用_ショートコード [tempurl] のショートハンド関数
function tempurl() {
echo do_shortcode('[tempurl]');
}

// phpファイル用_ショートコード [childurl] のショートハンド関数
function childurl() {
echo do_shortcode('[childurl]');
}

/*********************************  
 * Instagramフィード用 REST API作成 
***********************************/
add_action('rest_api_init', function () {

	register_rest_route('custom/v1', '/instagram', [
		'methods'  => 'GET',
		'callback' => 'get_instagram_posts','permission_callback' => '__return_true',
	]);

});

function get_instagram_posts() {

	$cache = get_transient('instagram_posts');

	if (false !== $cache) {
		return $cache;
	}

    /*
    * NOTE:
    * 開発中のため一時的にtoken直書き
    * 本番前にwp-config.phpへ移動すること
    */

    $token = FACEBOOK_ACCESS_TOKEN;

	$url = 'https://graph.facebook.com/v23.0/17841417832453627/media?fields=id,media_type,media_url,permalink,timestamp&access_token=' . $token;

	$response = wp_remote_get($url);

	if (is_wp_error($response)) {
		return new WP_Error(
			'instagram_error',
			'Instagram API error',
			['status' => 500]
		);
	}

	$body = json_decode(
		wp_remote_retrieve_body($response),
		true
	);

	set_transient(
		'instagram_posts',
		$body,
		HOUR_IN_SECONDS
	);

	return $body;
}
/*
★TODO

tokenをwp-config.php へ移動

・wp-config.phpに追記　
define(
	'INSTAGRAM_ACCESS_TOKEN',
	'xxxxx'
);

・functions.php を下記に変更

$token = INSTAGRAM_ACCESS_TOKEN;
*/