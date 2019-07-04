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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'blog.paulopadovez.com.br');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'pauloPadovezAdmin');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'dicaCandy08*');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

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
define('AUTH_KEY',         '093jyy~B-+/aA QTlq|qSau;;snHs,gPlN%&&)FR9yKAMNpEtjWIVBT`>/]BX6VF');
define('SECURE_AUTH_KEY',  ' ~/>qSeyWMTSabNgs@>#,3 NQgK%~*2.h,$x#clEJmYRI<?}709!EQ##w_hK(6M(');
define('LOGGED_IN_KEY',    'pR-Hv*-O8Vt@l`@ItCF8WOZ!s;OU5qF?+Y^1U[o:+)(%Km4$p`| GnNyp4&f6hUN');
define('NONCE_KEY',        'BIuck3W`T6wM]e9?0,[44IC&m5YWBuW@E%JgDN{{eTv8? v y~^>o<<vxJ, y7?_');
define('AUTH_SALT',        '1c7.`>,-#;=W&T.ONl,lrI0s==J`WLD^JQ1c}#qS&{q>7g45jbUaE}xE[W4V}w/1');
define('SECURE_AUTH_SALT', '*T;X#ns$+h=0V{LcjY{?O)~mY6s&KomzS;hKZSSx$]?lp6-0cV(Hp~MU0lYqr$U?');
define('LOGGED_IN_SALT',   'eFkjz]5k-DhtTSD$|=[su84+!/7#Lbg^>o1:s8Q{)=&z1T)PN=-QtYjo{C.#skWN');
define('NONCE_SALT',       'aXRS{BY)v~vUu!/0TWR18>s:<*<Lpe<u*B/@ct-5/eKE!v&xI2KES4<v=xriKRIZ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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

