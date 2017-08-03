<?php
require_once('classes' . DIRECTORY_SEPARATOR . 'Database.php');

/**
*@author Júlia Catarina R. e A. de Almeida <juc.amarante@gmail.com>
* Classe reprentando o Model referente ao controller Tabela
*/
class TarefaModel
{
	/**
	*@author Júlia Catarina R. e A. de Almeida <juc.amarante@gmail.com>
	* Metodo para inserir registros no banco de dados
	*/
	function create($dados)
	{
		//Cria a query de inclusão no banco de dados
		$query = 'INSERT INTO 
		tb_tarefa(desc_tarefa, flg_feito, desc_prioridade, dt_inclusao, dt_prev_concl,obs_tarefa)
		VALUES 
		("' . $dados["descricao"] . '", "N" ,"' . $dados["descricaoProduto"] .'", "' . date('Y-m-d') . '" ,"' . $dados["dtPrevista"].'" ,"' . $dados["observacao"].'")';

		//Cria um objeto para realizar a conexão e envia a query para a classe DataBase realizar a inclusão
		$database = new Database();
		$database->query($query);
	}


	/**
	*@author Júlia Catarina R. e A. de Almeida <juc.amarante@gmail.com>
	* Metodo para inserir registros no banco de dados
	*/
	function read($where)
	{
		//Cria o objeto a ser utilizado
		$database = new Database();

		//Teste se existe alguma condição para o SELECT
		if ($where != null)
		{	
			//Cria a query de inclusão no banco de dados e realiza a consulta
			$query = "SELECT * FROM `tb_tarefa` WHERE " . $where;
			//Como foi feito especialmente para o editar, sempre vai ter retornar somente um registro e por isso retorna já a posição 0
			return $database->query($query)[0];
		}
		else
		{
			//Cria a query de inclusão no banco de dados e realiza a consulta
			$query = 'SELECT * FROM tb_tarefa';
			return $database->query($query);
		}
	}


	/**
	*@author Júlia Catarina R. e A. de Almeida <juc.amarante@gmail.com>
	* Metodo para atualizar os registros
	*/
	function update($dados)
	{
		//Cria o objeto a ser utilizado
		$database = new Database();

		//Cria a query de inclusão no banco de dados
		$query = 'UPDATE tb_tarefa SET desc_tarefa = "' . $dados["descricao"] . '", flg_feito = "'. $dados["flg"] .'", desc_prioridade = "' . $dados["descricaoPrioridade"] .'", dt_prev_concl = "'. $dados["dtPrevista"].'" , obs_tarefa = "' . $dados["observacao"].'" WHERE id_tarefa =' . $dados["id"];

		//Realiza a atualização no banco de dados
		$database->query($query);
	}

	/**
	*@author Júlia Catarina R. e A. de Almeida <juc.amarante@gmail.com>
	* Metodo para atualizar os registros
	*/
	function delete($where)
	{
		//Cria o objeto a ser utilizado
		$database = new Database();

		//Cria a query de inclusão no banco de dados
		$query = 'DELETE FROM tb_tarefa WHERE ' . $where;

		//Realiza a atualização no banco de dados
		$database->query($query);
	}
}
?>