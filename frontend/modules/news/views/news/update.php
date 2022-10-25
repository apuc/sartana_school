<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\modules\news\models\News $model */

$this->title = 'Изменить новость: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Новость', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="news-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
