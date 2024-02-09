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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress-default' );

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
define( 'AUTH_KEY',         '&fgu/MJy4&scINkxK9kChk@CCGG9wplMQYPt*rP[[b9D[aSm.5<OS%ef[Qq:MpKP' );
define( 'SECURE_AUTH_KEY',  'fKz_#s[N02Bh:1Xnu+o|9vH7a=k:LoG}CYkI#D2Fr 0:>y|,Lm C)5{te}_;1jdh' );
define( 'LOGGED_IN_KEY',    '*^=BS7Tye}vlr>#vB7zo9MAr)z=&fxvrG4b29uLvu-=Ep+r|ld,dWwm@pn0Cql):' );
define( 'NONCE_KEY',        ' YT>. Rng`Ym2E^q0it6!p*=2c0@T8=rlO&7LdOFSIRN1G  EUE`=0@V)X8#:.n=' );
define( 'AUTH_SALT',        'K)HE`@X /`Xwo}=@d^C~:,!dxattvEe(, [3@!OO(:$x;ji?an96Ytl=YMgD3F~n' );
define( 'SECURE_AUTH_SALT', '.5eBG+qf0(|pj`6;CC>AhvbIxK=2`j6eyFF!:t pE  Gaejbx_%H.^a@z;$[.}QS' );
define( 'LOGGED_IN_SALT',   'v}/,25zi[C@z$2}RC_(*@Ssrbt|&*_6?1 ^ [,ddRhJ#iu]dMk*B*93#ACFOX*rH' );
define( 'NONCE_SALT',       '8*.,Q}g$AD_Vu<ounxI_P4aZ@js>F.YdeMr`h;&j)`ZILfRwZkEBz-?~}T&[]E9d' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
