<?php include("config.php"); include("menu.php");?>

<div class="content">
    <div class="container">
        <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1>TO DO LIST</h1>
                            <p> Insira os dados sobre a tarefa a ser registrada:</p>
                            <form action="atualiza"  method="post">
                                <input type="hidden" name="id" value="<?php echo $_SESSION["dados"]["id_tarefa"];?>" />
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label" for="descricao">Descrição</label>
                                        <input type="text" name="descricao" id="name" placeholder="" class="form-control" value="<?php echo $_SESSION["dados"]["desc_tarefa"] ?>">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="control-label" for="phone">Selecione a prioridade:</label>

                                        <?php if ($_SESSION["dados"]["desc_prioridade"] == 1) :?> 
                                            <select name="descricaoPrioridade" class="form-control">
                                                <option class="form-control" value="1"  selected="selected">Baixa</option>
                                                <option class="form-control" value="2">Média</option>
                                                <option class="form-control" value="3">Muita</option>
                                            </select> 
                                        <?php endif ?>  
                                        <?php if ($_SESSION["dados"]["desc_prioridade"] == 2) :?> 
                                            <select name="descricaoPrioridade" class="form-control">
                                                <option class="form-control" value="1" >Baixa</option>
                                                <option class="form-control" value="2" selected="selected" >Média</option>
                                                <option class="form-control" value="3">Muita</option>
                                            </select> 
                                        <?php endif ?>  
                                        <?php if ($_SESSION["dados"]["desc_prioridade"] == 3) :?> 
                                            <select name="descricaoPrioridade" class="form-control">
                                                <option class="form-control" value="1" >Baixa</option>
                                                <option class="form-control" value="2" >Média</option>
                                                <option class="form-control" value="3" selected="selected">Muita</option>
                                            </select> 
                                        <?php endif ?>  
                                                                               
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="dtPrevista">Data prevista de término:</label>
                                        <input type="date" name="dtPrevista" id="phone" value="<?php echo $_SESSION["dados"]["dt_prev_concl"] ?>" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="descricao">Tarefa realizada?</label> </br>
                                        <?php if ($_SESSION["dados"]["flg_feito"] == 'N') :?> 
                                            <input type="radio" name="flg" value="N" checked> Não<br>
                                            <input type="radio" name="flg" value="S"> Sim<br>
                                        <?php else: ?>
                                            <input type="radio" name="flg" value="N"> Não<br>
                                            <input type="radio" name="flg" value="S" checked> Sim<br>
                                        <?php endif ?>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="textarea">Observação</label>
                                        <textarea class="form-control" id="textarea" name="observacao" rows="6" value=""><?php echo $_SESSION["dados"]["obs_tarefa"]; ?></textarea>
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
