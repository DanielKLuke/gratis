<?php

//THIS CLASS CONTROLS THE RENDERING OF INDIVIDUAL CAR PAGES
class carController extends Controller
{
    //STOCKNUMBER IS PASSED AS A PARAMETER IN THE URL AND DETERMINES WHICH CAR IS SHOWN
    public function index($stockNumber)
    {
        $this->model('car');
        $this->view('car\index', ['car' => $this->model->getCarInfo($stockNumber)]);
        $this->view->render();
    }
}
