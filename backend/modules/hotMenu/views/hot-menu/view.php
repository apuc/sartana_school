<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\assets\BackendAsset;


/** @var yii\web\View $this */
/** @var backend\modules\hotMenu\models\HotMenu $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Горячее питание', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
$frontend = BackendAsset::register($this);

?>

<div class="hot-menu-view">

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Список', ['index', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>


    <?=
    $content = '';

    foreach($model->findDish($model->id) as $item) {
        $content .= DetailView::widget([
            'model' => $item,
            'attributes' => [
                'name',
                [
                    'attribute' => 'is_diet',
                    'value' => function($model){
                        return \common\models\Dish::getDietLabel()[$model->is_diet];
                    }
                ],
                'amount',
            ]
        ]);
    }

    echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => $model->name,
                'format' => 'raw',
                'value' => $content,
            ],
        ],
    ]);
    ?>

</div>
