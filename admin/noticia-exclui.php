<?php

use MicroBlog\ControledeAcesso;
use MicroBlog\Noticia;

require_once "../vendor/autoload.php";
require_once "../src/ControleDeAcesso.php";
$sessao = new ControledeAcesso;
$sessao->verificaAcesso();
$sessao = new ControledeAcesso;
$sessao->verificaAcessoAdmin();

$noticia = new Noticia;
$noticia->setId($_GET['id']);
$noticia->usuario->setId($_SESSION['id']) ;
$noticia->usuario->setTipo($_SESSION['tipo']) ;
$noticia->excluir();
    header("location:noticias.php");