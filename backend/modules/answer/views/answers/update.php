<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\modules\answer\models\Answers $model */

$this->title = 'Изменить ответ ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'ОТветы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="answers-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
