<?php

use MicroBlog\Usuario;
use MicroBlog\ControledeAcesso;
require_once "../vendor/autoload.php";
require_once "../src/ControleDeAcesso.php";
$sessao = new ControledeAcesso;
$sessao->verificaAcesso();

$usuario = new Usuario;
$usuario->setId($_GET['id']);
$usuario->excluir();
    header("location:usuarios.php");