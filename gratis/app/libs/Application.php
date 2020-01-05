<?php

//ALL REQUESTS REDIRECT BACK TO THE PUBLIC INDEX WHICH CALLS THIS CLASS
//THIS CLASS TAKES THE PATHS IN THE REQUESTED URL AND BREAKS THEM DOWN INTO USABLE VARIABLES WHICH CONTROL WHAT IS DISPLAYED
class Application
{
    protected $controller = 'homeController';
    protected $action = 'index';
    protected $params = [];

    public function __construct()
    {
        $this->prepareURL();
        //INSTANTIATE NEW CONTROLLER AND PERFORM THE ACTION WHICH WILL INCLUDE ANY PARAMETERS
        if (file_exists(CONTROLLER . $this->controller . '.php')) {
            $this->controller = new $this->controller;
            if (method_exists($this->controller, $this->action)) {
                call_user_func_array([$this->controller, $this->action], $this->params);
            }
        }
    }

    protected function prepareURL()
    {
        //DETERMINE THE CONTROLLER (1ST PATH IN URL), ACTION (2ND PATH IN URL), AND PARAMETERS (ALL OTHER PATHS IN URL)
        //DEFAULT CONTROLLER IS HOMECONTROLLER
        //DEFAULT ACTION IS INDEX
        //PARAMETERS ARE OPTIONAL
        $request = trim($_SERVER['REQUEST_URI'], '/');
        if (!empty($request)) {
            $url = explode('/', $request);
            $this->controller = isset($url[0]) ? $url[0] . 'Controller' : 'homeController';
            $this->action = isset($url[1]) ? $url[1] : 'index';
            unset($url[0], $url[1]);
            $this->params = !empty($url) ? array_values($url) : [];
        }
    }
}
