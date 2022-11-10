<?php

use backend\modules\teachers\models\Teachers;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\modules\teachers\models\TeachersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Педагогический состав';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teachers-index">


    <p>
        <?= Html::a('Создать педагога', ['create'], ['class' => 'btn btn-success']) ?>
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
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Teachers $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
