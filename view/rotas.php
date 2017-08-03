<?php
require_once('controller' . DIRECTORY_SEPARATOR . 'Tarefa.php');

//Redireciana para a view
Rota::configurar('create', function(){
	Tarefa::create();
});

//Redireciona para a função de inserção
Rota::configurar('insert', function(){
	Tarefa::insert();
});

//Redireciona para a função read e posteriormente para a view de apresentação da tabela
Rota::configurar('read', function(){
	Tarefa::read();
});

//Testa se segundo parâmetro for um id então quer dizer que veio da view de apresentação da tabela e deve ser apresentado o formulário
//Se o segundo parametro for a palavra "atualiza" significa que veio o href do botão no formulário de atualização
Rota::configurar('update', function(){

	if ($_GET["id"] == "atualiza")
	{
		Tarefa::atualiza();
	}
	else 
	{		
		Tarefa::update($_GET["id"]);
	}
	
});

//Testa se segundo parâmetro for um id então quer dizer que veio da view de apresentação da tabela e deve ser apresentado o formulário
//Se o segundo parametro for a palavra "delete" redirecionar para a página princiapal
Rota::configurar('delete', function(){
	if ($_GET["id"] == "delete")
	{
		Tarefa::read();
	}
	else 
	{		
		Tarefa::delete($_GET["id"]);
	}
});
?>