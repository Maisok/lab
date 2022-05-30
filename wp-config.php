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

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'lab' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'lab' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '1' );

/** Имя сервера базы данных */
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
define('AUTH_KEY',         'wHwy9GTPvqsXq:~*4$U 2i3T=N^(Gz(MpT3:smG|m~^(A E=8>pnJ?`r-z-{?X3z');
	define('SECURE_AUTH_KEY',  'se{sV3z@>$I8AEA,V16nw[Ya?!.#G-o1)!(AD[gehH8@F.fM2Rcl-P]nS)E,l&Pp');
	define('LOGGED_IN_KEY',    '>bh.e^Z{I-nbIyMqasO:5]i{VU@LAsTP F)|E|-^)NH@3|D?QVp!&2NE]^fUr7yi');
	define('NONCE_KEY',        'mxxt_e29?d(=*>}6C+[-k]D*yl:Iz^gRD2%i&}/=|!Bq%;ys=B|-ZAN,wCJTslB+');
	define('AUTH_SALT',        'jwL}:yLwgbJizqQ2|+o**6^b`x2_<F5uTok!M..cq<?#NI-gk^JgS=jU;vFuhAdE');
	define('SECURE_AUTH_SALT', '5C4S>JFZVr|o$ hP47nNvZ4Ypn$}R?wBym6[K[xtPER&E*pEEr$l,*i&+>UKC.p*');
	define('LOGGED_IN_SALT',   '{#iT1*]e4{0-?oS;+A[|Ynkd#`eq!]3@9PfoM%-%7wAkp{@)$/cBQU0kCx>Wt(b_');
	define('NONCE_SALT',       'Ktbg3Okehi0f+eL;z?U/R!5~t;HQvUKg7HOzN1f(d.{!0%mm5MLt8$bOVIE+d_R~');

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
