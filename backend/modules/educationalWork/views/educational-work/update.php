<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\EducationalWork $model */

$this->title = 'Редактировать воспитательную работу: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Воспитательные работы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="educational-work-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
