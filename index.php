<?php
require_once "inc/cabecalho.php";
$noticia->setDestaque('sim');
$destaques = $noticia->listarDestaques();
?>


<div class="row my-1 mx-md-n1">
        <?php
        foreach ($destaques as $destaque) {
            ?>
        		<div class="col-md-6 my-1 px-md-1">
            <article class="card shadow-sm h-100">
                <a href="noticia.php?id=<?=$destaque['id']?>" class="card-link">
                    <img src="imagem/<?=$destaque['imagem']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="fs-4 card-title"><?=$destaque['titulo']?></h3>
                        <p class="card-text"><?=$destaque['resumo']?></p>
                    </div>
                </a>
            </article>
		</div>

        <?php
            
         }
        ?>
     

</div>        
        
<?php 
include_once "inc/todas.php";
?> 
<?php 
require_once "inc/rodape.php";
?>








