<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\assets\BackendAsset;

/** @var yii\web\View $this */
/** @var backend\modules\news\models\News $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->input('date') ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>
    <?php $frontend = BackendAsset::register($this); ?>
    <?= $form->field($model, 'image')->fileInput()->widget(FileInput::class, [

        'pluginOptions' => [
            'showZoom' => false,
            'initialPreview' => [
                $model->image != null ? Html::img($frontend->baseUrl .'/images/'. $model->image, ['class' => 'file-preview-image']):null,
            ],
            'overwriteInitial' => true,
            'showCaption' => false,
            'showUpload' => false,
            'showRemove' => true,
            'showDetails' => true,
            'browseClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="fa fa-camera"></i> ',
            'browseLabel' => 'Выберите фото',
        ],

    ]); ?>

    <?= $form->field($model, 'short_desc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
