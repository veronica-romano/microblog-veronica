
<?php
namespace Microblog;
abstract class Utilitarios {
    public static function dump(array $dados) {
        echo "<pre>";
        var_dump($dados);
        echo "</pre>";
    }

    public static function dataHora($dados){
        return date('d/m/Y H:i', strtotime($dados));
    }
}