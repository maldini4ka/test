<?php

namespace app\controllers\admin;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex() {

        return $this->render('index');
}

    public function actionAbout() {

        return $this->render('about');
    }
}