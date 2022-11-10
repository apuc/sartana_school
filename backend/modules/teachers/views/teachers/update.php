<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\modules\teachers\models\Teachers $model */

$this->title = 'Редактировать педагога: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Педагогический состав', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="teachers-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
