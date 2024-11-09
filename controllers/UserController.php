<?php
namespace app\controllers;

use app\core\BaseController;
use app\core\View;

class UserController extends BaseController
{
    public function readUser()
    {
        $this->view->render('getUser', 'main');
    }
}