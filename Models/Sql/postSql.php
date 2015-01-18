<?php
/**
 * Created by PhpStorm.
 * User: Europpa
 * Date: 16/01/15
 * Time: 11:43 PM
 */
class postSql{
// Tablas
    private static $tabla_post = 'post';
// Campos
    private static $id_post = 'id_usuario';
    private static $titulo = 'titulo';
    private static $cuerpo = 'cuerpo';

    public static function sql_allpost() {
        $query = 'SELECT * FROM ' . self::$tabla_post;
        return $query;
    }

}