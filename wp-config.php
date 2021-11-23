<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'gl' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'gl' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'gl' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_[?O/N4/qDS+r9vf5^9l6L2TD2$dX?{yC6H1=|tK{|7zdIMW+HH(#e.AhM+tBm+Y');
define('SECURE_AUTH_KEY',  'V1RC1`i/{/>_hTvu{*@jNXkKO{#5$jK3MIz[4M_)E8d0q8CC:w8zoLy)_XV2+oKp');
define('LOGGED_IN_KEY',    ';Fk/wyJzS44= fQDh+o)pkV/Z>9C/0}|Ke*E0yUpb0qR(_)M<cDRb?a[q@w)?9+*');
define('NONCE_KEY',        'X rw&TSUJ4d<||eXBDF.pcT-Y,1n+v!Yo<w0%^bF/9KC&n:p_T|S4qE[Xm}AHeY6');
define('AUTH_SALT',        'EQ>Q$/bQPeWMhypL/Z5h$C7]21V2|>.gG}rR0+Ptf?XHjVFq-+[oG|]~k>#fl8#0');
define('SECURE_AUTH_SALT', '2z_,YIRoDMA+CP,(,Qz|hiIhjW?Tmwy|<9c5i/e -ehcOrc?C- ]OodV9|l&m~A?');
define('LOGGED_IN_SALT',   'NpXW$P.%}d[t<$1QVCB|mv0<p3CMfd};C2H`T5.lQ+qQ|4I_Kux+S2-I{1A73}hm');
define('NONCE_SALT',       '+cDn=ajXLG[b*i=5< ni!h&udV`m?K~R.tAiGw<v<zp2T+.mm>aL|bv|6Cj?Ul{+');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
