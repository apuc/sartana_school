<?php

namespace backend\modules\news\controllers;

use backend\modules\news\models\News;
use backend\modules\news\models\NewsSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
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
     * Lists all News models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionShow()
    {
        $news = News::find()->all();
        return $this->render('index', compact('news'));
    }

    /**
     * Displays a single News model.
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
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost) {
            $model->load($this->request->post());
            $model->date = strtotime($model->date);
            $model->image = UploadedFile::getInstance($model, 'image');
            $model->image = UploadedFile::getInstance($model, 'preview');
            $model->image->saveAs("@frontend/web/uploads/images//{$model->image->baseName}.{$model->image->extension}");
            $model->image->saveAs("@frontend/web/uploads/images//{$model->preview->baseName}.{$model->preview->extension}");
            $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionCreate()
    {
        $model = new News();

        if ($this->request->isPost) {
            $model->load(Yii::$app->request->post());
//            echo "<pre>";
//            print_r($model);
//            die();
//            echo "</pre>";
            $model->date = strtotime($model->date);
            $model->image = UploadedFile::getInstance($model, 'image');
            $model->preview = UploadedFile::getInstance($model, 'preview');
            $model->image->saveAs("@frontend/web/uploads/images//{$model->image->baseName}.{$model->image->extension}");
            $model->preview->saveAs("@frontend/web/uploads/images//{$model->preview->baseName}.{$model->preview->extension}");
            $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }


    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
