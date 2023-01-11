<?php

use backend\modules\supervisors\models\Supervisors;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\modules\supervisors\models\SupervisorsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Руководители';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supervisors-index">


    <p>
        <?= Html::a('Создать руководителя', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'job_title',
            'full_name',
            'phone',
            'email:email',
            'position',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Supervisors $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
