<?php
/**
 * Created by PhpStorm.
 * User: Europpa
 * Date: 24/10/14
 * Time: 10:21 PM
 */

class indexController extends BaseController{

    private $post;

    public function __construct(){
        parent::__construct();
        $this->post = $this->loadModel('post');
    }

    public function index(){
        $post =  $this->loadModel('post');
        $this->_View->post = $post->getPost();
        $this->_View->titulo = 'Post Registrados';
        $this->_View->render('index');
    }
}