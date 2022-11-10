<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\modules\teachers\models\Teachers $model */

$this->title = 'Создать педагога';
$this->params['breadcrumbs'][] = ['label' => 'Педагогический состав', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teachers-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
