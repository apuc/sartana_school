<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\modules\supervisors\models\Supervisors $model */

$this->title = 'Создать руководителя';
$this->params['breadcrumbs'][] = ['label' => 'Supervisors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supervisors-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
