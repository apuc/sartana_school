<?php

namespace frontend\controllers;

class MenuController extends \yii\web\Controller
{
    public function actionBaseInfo()
    {
        return $this->render('baseInfo');
    }

    public function actionStructures()
    {
        return $this->render('structures');
    }

    public function actionDocuments()
    {
        return $this->render('documents');
    }

    public function actionEducation()
    {
        return $this->render('education');
    }

    public function actionStaff()
    {
        return $this->render('staff');
    }

    public function actionEquipment()
    {
        return $this->render('equipment');
    }

    public function actionSupport()
    {
        return $this->render('support');
    }

    public function actionPaidServices()
    {
        return $this->render('paidServices');
    }

    public function actionEconomicActivity()
    {
        return $this->render('economicActivity');
    }

    public function actionVacancies()
    {
        return $this->render('vacancies');
    }

    public function actionEnvironment()
    {
        return $this->render('environment');
    }

    public function actionInternationalCooperation()
    {
        return $this->render('environment');
    }

    public function actionFeed()
    {
        return $this->render('feed');
    }
}