<?php

//THIS CLASS CONTROLS RENDERING FOR ALL PAGES EXCEPT THE INVENTORY AND LOGIN PAGES
class homeController extends Controller
{
    public function index()
    {
        $this->view('home\index');
        $this->view->render();
    }
    public function aboutUs()
    {
        $this->view('home\aboutUs');
        $this->view->render();
    }
    public function finance()
    {
        $this->view('home\finance');
        $this->view->render();
    }
    public function military()
    {
        $this->view('home\military');
        $this->view->render();
    }
    public function news()
    {
        $this->view('home\news');
        $this->view->render();
    }
    public function reviews()
    {
        $this->view('home\reviews');
        $this->view->render();
    }
    public function service()
    {
        $this->view('home\service');
        $this->view->render();
    }
}
