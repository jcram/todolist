<?php include("config.php"); include("menu.php");?>
<!-- Apresentação da tabela contendo as tarefas realizadas pelo usuário-->
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

				 <?php if ($_GET["url"] == "delete" || $_GET["url"] == "update" ): ?> 
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
