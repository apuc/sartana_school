<?php

namespace frontend\controllers;

use common\models\Docs;
use yii\web\NotFoundHttpException;

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
        $docs = \common\models\Docs::find()->all();
        return $this->render('documents', compact('docs'));
    }

    public function actionEducation()
    {
        return $this->render('education');
    }

    public function actionStaff()
    {
        $staff = \common\models\Teachers::find()->all();
        return $this->render('staff', compact('staff'));
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
        $menu = \common\models\HotMenu::find()->all();
        $answer = \common\models\Answers::find()->all();
        return $this->render('feed', compact('menu', 'answer'));
    }

    /**
     * @throws NotFoundHttpException
     * @throws \Exception
     */
    public function actionDocumentInstall($id) {
        $model = $this->findModel($id);
        $path = \Yii::getAlias('@frontend/web/uploads/documents/') ;
        $file = $path . $model->doc;

        if (file_exists($file)) {
            return \Yii::$app->response->sendFile($file);
        }
        throw new \Exception('File not found');
    }

    /**
     * @throws NotFoundHttpException
     */
    protected function findModel($id)
    {
        if (($model = Docs::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}