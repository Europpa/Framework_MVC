<?php
/**
 * Created by PhpStorm.
 * User: Europpa
 * Date: 24/10/14
 * Time: 08:22 PM
 */

class View{
    private $_controlador;

    public function __construct(Request $peticion){
        $this->_controlador = $peticion->getController();
    }

    public function render($view, $item = false){
        $srcView = ROOT . 'Views' . DS . $view . '.php';
        if(is_readable($srcView)){
            require_once $srcView;
        }else{
            throw new Exception('Error en la vista');
        }
    }
}