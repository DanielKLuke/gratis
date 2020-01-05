<?php

//THIS CLASS CONTROLS THE INVENTORY PAGE
class inventoryController extends Controller
{
    public function index()
    {
        $this->model('inventory');
        $this->view('inventory\index', ['inventory' => $this->model->getCars()]);
        $this->view->render();
    }
}
