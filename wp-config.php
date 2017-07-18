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
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'shinbun_wp');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'dbuser');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'takahisa86');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

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
 define('AUTH_KEY',         'V9Mg98Bs%ZK:NteKj C`8ly$0H2%Drmlc-pp3lF)FW}i3-w7o3o}#&m|_JsS2t8P');
 define('SECURE_AUTH_KEY',  'MBm#CJgKVaBLI.`4QV5+R]0Q_8/nn*Kdc=[9yQ-RcuN&L+3hcTrlOVXSt5b`te.7');
 define('LOGGED_IN_KEY',    '@+z&oHi?>YCPMVaUrA(4+IYc(YoMA>2E-*3Zoh*o$J+aT1Sm-*s$DJ-0+WlV$4^9');
 define('NONCE_KEY',        '|?;z[?E4|$&{/}Nd6AJ/z{q)$lTD;jH]U&% RV:wq4[mEu[>,|r$55M[qd|Wjei2');
 define('AUTH_SALT',        '[k>-i$?/A;}a>;G9knLrW-_`OA7+ ,2jj7jF#F3DG~WgH~dqKW{2$YgcrZPf=!n.');
 define('SECURE_AUTH_SALT', 'a.e%0|^45g/_?PD|GC-xbfeV#(VX-)!Mg>6}+Y+ Tu$n|w&{SDUt~3!Lk;0g}lE}');
 define('LOGGED_IN_SALT',   '^sH_+-}mr,SBZdE<+JibHN0[($/@0ZOr&[zv0NCVhE:qlr)-/Z& =_)PAa<oI,Q8');
 define('NONCE_SALT',       'NE%Xs=7Dh))Xe[%C^)&r2-<+e$qobY-FZNQ>Jwf/z0nu{6bme!AL&Pp &@%4M-TU');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

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
