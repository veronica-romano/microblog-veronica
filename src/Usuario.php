<?php
namespace MicroBlog;
use PDO, Exception;

final class Usuario{
    private int $id;
    private string $nome;
    private string $email;
    private string $senha;
    private string $tipo;
    private PDO $conexao;


    public function __construct(){ //método que functiona na criação do objeto
        $this->conexao = Banco::conecta();
    }

    public function listar():array{
        $sql = "SELECT id nome email tipo FROM usuarios ORDER BY nome";
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro: ".$erro->getMessage());
        }
        return $resultado;
    }
}


?>
 try {
            //code...
        } catch (Exception $erro) {
            die("Erro: ".$erro->getMessage());
        }