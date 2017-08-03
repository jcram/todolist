<?php
/**
*@author Júlia Catarina R. e A. de Almeida <juc.amarante@gmail.com>
* Classe definição das rotas e direcionamento para função do controller
*/
class Rota
{
	private static $rotasvalidas = array();
	
	/**
	*@author Júlia Catarina R. e A. de Almeida <juc.amarante@gmail.com>
	* Método responsável por redirecionar as rotas para as funções 
	*/
	public static function configurar($rota, $funcao)
	{
		//insere no array das rotas válidas
		self::$rotasvalidas[] = $rota;

		if ($_GET['url'] == $rota)
		{
			$funcao->__invoke();
		}	
	}

	/**
	*@author Júlia Catarina R. e A. de Almeida <juc.amarante@gmail.com>
	* Método responsável verificar se a $url passada por parametro está dentre as rotas válidas
	*/
	public static function retornaRotasValidas($url)
	{
		$retorno = false;
		//define as rotas válidas caso seja necessário alguma verificação
		foreach (self::$rotasvalidas as $key ) {
		 	if ($url == $key){
		 		$retorno = true;
		 	}
		 }
		return $retorno;
	}
}
?>