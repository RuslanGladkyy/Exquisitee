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
define('DB_NAME', 'exquisitee');

/** Имя пользователя MySQL */
define('DB_USER', 'mysql');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'mysql');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'G({&f=PDU@o%LuLsnc.*a*T,$;}XF5d.8QQ)`Hl.J_r2_Ix*.&mX%i90z|fa5-1P');
define('SECURE_AUTH_KEY',  ')iA}f&Db|3ed*Ivcp4hpMb-]z]/KH`(aMNlOtw0m?Z7Yx<D?p^3Z*zE1; s_H;f#');
define('LOGGED_IN_KEY',    '[X,9|Yt!di-qe2Kek/YlXXS|7Do]~nO<xG_X}03qWVU`rI]p|dL,Sw$,7#`sh0k{');
define('NONCE_KEY',        'PDvhT]XMp!$&4QT4zSCQlp!Cy.r/~i|  kQaXCs;3m/M$c YhF*CAG(x7LeUt&a8');
define('AUTH_SALT',        ',Y}D4#a8J9K47_:4CNT[,sW0x*-SK[ocjRz8&:cF_QzRr>Zs$Ys{ecux33dv3D@G');
define('SECURE_AUTH_SALT', 'p2^_%.YA?%0jJ}gLv&3GWDVBGc*m]3{A{A1,m|H}u)T^Gg{|=8Di4.Q}]+aQZ]9>');
define('LOGGED_IN_SALT',   'Wg5Vn+yI[Jy~vogm|Dv}[TQwA>?D`%,8K.lMmcVGybKFq!CC9/H+4VHrmu&Wt)Bv');
define('NONCE_SALT',       '~|e|P*R)!32nm^(:9bfnU95q#h/X,1X Xf~)3j:D{1<Y[j;-2~5 ^hRT, 5E1(~>');

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
