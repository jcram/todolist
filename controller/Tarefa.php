<?php
require_once('Controller.php');
require_once('model' . DIRECTORY_SEPARATOR . 'TarefaModel.php');

/**
*@author Júlia Catarina R. e A. de Almeida <juc.amarante@gmail.com>
* Classe Tarefa representando um Controller para controlar as regras de negócio
*/
class Tarefa extends Controller
{
	/**
	*@author Júlia Catarina R. e A. de Almeida <juc.amarante@gmail.com>
	* Método do controller para mostrar a view tarefa
	*/
	public static function create()
	{

		//Redireciona para a view do formulário 
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
	* Método update responsável por chamar a view update apresentando os dados cadastrados
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
	* Método atualiza responsavel por chamar o respectivo model para realizar a exclusão de tarefas
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

	/**
	*@author Júlia Catarina R. e A. de Almeida <juc.amarante@gmail.com>
	* Método delete responsavel por chamar o respectivo model para realizar a exclusão de tarefas
	*/
	public static function delete($id)
	{
		//Verifica se existe um ID válido
		if($_GET["id"] != null){
			//Instanciando a classe responsável pelo model e passando os dados do formulários para a query
			$model = new TarefaModel();
			$dados = $model->delete("`id_tarefa` = " . $id);			
			self::iniciaSessao();

			//Retorna mensagem de sucesso
			self::read();
			echo '<script> alert("Tarefa excluida com sucesso");</script>';
		}
		//Se o ID não for válido manda para a página not found
		else
		{
			include('./view'. DIRECTORY_SEPARATOR . 'notfound.php');
		}
	}
}

?>