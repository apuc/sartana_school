<?php

use backend\modules\feedback\models\Feedback;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\modules\feedback\models\FeedbackSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Вопросы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedback-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'email:email',
            'question:ntext',

            [
                'buttons' => [
                    'reply' => function ($url,$model,$key) {
                        return Html::a('Ответить', array('/answer/answers/create', 'id'=> $model->id), ['class' => 'btn btn-success btn-xs']);
             },
                ],
                'class' => ActionColumn::className(), 'template' => '{reply} {delete}',
                'urlCreator' => function ($action, Feedback $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
