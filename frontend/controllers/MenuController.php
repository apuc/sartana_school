<?php

namespace frontend\controllers;

use common\models\Docs;
use yii\web\NotFoundHttpException;

class MenuController extends \yii\web\Controller
{
    public function actionBaseInfo()
    {
        $model = \common\models\Menu::find()->where(['page'=> 'base-info'])->one();
        return $this->render('baseInfo', compact('model'));
    }

    public function actionStructures()
    {
        $model = \common\models\Menu::find()->where(['page'=> 'structures'])->one();
        return $this->render('structures', compact('model'));
    }

    public function actionDocuments()
    {
        $docs = \common\models\Docs::find()->all();
        return $this->render('documents', compact('docs'));
    }

    public function actionEducation()
    {
        $model = \common\models\Menu::find()->where(['page'=> 'education'])->one();
        return $this->render('education', compact('model'));
    }

    public function actionStaff()
    {
        $staff = \common\models\Teachers::find()->all();
        return $this->render('staff', compact('staff'));
    }

    public function actionEquipment()
    {
        $model = \common\models\Menu::find()->where(['page'=> 'equipment'])->one();
        return $this->render('equipment', compact('model'));
    }

    public function actionSupport()
    {
        $model = \common\models\Menu::find()->where(['page'=> 'support'])->one();
        return $this->render('support', compact('model'));
    }

    public function actionPaidServices()
    {
        $model = \common\models\Menu::find()->where(['page'=> 'paid-services'])->one();
        return $this->render('paidServices', compact('model'));
    }

    public function actionEconomicActivity()
    {
        $model = \common\models\Menu::find()->where(['page'=> 'economic-activity'])->one();
        return $this->render('economicActivity', compact('model'));
    }

    public function actionVacancies()
    {
        $model = \common\models\Menu::find()->where(['page'=> 'vacancies'])->one();
        return $this->render('vacancies', compact('model'));
    }

    public function actionEnvironment()
    {
        $model = \common\models\Menu::find()->where(['page'=> 'vacancies'])->one();
        return $this->render('vacancies', compact('model'));
    }

    public function actionInternationalCooperation()
    {
        $model = \common\models\Menu::find()->where(['page'=> 'international-cooperation'])->one();
        return $this->render('internationalCooperation', compact('model'));
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