<?php

namespace backend\modules\hotMenu\controllers;

use backend\modules\hotMenu\models\HotMenu;
use backend\modules\hotMenu\models\HotMenuSearch;
use common\models\Dish;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * HotMenuController implements the CRUD actions for HotMenu model.
 */
class HotMenuController extends Controller
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
     * Lists all HotMenu models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new HotMenuSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HotMenu model.
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
     * Creates a new HotMenu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new HotMenu();

        if ($this->request->isPost) {
            $model->load(Yii::$app->request->post());
            $model->dishes = \yii\helpers\Json::encode($model->dishes);
            $model->image = UploadedFile::getInstance($model, 'image');
            $model->image->saveAs("@frontend/web/uploads/images//{$model->image->baseName}.{$model->image->extension}");
            $model->save(false);
            $this->createDish($model);
            return $this->render('view', [
                    'model' => $model,
                ]

            );
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function createDish($model, $update = null)
    {
        $updateCalc = 0;
        $model->dishes = \yii\helpers\Json::decode($model->dishes);
        foreach ($model->dishes as $item) {
            if ($update == null) {
                $dishModel = new Dish();
                $this->saveDishes($model, $dishModel, $item);

            } else {
                $dishModel = (new \common\models\HotMenu)->findDish($model->id);
                $this->saveDishes($model, $dishModel[$updateCalc], $item);
                echo $updateCalc;
                $updateCalc ++;
            }
        }
    }

    public
    function saveDishes($model, $dishModel, $item)
    {
        $dishModel->name = $item['name'];
        $dishModel->amount = $item['amount'];
        if (is_array($dishModel->is_diet)) {
            $dishModel->is_diet = $item['is_diet'][0];
        } else {
            $dishModel->is_diet = $item['is_diet'];
        }
        $dishModel->menu_id = $model->id;
        $dishModel->save();
    }

    /**
     * Updates an existing HotMenu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public
    function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
            $model->dishes = \yii\helpers\Json::encode($model->dishes);
            $model->save();
            $this->createDish($model, 1);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing HotMenu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public
    function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * @throws NotFoundHttpException
     */
    protected
    function findDishModel($id)
    {
        if (($model = Dish::findOne(['menu_id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Finds the HotMenu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return HotMenu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected
    function findModel($id)
    {
        if (($model = HotMenu::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
