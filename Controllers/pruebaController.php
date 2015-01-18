<?php
/**
 * Created by PhpStorm.
 * User: Europpa
 * Date: 25/10/14
 * Time: 10:27 PM
 */

class pruebaController extends BaseController{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->_View->titulo = 'PORTADA';
        $this->_View->render('prueba');
    }
    public function lel(){
        $this->_View->titulo = 'POR';
        $this->_View->render('prueba');

    }

}