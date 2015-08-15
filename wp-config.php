<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'udof2015');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'usbw');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kav5~8;hssv0>2+MmT,fi]llBith~?Mt-$ktElkFx :5LX1z-c-95NeL5c7|8eC:');
define('SECURE_AUTH_KEY',  'P!NCeeTt:0R):V]UN!7Kl!0bEqF4:4/+E$Z#9j6R+Hjf_$6+vBhImq`|t0<$39#f');
define('LOGGED_IN_KEY',    'X;T8~nznLggO3EO%z$k+ Ez&}TCU2BUwH+gNo>J.r-F>LRRJ$ka|b81w:~4:_(P8');
define('NONCE_KEY',        'fcL9`uzAXNe8F-Jb*Luzf+E1}z_;`eTIqvd+[qD-x1h.`(jkAW=7aR=g0V?)%O*_');
define('AUTH_SALT',        ')9&ACYbdXW{;N|lPx+bdish3M?$e{`;`O|+-wc.=:WQYh:ArE@Dt@KUX<8,tDYer');
define('SECURE_AUTH_SALT', 'ZX%sMy<<&79<~aXgZ01K8|=N-nJvgz`T;P)9GBCYHKA4LXn*c94ry_vuZ@9QI++V');
define('LOGGED_IN_SALT',   '~!-%h| H8}ICyj|M.A:WDq,}|;6[6enJfX5V)0x}]+U0Wq!Ou*Ev62V7C H=qj&N');
define('NONCE_SALT',       '2`7Ygwv0rAmgk*~.W&0M!]eJ7j<9.Qn(W0>Iv:#p=A!*Y46k>&p5+-qlCjUgUs-R');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'uf_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
