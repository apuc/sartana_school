<?php

namespace backend\modules\educationalWork\controllers;

use common\models\EducationalWork;
use app\modules\educationalWork\models\EducationalWorkSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * EducationalWorkController implements the CRUD actions for EducationalWork model.
 */
class EducationalWorkController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all EducationalWork models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new EducationalWorkSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EducationalWork model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new EducationalWork model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new EducationalWork();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->imageFile = UploadedFile::getInstance($model, 'image');
                $model->videoFile = UploadedFile::getInstance($model, 'video');
                $model->upload();
                if ($model->save(false))
                    return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing EducationalWork model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost) {
            if ($model->image)
                unlink(Yii::getAlias('@frontend') . '/web' . $model->image);
            if ($model->video)
                unlink(Yii::getAlias('@frontend') . '/web' . $model->video);
            if ($model->load($this->request->post())) {
                $model->imageFile = UploadedFile::getInstance($model, 'image');
                $model->videoFile = UploadedFile::getInstance($model, 'video');
                $model->upload();
//                $model->validate();
//                print_r($model->errors);die();

                if ($model->save(false))
                    return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing EducationalWork model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        if ($model->image)
            unlink(Yii::getAlias('@frontend') . '/web' . $model->image);
        if ($model->video)
            unlink(Yii::getAlias('@frontend') . '/web' . $model->video);
        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EducationalWork model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return EducationalWork the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = EducationalWork::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
