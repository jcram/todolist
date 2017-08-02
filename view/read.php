<?php 
	include("config.php"); include("menu.php");
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>To Do LIST</title>
    <!-- Bootstrap -->
    <link href="<?php echo BASE_URL?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo BASE_URL?>css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="<?php echo BASE_URL?>css/style.css" rel="stylesheet">
</head>

<style>table {border-collapse: collapse;width: 100%;}

th, td {text-align: left;padding: 8px;}

tr:nth-child(even){background-color: #f2f2f2}</style>


    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h1 class="hero-title"> 
                    </h1>
            </div>
        </div>
    </div>
    </div>

    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>TAREFAS</h1>
                        <h5 class="small-title ">Se organize</h5>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
			<?php if ($_SESSION["dados"] == null): ?> 
				 <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h5 class="small-title ">Nenhum registro foi encontrado!</h5>
                </div>
            <?php else: ?>
				<table>
					  <tr>
					    <th>ID</th>
					    <th>Tarefa</th> 
						<th>Feita</th> 
						<th>Prioridade</th>
						<th>Data entrada</th>
						<th>Data prevista</th>
						<th>Observação</th>
						<th>Editar</th>
						<th>Excluir</th>
					  </tr>
					<?php foreach ($_SESSION["dados"] as $registro): ?>  
					<tr>     
					<?php foreach ($registro as $key => $value): ?>   
						<?php if($key == "desc_prioridade"): ?>

							<?php if($value == "1"): ?>		
								<td style="color:green"><?php echo "Baixa"?></td>
							<?php endif ?>		
							<?php if($value == "2"): ?>		
								<td style="color: #aa9144"><?php echo "Média"?></td>
							<?php endif ?>		
							<?php if($value == "3"): ?>		
								<td style="color:red"><?php echo "Alta"?></td>
							<?php endif ?>													
						<?php else: ?>
						    <td><?php echo $value?></td>
						<?php endif ?>
					<?php endforeach?>

					 <?php if ($_GET["url"] == "delete"): ?>      
						<td><a href="../update/<?php echo $registro["id_tarefa"]?>" class="btn btn-default btn-xs mb10">Editar</a></td>
						<td><a href="../delete/<?php echo $registro["id_tarefa"]?>" class="btn btn-primary btn-xs">Excluir</a></td>
					<?php else: ?>  
						<td><a href="update/<?php echo $registro["id_tarefa"]?>" class="btn btn-default btn-xs mb10">Editar</a></td>
						<td><a href="delete/<?php echo $registro["id_tarefa"]?>" class="btn btn-primary btn-xs">Excluir</a></td>
					<?php endif?>  

					</tr>
					<?php endforeach ?>   
				</table>
			<?php endif ?>


            </div>
        </div>
    </div>


    <?php include "rodape.php"; ?>