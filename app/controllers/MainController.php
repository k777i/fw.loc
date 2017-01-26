<?php
namespace app\controllers;
use app\models\Main;



class MainController extends AppController
{
    
    public function indexAction()
    {
        $model = new Main();
        //$res = $model->query("CREATE TABLE posts SELECT*FROM mybase.books");
        //var_dump($res);
        
        //debug($posts);
        //$this->layout = false;
        //$this->layout = "main";
        //$this->view = "test";
        $posts = $model->findAll();
        //$post = $model->findOne('Идиот','title');
        //debug($post);
        //$data = $model->findBySql("SELECT * FROM posts ORDER BY id DESC LIMIT 2");
         
//        $data = $model->findBySql("SELECT * FROM {$model->table} WHERE title LIKE ? ",['%г%']);
//        debug($data);

        $datalike = $model->findLike('а', 'title');
        debug($datalike);    
        
        $this->set(compact('posts'));
    }

}