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
define( 'DB_NAME', 'mermer' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^D#7Dv;lILA8-Uv;eBXAoLv^>1q#nFI*@t&uO*cw+ON}q07b4M(MExkSe#y`R4EG' );
define( 'SECURE_AUTH_KEY',  '^AX1Y47{vwp)T)mO_YXtAe?Ic3|n&1bd1?r~%Y--` D3JP_S.2{h3leQ2Di+j}xZ' );
define( 'LOGGED_IN_KEY',    ')JK*s(;3|):dw[21qA7R$DsyO4%- Kv={tlX m[v12XQ(erdtal_RV-2`-rZD$u7' );
define( 'NONCE_KEY',        'JNK(Cn7DO`D-Je%adn3||LM?9quZWF}5 e`5FG+=;:It8dXEZA8|.$yV[%CDk5/?' );
define( 'AUTH_SALT',        '(^e$H{Uz&dHDL6yt7CP[a{D0%fsGJP+p[,Vz `eBR.Kn^S6~ues4:Qour>s?Gyee' );
define( 'SECURE_AUTH_SALT', 'Y*(Yww<c#02Q0,nNVveLTILCX_Re]c2rB8d-1NkKU*SXsbyIGiV)-YtRaU_~.7uJ' );
define( 'LOGGED_IN_SALT',   '3mBeK[7SIG,jc6|o_6zNErDfL>2(`U%J]4*wu4TKpc#`xB:DlTK)D`6<VCbe}5(O' );
define( 'NONCE_SALT',       'R]y`Igc,E=#Gf|iK3V<xrzj0q?/TbyG4s,#^5}_V$7Q$6?{Lv<m^j|SR+IBO&`/7' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_mrmr_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
