<?php
namespace app\controllers;



class Posts extends App
{


    public function indexAction()
    {
        echo 'object create: Posts::index';
    }
    public function testAction()
    {

        echo 'object create: Posts::test';
    }
    public function testPageAction()
    {
        echo 'object create: Posts::testPage';
    }

    public function before(){
        echo 'object create: Posts::before';

    }

}