<?php
namespace MicroBlog;
abstract class Utilitarios{
    public static function teste(array $dados)
    {
        echo "<pre>";
        var_dump($dados);
        echo "</pre>";
    }
    public static function limitaCaractere($dados) {
            return mb_strimwidth($dados, 0, 20, " ...");
        }

  
}

?>