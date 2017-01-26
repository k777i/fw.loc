<?php
/**
 * Created by PhpStorm.
 * User: иван-дурма
 * Date: 25.01.2017
 * Time: 20:44
 */

namespace vendor\core\base;


abstract class Controller
{

    public $route = [];
    public $view;
    public $layout;
    public $vars = [];

    public function __construct($paramRoute)
    {
        $this->route = $paramRoute;
        $this->view = $paramRoute['action'];
       //include APP . "/views/{$paramRoute['controller']}/{$this->view}.php";
    }

    public function getView(){
        $vObj = new View($this->route,$this->layout,$this->view);
        $vObj->render($this->vars);
    }
    
    public function set($vars){
        $this->vars = $vars;
    }
}