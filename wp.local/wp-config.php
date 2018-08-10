<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'SeGa');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'bdoZY3');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|`R%%!FQeW,oj2N`4#<41CXpY70zu0Qj1veu({cvtyEZk*9xf7cVSWqKG_AJED*z');
define('SECURE_AUTH_KEY',  'eho4#lQ|ZFc:1l`8+CtmIaD87</O3YS_;4e/+tMy2:%*[1 xFL7^6aQ-meCzo2:d');
define('LOGGED_IN_KEY',    'ABt(8*cdMest,GRQz)X2t0Pkr%lr$Q+?`jf?S*D&I`Eh]S9GC1n.nuwLV#o0r6E?');
define('NONCE_KEY',        'sv!<E;uQk#}iG#e=BpP;bEk}f;@];=,}z;JGm<v7.?8u7{Bj?v4woyP@zZ59MIV1');
define('AUTH_SALT',        'Q<P<6bn(q/;Ra&Z~_P TU4dDHb0f~Ek,q;b82sPUk-?EYF^z9bH=oTBm:aeDoju[');
define('SECURE_AUTH_SALT', '4JSGGR9P;OIo6B4x[7uZyOYoY)<r6B$Q,>QS94KHg%HQ.PHTV9f#>o/6Xjwt:I1^');
define('LOGGED_IN_SALT',   '-^=+Ba~^T]+O?Gxg.-P{(K;hUCWps7X0uPP54c7!j71JB{[wUdAQe`$T({;5 p0t');
define('NONCE_SALT',       'cAyMbhE ]DCHg9jqH$`<xN41qu{7ci|q40)<$Z?5m`rd/2rb&%Kpi*MoOH70^}Gg');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
