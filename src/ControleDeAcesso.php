<?php
namespace MicroBlog;

final class ControledeAcesso{
    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public function verificaAcesso()
    {
        if (!isset($_SESSION['id'])) {
            session_destroy();
            header("location:../login.php?acesso_proibido");
            die();
        }
    }

    public function login(int $id, string $nome, string $tipo):void
    {
        $_SESSION['id'] = $id;
        $_SESSION['nome'] = $nome;
        $_SESSION['tipo'] = $tipo;
    }



}
?>