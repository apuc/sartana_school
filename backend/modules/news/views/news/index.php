<?php

use backend\modules\news\models\News;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use backend\assets\BackendAsset;

/** @var yii\web\View $this */
/** @var backend\modules\news\models\NewsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Новости';
$frontend = BackendAsset::register($this);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">


    <p>
        <?= Html::a('Создать новость', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'prettyDate',
                'label' => 'Дата'
            ],
            'name',
            'text:ntext',
            [
                'attribute' => 'image',
                'value' => function($model) use ($frontend) {return $frontend->baseUrl . '/images/' . $model->image;},
                'format' => ['image', ['width' => 100, 'height' => 100]],
            ],
            'short_desc',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, News $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],

        ],
    ]); ?>


</div>