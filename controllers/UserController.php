<?php
namespace app\controllers;

use app\core\BaseController;
use app\core\View;
use app\models\UserModel;

class UserController extends BaseController
{
    public function readUser()
    {
        $model = new UserModel();
        $model->email = 'danilo.jovanovic.22@singimail.rs';
        $model->firstName = 'Danilo';
        $model->lastName = 'Jovanovic';

    //    echo "<pre>";
    //    var_dump($model);
    //    exit;

        $this->view->render('getUser', 'main', $model);
    }
}