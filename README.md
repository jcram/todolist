## To do list
	             	### Como configurar, construir e executar o projeto:

### Rotas:

O projeto contem um arquivo **.htaccess** e é necessário ele estar confugurado e funcionando para que o projeto possa ser executado, logo, é necessário rodar o projeto em um servidor **apache**.

### Banco de dados: 

O projeto contem 4 pastas, dentro da pasta classes existe um arquivo chamado: Database.php que contem 4 variavéis privadas referente as configurações do banco de dados. Para que a conexão com o banco seja feita é necessário mudar as variaveis de acordo com o funcionamento do banco. 
Foi incluido no projeto um arquivo chamado **todolist.sql** é necessário importar esse arquivo em uma base de dados e colocar exatamente o nome da base de dados na variavel chamada **dbName**.

### Inclusão de arquivos CSS e JS: 

Existe um arquivo dentro da pasta view chamado **config.php**, nele foi definida uma constante chamada BASE_URL, a princípio não existe necessidade de alterar, mas caso exista algum problema com o layout peço que verifiquem se os arquivos estão sendo incluidos corretamente.

### Execução: 

Salvando todo o projeto em uma pasta no servidor, basta acessar a url: **ServidorOndeEstaOProjeto/todolist/read** (para ir para a página de listagem dos dados, que iniciamente não vai ter nenhum registro, mas vai ser apresentado um menu na parte superior onde é possível selecionar a opção “incluir tarefa”) ou **ServidorOndeEstaOProjeto/todolist/create** (vai ser direcionado para a página com o formulário para criar uma tarefa). 

Por exemplo, em minha máquina, estou rodando o projeto em meu servidor local, logo, acesso o sistema através da url: localhost/todolist/read, conforme exemplo: 

 
             ### Detalhamento da estrutura e organização dos arquivos do projeto.

O projeto foi criado baseado no padrão de arquitetura MVC(Model-view-controller), logo, existem 3 pastas principais do projeto: model, view, controller. 
Existe também uma pasta adicional chama classes onde estão 2 arquivos, Rota.php e Database.php. 

O projeto também segue o padrão DAO(Data Access Object), sendo assim, estão separados a s regras de negócio e o acesso ao banco que é feito atraveś da classe Database e da classe TarefaModel que é uma filha da classe Database.

            ### [Opcional] Apresentar justificativas ou destaques para pontos específicos do projeto.

O projeto utiliza de url amigaveis. O arquivo style.css não fui eu que produzi, estão os devidos créditos no arquivo style.css 

## Comentários 

Alguns comentários seguem o padrão da domentação recomendada conforme sugerido no site: https://www.phpdoc.org/ 

## PHP nas view

Quando foi necessário realizar algum teste php dentro das views, foi realizado conforme descrição na documentação: https://secure.php.net/manual/pt_BR/language.basic-syntax.phpmode.php
