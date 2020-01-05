<?php

//THIS CLASS IS USED BY ALL OTHER CONTROLLERS
class Controller
{
    protected $view;
    protected $model;
    //LOAD A NEW VIEW
    public function view($viewName, $data = [])
    {
        $this->view = new View($viewName, $data);
        return $this->view;
    }
    //LOAD A NEW MODEL
    public function model($modelName, $data = [])
    {
        if (file_exists(MODELS . $modelName . '.php')) {
            require MODELS . $modelName . '.php';
            $this->model = new $modelName;
        }
    }
}
