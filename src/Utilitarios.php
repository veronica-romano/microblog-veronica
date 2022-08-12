<?php
namespace MicroBlog;
abstract class Utilitarios {
    public static function dump(array $dados) {
        echo "<pre>";
        var_dump($dados);
        echo "</pre>";
    }

    public static function dataHora($dados){
        return date('d/m/Y H:i', strtotime($dados));
    }

    public static function limitaCaractere($dados) {
        return mb_strimwidth($dados, 0, 20, " ...");
    }
}