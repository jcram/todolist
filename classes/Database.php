<?php
/**
*@author Júlia Catarina R. e A. de Almeida <juc.amarante@gmail.com>
* Classe para conexão e requisições no banco
*/
class Database
{
	//Definição dos atributos de acesso ao banco de dados, para acessar um novo BD ou host, os dados devem ser alterados somente aqui.
	private static $host = "localhost";
	private static $dbName = "todolist";
	private static $userName = "root";
	private static $password = "123";

	//Método responsável pela conexão com o banco usando a classe PDO
	private static function conexao()
	{
		try 
		{
			$pdo = new PDO('mysql:dbname='.self::$dbName.';host='.self::$host.'', self::$userName, self::$password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;

		} catch(PDOException $e) 
		{
			echo 'ERROR: ' . $e->getMessage();
		}
	}

	//Função que deve ser acessada das classes modais para realizar as querys no banco
	public static function query($query)
	{
		//Prepara e executa a query
		$stmt = self::conexao()->prepare($query);
		$stmt->execute();

		//Caso a primeira palavra da query for SELECT é retornado os registros desejados
		if (explode(' ', $query)[0] == 'SELECT')
		{
			$dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $dados;
		}
	}
}

?>