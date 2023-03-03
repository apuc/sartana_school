<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\EducationalWork $model */

$this->title = 'Добавить воспитательную работу';
$this->params['breadcrumbs'][] = ['label' => 'Воспитательные работы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="educational-work-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
