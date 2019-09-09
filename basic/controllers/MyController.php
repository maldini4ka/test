<?php


namespace app\controllers;


class MyController extends \yii\web\Controller{

        public function actionIndex($id=null){
            $hi = 'Hello, world!!!!!!!!!!!';
            $names = ['Ivan', 'Piotr', 'Vanya'];
            return $this->render('index',['hello'=>$hi, 'namer'=>$names,'id'=>$id]);
        }

}