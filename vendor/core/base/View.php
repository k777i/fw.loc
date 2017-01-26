<?php
/**
 * Created by PhpStorm.
 * User: иван-дурма
 * Date: 25.01.2017
 * Time: 22:22
 */
namespace vendor\core\base;

class View{

    public $route = [];
    public $view = [];
    public $layout = [];

    public function __construct($route,$layout='',$view='')
    {
        $this->route=$route;
        $this->layout = $layout ?: LAYOUT;
        $this->view = $view;

    }

    public function render() {
        $file_view = APP . "/views/{$this->route['controller']}/{$this->view}.php";
        ob_start();
        if(is_file($file_view)){
            require $file_view;
        }else{
            echo "<p>Не найден вид <b>$file_view</b></p>";
        }
        $content = ob_get_clean();


    }

}