<?php

namespace frontend\controllers;

use backend\modules\feedback\models\Feedback;
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
        $director = \common\models\Supervisors::find()->where(['job_title'=> 'Директор'])->all();
        $headTeacher = \common\models\Supervisors::find()->where(['job_title'=> 'Завуч'])->all();
        return $this->render('staff', compact('staff', 'director', 'headTeacher'));
    }

    public function actionEquipment()
    {
        $model = \common\models\Menu::find()->where(['page'=> 'equipment'])->one();
        return $this->render('equipment', compact('model'));
    }

    public function actionGia()
    {
        $model = \common\models\Menu::find()->where(['page'=> 'gia'])->one();
        return $this->render('gia', compact('model'));
    }

    public function actionFgos()
    {
        $model = \common\models\Menu::find()->where(['page'=> 'fgos'])->one();
        return $this->render('fgos', compact('model'));
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
        $model = \common\models\Menu::find()->where(['page'=> 'environment'])->one();
        return $this->render('environment', compact('model'));
    }

    public function actionInternationalCooperation()
    {
        $model = \common\models\Menu::find()->where(['page'=> 'international-cooperation'])->one();
        return $this->render('internationalCooperation', compact('model'));
    }

    public function actionFeed()
    {
        $model = new \common\models\Feedback();
        $menu = \common\models\HotMenu::find()->all();
        $answer = \common\models\Answers::find()->all();
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['feed']);
            }
        } else {
            $model->loadDefaultValues();
        }
        return $this->render('feed', compact('menu', 'answer', 'model'));
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