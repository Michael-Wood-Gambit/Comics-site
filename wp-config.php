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
define( 'DB_NAME', 'shop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'Solo5789' );

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
define( 'AUTH_KEY',         'lh[:z<B,ZDXg w=h!UTb,r$Pj7b8v@dc&^ji)J&iQv4Q~R.R`K}/j]^I/v<tZX3z' );
define( 'SECURE_AUTH_KEY',  'N^.UJVgF>((5b&BO/6^2dat@%_wz,YJ(UvLL@nyhVJzcrk*W2Bn_8wKq9*P6c2`h' );
define( 'LOGGED_IN_KEY',    '564}z:^/D/TY2Yv(.aa(W&%/.r}  >J*tGPncV<a&+_(/~sL[FqxGxc6S$[zlfq0' );
define( 'NONCE_KEY',        '_<n@t[92i8f<BI^QDUg+p:fp][gWkSLypz/mv3%hHzIi~=s1a0x-+Mq66@B:lfeb' );
define( 'AUTH_SALT',        'owk:l:Z(+Znc?SYSAy7p*EQ$z/)]$TB~{Zf(&Ubd#f,bJTZ( @K@jV;Q&[a$mr$C' );
define( 'SECURE_AUTH_SALT', 'g*b01I+&>;J=$2L~rq{YN45fy*An||0T,vf/*-O-5G3||tcA4:.* VQi1xW!{)OW' );
define( 'LOGGED_IN_SALT',   '`&.n-,kZoDZqH)&mPb^TXXh!UxLkvg8q3B.#u47yN-qS(/lxz,4}w( ==azP_d,9' );
define( 'NONCE_SALT',       'u`{lc!68pgFXtMUfV?m,<= 7tF_GMqyo),T=uWfQj$0FJj+<B;eh2<#q&-I?-r=;' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
