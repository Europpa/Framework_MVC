<?php
/**
 * Created by PhpStorm.
 * User: Europpa
 * Date: 24/10/14
 * Time: 10:21 PM
 */

class indexController extends BaseController{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $post =  $this->loadModel('post');
        $this->_View->post = $post->getPost();
        $this->_View->titulo = 'PORTADA';
        $this->_View->render('index');
    }
}