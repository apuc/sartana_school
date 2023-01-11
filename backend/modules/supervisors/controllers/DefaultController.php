<?php

namespace backend\modules\supervisors\controllers;

use yii\web\Controller;

/**
 * Default controller for the `supervisors` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
