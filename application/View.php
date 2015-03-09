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
        $srcView = ROOT . 'Views' . DS . $this->_controlador . DS. $view . '.php';
        if(is_readable($srcView)){

            $menu = array(
               array(
                   'id' => 'inicio',
                   'titulo' => 'Inicio',
                   'enlace' => BASE_URL
               ),
                array(
                    'id' => 'usuarios',
                    'titulo' => 'Usuarios',
                    'enlace' => BASE_URL .'posts'
                )
            );
            
            require_once ROOT . 'Views' . DS . 'layout' . DS . 'header.php';
            require_once $srcView;
            require_once ROOT . 'Views' . DS . 'layout' . DS . 'footer.php';

        }else{
            throw new Exception('Error en la vista');
        }
    }
}