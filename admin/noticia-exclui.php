<?php

use MicroBlog\ControledeAcesso;
require_once "../vendor/autoload.php";
require_once "../src/ControleDeAcesso.php";
$sessao = new ControledeAcesso;
$sessao->verificaAcesso();