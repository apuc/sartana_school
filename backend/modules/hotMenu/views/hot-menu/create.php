<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\modules\hotMenu\models\HotMenu $model */

$this->title = 'Создать горячего меню';
$this->params['breadcrumbs'][] = ['label' => 'Горячее меню', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hot-menu-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
