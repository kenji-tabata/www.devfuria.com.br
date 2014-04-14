<?php

/**
 * Arquivo Bootstrap
 */
/**
 * Session
 */
session_start();


/**
 * Timezone
 */
date_default_timezone_set('America/Sao_Paulo');

/**
 * Const do sistema
 */
define('DF', true);

/**
 *  Google Analytics
 */
//define('GANALYTICS_ON', true); // liga
define('GANALYTICS_ON', false); // desliga


/**
 * Caminho relativo da raiz do sistema
 */
define('BASE_PATH', dirname(__FILE__));


/**
 * Caminho absoluto para links e imagens
 */
# www.devefuria.com.br
//define('LINKS_PATH', "http://www.devfuria.com.br");
define('LINKS_PATH', "http://localhost/devfuria/www.devfuria.com.br");


/**
 * Pasta das views
 */
define('VIEWS_PATH', "/views/");


/**
 *  Domínio, (não mais) utilizado nos title das páginas
 */
define('DOMINIO', "www.devfuria.com.br");



/**
 * Classes diversas
 */
require (BASE_PATH . "/oop/Model.php");
require (BASE_PATH . "/oop/Conteudo.php");
require (BASE_PATH . "/oop/View.php");
require (BASE_PATH . "/oop/Pagina.php");
require (BASE_PATH . "/oop/Aux.php");
require (BASE_PATH . "/oop/Head.php");
require (BASE_PATH . "/oop/NavTop.php");
require (BASE_PATH . "/oop/ListaSecao.php");
require (BASE_PATH . "/oop/Paginacao.php");

/**
 * Conexão dom DB
 */
$pdo = new PDO($dsn = "mysql:dbname=devfuria_fulia;host=localhost", $user = "root", $pass = "alfa9876");
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
$pdo->exec("set names utf8");

/**
 * Variáveis do sistema
 */
$model = new Model();

$conteudo = new Conteudo();
$conteudo->paginas = $conteudo->criaArrayPaginas($model->getPaginaAll());

$view = new View();
$view->secoes = $model->getArrSecoes();