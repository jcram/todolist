<?php
/**
*@author Júlia Catarina R. e A. de Almeida <juc.amarante@gmail.com>
* Classe definição das rotas e direcionamento para função do controller
*/
class Route
{
	public static $rotasvalidas = array();
	
	public static function configurar($rota, $funcao)
	{
		//define as rotas válidas caso seja necessário alguma verificação
		self::$rotasvalidas[] = $rota;

		if ($_GET['url'] == $rota)
		{
			$funcao->__invoke();
		}	
	}
}

?>