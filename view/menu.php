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
                            <?php if ($_GET["url"] == "update" || $_GET["url"] == "delete"): ?>
                            <li class="active"><a title="Ver" href="../read" ">Tarefas</a></li>
                            <li><a href="../create" title="Criar">Criar tarefa</a> </li>
                            <?php else: ?>
                            <li class="active"><a title="Ver" href="read" ">Tarefas</a></li>
                            <li><a href="create" title="Criar">Criar tarefa</a> </li>
                            <?php endif ?>         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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