<?php include("config.php"); include("menu.php");
session_start();?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="widget widget-contact">
                        <!-- Instruções-->
                        <h3 class="widget-title">Instruções:</h3>
                            <strong>Tarefa:</strong>
                            <br> Insira a desrição da tarefa
                            <br> Insira a prioridade da tarefa 
                            <BR>- Pouca - Média ou Muita
                            <br> Insira uma data prevista para término (você pode alterar depois)
                            <strong></strong>
                            <br>
                         <!-- Fim instruções -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1>TO DO LIST</h1>
                            <p> Insira os dados sobre a tarefa a ser registrada:</p>
                            <form action="insert"  method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label" for="descricao">Descrição</label>
                                        <input type="text" name="descricao" id="name" required class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="phone">Selecione a prioridade:</label>
                                        <select name="descricaoProduto" class="form-control">
                                            <option class="form-control" value="1">Pouca</option>
                                            <option class="form-control" value="2">Média</option>
                                            <option class="form-control" value="3">Muita</option>
                                        </select> 
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="dtPrevista">Data prevista de término:</label>
                                        <input type="date" name="dtPrevista" id="phone" placeholder="2013-01-11" class="form-control">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="textarea">Observação</label>
                                        <textarea class="form-control" id="textarea" name="observacao" rows="6" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="singlebutton" class="btn btn-default">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "rodape.php"; ?>
