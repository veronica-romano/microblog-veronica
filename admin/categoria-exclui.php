<?php
use MicroBlog\Categoria;
use MicroBlog\ControledeAcesso;

require_once "../vendor/autoload.php";
require_once "../src/ControleDeAcesso.php";

$sessao = new ControledeAcesso;
$sessao->verificaAcesso();
$sessao = new ControledeAcesso;
$sessao->verificaAcessoAdmin();


$categoria = new Categoria;
$categoria->setId($_GET['id']);
$categoria->excluir();
header("location:categorias.php");