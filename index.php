<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once 'classes/Rota.php';
require_once 'view/rotas.php';

//Cria uma instancia da Rota para verificar se a rota digitada está dentre as válidas
$rota = new Rota();
//Se a rota for inválida apresenta a página de not found
if (!Rota::retornaRotasValidas($_GET["url"])){
	include 'view/notfound.php';
}

?>
