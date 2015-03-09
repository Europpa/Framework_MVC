<?php
/**
 * Created by PhpStorm.
 * User: Europpa
 * Date: 19/01/15
 * Time: 05:47 PM
 */

Class postsController extends BaseController{

    private $_post;

    public function __construct(){
        parent::__construct();
        $this->_post = $this->loadModel('post');
    }
    public function index(){

        $this->_View->post = $this->_post->getPost();

        $this->_View->titulo = 'Post Registrados';

        $this->_View->render('posts');
    }
}