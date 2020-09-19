<?php


namespace frontend\controllers;


use yii\web\Controller;

class DemoController extends Controller
{
    public function actionIndex(){
        return $this->render('index',[]);
    }
}