<?php

//THIS CLASS CONTROLS THE LOGIN PAGE
class loginController extends Controller
{
    //WHEN INDEX IS CALLED, IT DETERMINES IF YOU ARE SIGNED IN, NOT SIGNED IN, OR TRYING TO SIGN IN 
    public function index()
    {
        if ($_SESSION['LoggedIn']) {
            $this->view('login\index', ['LoggedIn' => true]);
            $this->view->render();
        } else {
            if (!empty($_POST['username']) && !empty($_POST['password'])) {
                $this->model('register');
                if ($this->model->checkForPassword()) {
                    $this->model->setUserInfo();
                    $this->view('login\signin', ['credentialsAccepted' => true]);
                    $this->view->render();
                } else {
                    $this->view('login\signin', ['credentialsAccepted' => false]);
                    $this->view->render();
                }
            } else {
                $this->view('login\index', ['LoggedIn' => false]);
                $this->view->render();
            }
        }
    }

    //BEFORE SUBMITTING THE FORM, A REGISTRATION FORM IS DISPLAYED
    //AFTER SUBMITTING THE FORM, IT DETERMINES IF THE USERNAME ALREADY EXISTS, IF NOT, THE NEW NAME AND PASSWORD IS ADDED
    public function signup()
    {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $this->model('register');
            if ($this->model->checkForUsername()) {
                $this->view('login\register', ['userExists' => true]);
                $this->view->render();
            } else {
                if ($this->model->setUsernameAndPassword()) {
                    $this->view('login\register', ['userExists' => false]);
                    $this->view->render();
                } else {
                    $this->view('login\register', ['error' => true]);
                    $this->view->render();
                }
            }
        } else {
            $this->view('login\signup');
            $this->view->render();
        }
    }

    //UNSETS THE SESSION
    public function signout()
    {
        $this->model('register');
        $this->model->signOut();
        $this->view('login\index', ['LoggedIn' => false]);
        $this->view->render();
    }
}
