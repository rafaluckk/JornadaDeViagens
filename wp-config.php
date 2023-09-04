<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'jornadaviagens' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mdnAxkH+)aStV2&52T-O}5^|e,_@R_OIpTURxKm*7yD@uEVFmKq!Nn>Av <-ESO)' );
define( 'SECURE_AUTH_KEY',  'US#g_37E%r /159odaPfO:F!pY=o3C}JJzu2q.aoKT0i/yYRP( Kemj{*t+IR~hn' );
define( 'LOGGED_IN_KEY',    '&*~UKEg!tJMAVM+[BfkQxW][L+2E3b`&Ij$y`2.h@mZE$.>Iyf~z+.DRNM7X`^lA' );
define( 'NONCE_KEY',        'W z$DMPHEf>T+B=#UA5qm|-_5anz.qri1Yri~lVr%R{q:3N0 4<Ooy4[::2JLPCu' );
define( 'AUTH_SALT',        'cNw-{>,@&v3?o,2x0X<e!3NL.Ioz1JdpRr~1/`yC0a#C/77}@<%x-rA4DVGAhMTQ' );
define( 'SECURE_AUTH_SALT', '5QW?$G4-?q;#n ^+;(T-3]1*OL:~X` 6Q@.z{Xe<xPDG^!{aYbDe>f^`.~JJShnu' );
define( 'LOGGED_IN_SALT',   '{YNtS$X{2W85o!~j2f;Jmn|`F20XYsi:xVu*}7*1<v]L8A6nSdm(Y~z|o@~z;EW=' );
define( 'NONCE_SALT',       '-aaQZoE$5})=s]3Pvi_:%}OnG$mh KBA.TusH2so|]#qW&FllkJP7^|1lzu4L1`-' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'jvwp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
