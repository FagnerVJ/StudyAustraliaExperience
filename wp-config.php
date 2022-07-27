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
define( 'DB_NAME', 'study-australia-experience' );

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
define( 'AUTH_KEY',         'Km(#La+wj-Qssa3r;GA1xg*0cfPA2?&FGHi(a*}VYIj={#-l^4{(.Je:7SKoOanq' );
define( 'SECURE_AUTH_KEY',  '_9ldgUNbYA|V{!?VDJejf<)1xcu^f+x}zzBN:chW:^LBMCFj6!Dt>s=BL>;NN(A4' );
define( 'LOGGED_IN_KEY',    '<Y4J^,#mh-|;t6tK_|,Z(|d024D.:s3;Xt0[pf?T520YV#7yp>>m@~-}|#)C+`H7' );
define( 'NONCE_KEY',        '*bEz&`7:F*JgSf=C)nSnq+4$:ZYl~O#QDKAHQSnVTYmEz1>r+u==`?sVNK;;Bs>4' );
define( 'AUTH_SALT',        'N=fdwb5FGi%XR(|s]y=j#7)QiD:tD:8:a?[gEz!,#){E!dFB%;mkPID{s86v>85*' );
define( 'SECURE_AUTH_SALT', '5ML5t-_;&q>/(lQK@s-Id*Y&Ga9h,sIY0HcP`:2w/,5Qv1D6$3qig`s:N(xhNK=>' );
define( 'LOGGED_IN_SALT',   'p_lxXdzd0~s:CL;u wBhP{?RGxh=/k^kO!W<g0<=Xx<7h0$-)b+1v0rf9XN8.qSt' );
define( 'NONCE_SALT',       'y#4EY`6DQUOJ)OXqI)&*D^$H|7nA@vQm,i/&jH?w*=nVwgqvarv`@6867&+7WLVc' );

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
