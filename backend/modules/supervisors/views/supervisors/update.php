<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\modules\supervisors\models\Supervisors $model */

$this->title = 'Измнеить руководителя: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Руководители', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="supervisors-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
