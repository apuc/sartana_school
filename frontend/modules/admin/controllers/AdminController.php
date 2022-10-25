<?php

namespace frontend\modules\admin\controllers;

class AdminController extends \yii\base\Controller
{
    public function actionIndex(){
        $this->render('index');
    }
}