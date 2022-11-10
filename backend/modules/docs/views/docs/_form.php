<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\assets\BackendAsset;


/** @var yii\web\View $this */
/** @var backend\modules\docs\models\Docs $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="docs-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php $frontend = BackendAsset::register($this); ?>

    <?= $form->field($model, 'doc')->fileInput()->widget(FileInput::class, [
        'pluginOptions' => [
            'allowedFileExtensions'=>['docx', 'doc', 'pdf'],
            'showZoom' => false,
            'initialPreview' => [
                $model->doc != null ? Html::img($frontend->baseUrl .'/documents/'. $model->doc, ['class' => 'file-preview-image']):null,
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


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
