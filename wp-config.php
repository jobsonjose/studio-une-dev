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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'studioune' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '}eMwtp]GSaRpDiK%_$.*^QVIWxu:$<nAMKjcP*GQ2dEpkc!e^Z/p2(j=d`RQ@bLr' );
define( 'SECURE_AUTH_KEY',  ',cbFp05BcYEzY#`.n5`DRBcMC4#W_Ral)-DQmoP_E&%t[R4:BEr0d4$mysmg5.hC' );
define( 'LOGGED_IN_KEY',    'Kk@O(H3V)Q]j2bb{AB6LTCizal*,t1c KresG[}v{4!UrInshyF{+1I-/:V##z2-' );
define( 'NONCE_KEY',        '.#z>Y`UI:JE4(eFK({6YEYmj+JhoiOrm-9EA^v_iES-l*Oz[CT=#s/.$PMt@qAr;' );
define( 'AUTH_SALT',        'w2`B<H?}lWEm=hpQ6BVxtZ,yv/7O2@ixKKuAFy5hM+5r~TM~B?o65^~HGVt*CZVk' );
define( 'SECURE_AUTH_SALT', '.`a/xv-/TO1zY!BQVzK?F7H89n sgmJ;<],.j4[.A&neP1Btk{}*~!N[*cMsR .(' );
define( 'LOGGED_IN_SALT',   '~;YHLo/_9q6blogN4HYFvO{XVIx~]n$A!:wW,EmW??YfWxpf]_TE}P9~Oi6.m!7+' );
define( 'NONCE_SALT',       'Q~vv#f!/lClV((U2|?e0y5KZ/21_P-@94_5&Fs6NNvl8Cv.<eZCcZ}dPUuWdEcr_' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_studioune';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
