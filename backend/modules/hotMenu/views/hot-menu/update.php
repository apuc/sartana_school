<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\modules\hotMenu\models\HotMenu $model */

$this->title = 'Изменить горячее меню: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Горячее меню', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="hot-menu-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
