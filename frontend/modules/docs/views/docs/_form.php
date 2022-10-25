<?php

use kartik\widgets\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\modules\docs\models\Docs $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="docs-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'doc')->fileInput()->widget(FileInput::class, [
        'pluginOptions' => [
            'allowedFileExtensions'=>['docx', 'doc', 'pdf'],
            'showZoom' => false,
            'initialPreview' => [
                $model->doc != null ? Html::img('@web/documents/' . $model->doc, ['class' => 'file-preview-image']):null,
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
