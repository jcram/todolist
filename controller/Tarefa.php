<?php

require_once('Controller.php');
require_once('model' . DIRECTORY_SEPARATOR . 'TarefaModel.php');

/**
* 
*/
class Tarefa extends Controller
{
	/**
	*@author Júlia Catarina R. e A. de Almeida <juc.amarante@gmail.com>
	* Método do controller para mostrar a view tarefa
	*/
	public static function create()
	{

		include('./view'. DIRECTORY_SEPARATOR . 'create.php');
	}

	/**
	*@author Júlia Catarina R. e A. de Almeida <juc.amarante@gmail.com>
	* Método do controller chamar o respectivo model
	*/
	public static function insert()
	{
		//Instanciando a classe responsável pelo model e passando os dados do formulários para a query
		$model = new TarefaModel();
		$model->create($_POST);
		//Retorna mensagem de sucesso
		include('./view'. DIRECTORY_SEPARATOR . 'create.php');
		echo '<script> alert("Tarefa incluida com sucesso");</script>';
	}

	/**
	*@author Júlia Catarina R. e A. de Almeida <juc.amarante@gmail.com>
	* Método 
	*/
	public static function read()
	{
		//Instanciando a classe responsável pelo model e passando os dados do formulários para a query
		$model = new TarefaModel();
		$dados = $model->read(null);

		//Se for a primeira consulta ele inicia a sessão
		if (!isset($_SESSION['dados']))
		{
			self::iniciaSessao();
		}
		$_SESSION['dados'] = $dados;

		//Retorna mensagem de sucesso
		include('./view'. DIRECTORY_SEPARATOR . 'read.php');
	}

	/**
	*@author Júlia Catarina R. e A. de Almeida <juc.amarante@gmail.com>
	* Método 
	*/
	public static function update($id)
	{
		//Instanciando a classe responsável pelo model e passando os dados do formulários para a query
		$model = new TarefaModel();
		$dados = $model->read("`id_tarefa` = " . $id);

		//Se for a primeira consulta ele inicia a sessão
		if (!isset($_SESSION['dados']))
		{
			self::iniciaSessao();
		}

		$_SESSION['dados'] = $dados;


		//Retorna mensagem de sucesso
		include('./view'. DIRECTORY_SEPARATOR . 'update.php');
	}

	/**
	*@author Júlia Catarina R. e A. de Almeida <juc.amarante@gmail.com>
	* Método do controller chamar o respectivo model
	*/
	public static function atualiza()
	{
		//Instanciando a classe responsável pelo model e passando os dados do formulários para a query
		$model = new TarefaModel();
		$model->update($_POST);
		//Retorna mensagem de sucesso
		include('./view'. DIRECTORY_SEPARATOR . 'create.php');
		echo '<script> alert("Tarefa atualizada com sucesso");</script>';
	}


	public static function delete($id)
	{
		//Instanciando a classe responsável pelo model e passando os dados do formulários para a query
		$model = new TarefaModel();
		$dados = $model->delete("`id_tarefa` = " . $id);			
		self::iniciaSessao();

		//Retorna mensagem de sucesso
		self::read();
		echo '<script> alert("Tarefa excluida com sucesso");</script>';
	}
}

?>