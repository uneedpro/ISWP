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
define('DB_NAME', 'beast');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Root5045');

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
define('AUTH_KEY',         'Ag:i8Lc8VR^6Ltre-8Q$*b2(V^M2n9+Kv@>[ElK>Yr|EbC~Q$`)VAw|?tno;*^i^');
define('SECURE_AUTH_KEY',  'W6h%8*b&~mp@+R_4>p/oN+qn%( 0b2VF&QWOa}G-y=NUYcFh_DG--A|tk*SduWY6');
define('LOGGED_IN_KEY',    'RH?ew:N|=2Vza8)PEfNLl.W[A^d;YEbAP$^LR]sr|K8~Qw,^7t=pqGj->n3oe,Cc');
define('NONCE_KEY',        '[WYJ[ fV+%%i;ej1jREQim|-VYvm@ZT$[#z#Q}DD|#hP|6F+qg4LxDDuZVj(8vVm');
define('AUTH_SALT',        'hq6+=IYYBO>=g{{-#DT+W2;ec9ee(V$z{;Dq3mHHZQ@p;y7iQb6fBHp-o5zNk()3');
define('SECURE_AUTH_SALT', ')gjQmd`n-dVo)T%:2/R(+LAmAIwKh[QfQ;Mn]1]<lFaFc21=d?cAp*Jfr}8<R4XM');
define('LOGGED_IN_SALT',   '^|w9ubccU}qyq${g<72*!+xnbr+RHi7h;FEh?  ;]7it_J6?)o|U]m(DM6pbr!m!');
define('NONCE_SALT',       '%dvD1j!~U]Lsj<}(3qo[q)|)!hN=$/5E7aGtaZAV8Eu<4wF,e7&7sG(pzif6t3+7');

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
define('WPLANG', 'ru_RU');

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
