<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\modules\docs\models\Docs $model */

$this->title = 'Добавить документ';
$this->params['breadcrumbs'][] = ['label' => 'Документы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="docs-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
