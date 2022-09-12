<?php
use MicroBlog\Utilitarios;
require_once "inc/cabecalho.php";
$noticia->setId($_GET['id']);
$detalhes = $noticia->listarDetalhes();
?>
<div class="row my-1 mx-md-n1">
    <article class="col-12">
        <h2> <?= Utilitarios::formataTexto($detalhes['titulo']) ?> </h2>
        <p class="font-weight-light">
            <time><?=Utilitarios::dataHora($detalhes['data']) ?></time> - <span><?=$detalhes['autor'] ?? "<i>Equipe Microblog</i>"  ?></span>
        </p>
        <img src="imagem/<?=Utilitarios::formataTexto($detalhes['imagem']) ?>" alt="" class="float-start pe-2 img-fluid">
        <p><?=Utilitarios::formataTexto($detalhes['texto']) ?></p>
    </article>    
</div>                          
<?php 
include_once "inc/todas.php";
?> 
<?php 
require_once "inc/rodape.php";
?>

