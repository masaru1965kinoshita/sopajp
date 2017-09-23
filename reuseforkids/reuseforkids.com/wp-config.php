<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'sopajp');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'sopajp');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'S0P4dotJP');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.+T@;hiGP2KQ,Fd?!)8eR(Jb_Z$+5|z{ cv<TgM5n^)!bBRc21~YLZ-U:UEm}n@U');
define('SECURE_AUTH_KEY',  '-OYR0[4s&3RAa?@t$/R] &t{ouFZM{,*JiSWQY}z0&7-m!bMA$xH{zA[Z8hS_P|x');
define('LOGGED_IN_KEY',    '66RV[l8$Fm,pc~xSlAm*dzHJgeRu(LQ3fMHONna@J]DFo4^VCr0[<:v%QpT+}]Sw');
define('NONCE_KEY',        '{,Pri=Npzq}O~1*wP.?Xqn>merE||PMy=f*f)(ELIuYjw&vw@ri2u:P[0]K[7-0q');
define('AUTH_SALT',        'j&pb(X VQz(QUG*Pcl9-*0*(`_-Lk/#3`~,&5-[R-=7 k[~vXo@I-4?oq#VRXpEd');
define('SECURE_AUTH_SALT', 'H;#?BG?E+9rCx1fK-;RHMqC.(rC:Xg-~5,*yZV8+jAC&S.OjZ69D62eJV-o)nH%)');
define('LOGGED_IN_SALT',   '/B+Mm)&:psqe%-6}OC?Kr-8++cFS3(MSU9~n]i)ddo&ql-Ur)cV3a,YJ*{kf2&lB');
define('NONCE_SALT',       'sIfyS2BH+@<]Aubd(`z7&h5PzZ;hlvLM!KTzl!]e41u;lHls_d>~Jz|^_].80@++');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'rfk_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
