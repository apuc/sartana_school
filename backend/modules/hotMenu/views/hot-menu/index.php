<?php

use backend\modules\hotMenu\models\HotMenu;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use backend\assets\BackendAsset;


/** @var yii\web\View $this */
/** @var backend\modules\hotMenu\models\HotMenuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Горячее питание';
$frontend = BackendAsset::register($this);
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="hot-menu-index">

    <p>
        <?= Html::a('Создать меню', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            [
                'attribute' => 'image',
                'value' => function($model) use ($frontend) {return $frontend->baseUrl . '/images/' . $model->image;},
                'format' => ['image', ['width' => 100, 'height' => 100]],
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, HotMenu $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
