<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\assets\BackendAsset;

/** @var yii\web\View $this */
/** @var backend\modules\news\models\News $model */

$this->title = $model->name;
$frontend = BackendAsset::register($this);
$this->params['breadcrumbs'][] = ['label' => 'Новость', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="news-view">


    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Список', ['index', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите это удалить',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
        ],
    ]) ?>

</div>
