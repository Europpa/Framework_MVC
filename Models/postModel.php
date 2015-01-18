<?php
/**
 * Created by PhpStorm.
 * User: Europpa
 * Date: 29/10/14
 * Time: 04:38 PM
 */
class postModel extends Model   {
    public function __construct(){
        parent::__construct();
    }

    public function getPost(){
        $sql = $this->getSql('post');
        $que = postSql::sql_allpost();
        $post = $this->query($que);
        return $post->fetchAll();
    }
}