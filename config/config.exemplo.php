<?php
#Caminhos absolutos
$pastaInterna="seEstiverDentroDeUmaPasta";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?$barra="":$barra="/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}");

#Atalhos
define('DIRIMG',DIRPAGE.'img/');
define('DIRCSS',DIRPAGE.'lib/css/');
define('DIRJS',DIRPAGE.'lib/js/');

#Acesso ao db
define('HOST',"localhost");
define('DB',"nomebanco");
define('USER',"root");
define('PASS',"");

#Outras Informações
define("SITEKEY","minhachave");
define("SECRETKEY","minhachave");
define("DOMAIN",$_SERVER["HTTP_HOST"]);