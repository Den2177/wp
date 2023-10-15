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
 * * Настройки базы данных
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
define( 'DB_NAME', 'wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'test' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'secret' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '.2 @z *HDo|;G*!,stKw{SWh/5%7*&9J-~m!HcJHu936$u9|)v!,BP&R+o8GKe,y' );
define( 'SECURE_AUTH_KEY',  '<Rry`*VN|3*[X%Cs_.HapGLxKb^}~f8gyol?zVOjX$?_}I2n#d&bYZ1$4sXCq&rP' );
define( 'LOGGED_IN_KEY',    's2&W=@Gi5PSs0`zP6=qrU8DU.X^}NxuIExP~YPF^$&^h<_#LqtO}z^YfEt|&$T~G' );
define( 'NONCE_KEY',        'b_LG|XZ(a9B63;VsI%:fl.aFR>t/aSrag$[U}31QG];vfhx- xX[roS{&R,4{lng' );
define( 'AUTH_SALT',        'Zcp=b7..*s AXmhmYj /hC3s6dG$JUWy`lt/+|{:<,}`7z;YM[1=H2.H+O*O228 ' );
define( 'SECURE_AUTH_SALT', '1r*CaDht9BGBX/J&h(END=%[*UM,j$H`XZ/@Wj;=L{BD28h.kU4j]Lc]Ui)/=O@x' );
define( 'LOGGED_IN_SALT',   'CiV.B{KOO,wD6Y<5sIY2sfBBItTf%|AcKsv*c7O7=Mpq5(</R|A3Lty4G;Dz1Dcy' );
define( 'NONCE_SALT',       '|?w-ix}X`=QmS LQ6:pQjhc;iN*KvSP`)*1owdI`% RZR5EH[YPlS!I;&_J.xdrK' );

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
