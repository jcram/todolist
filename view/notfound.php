<?php include("config.php");?>

<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="https://www.teknisa.com/"><img src="<?php echo BASE_URL?>images/logotek.png" alt=""></a>
            </div>
            <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                <div class="navigation">
                    <div id="navigation">
                        <ul>
                            <li class="active"><a title="Ver" href="read" ">Tarefas</a></li>
                            <li><a href="create" title="Criar">Criar tarefa</a> </li>       
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="post-img">
    <a><img src="<?php echo BASE_URL?>images/ops.jpg" alt="" class="img-responsive"></a>
</div>
<?php include "rodape.php"; ?>
