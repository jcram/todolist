<?php 

/**
*@author Júlia Catarina R. e A. de Almeida <juc.amarante@gmail.com>
* Classe controller representando uma classe onde conteria métodos compartilhado por vários controllers, mas como só foi implementado 1 não houve necessidade de inserção de mais métodos.
*/
class Controller
{
	/**
	*@author Júlia Catarina R. e A. de Almeida <juc.amarante@gmail.com>
	* Método protegido responsável por iniciar as sessões dos controllers
	*/
	static protected function iniciaSessao()
	{
		session_start();
	}
}

?>