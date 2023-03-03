<?php

use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\EducationalWork $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="educational-work-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false,
        ],
    ]);
    ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput(['value' => '@frontend/web' . $model->image])->widget(FileInput::class, [
//        'value'=>$model->image,
        'pluginOptions' => [
            'showZoom' => false,
            'initialPreview' => [
                $model->image != null ? Html::img($model->image, ['class' => 'file-preview-image']):null,
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

    <?= $form->field($model, 'video')->fileInput()->widget(FileInput::class, [
        'value' => $model->video,
        'pluginOptions' => [
            'showZoom' => false,
            'initialPreview' => [
                $model->video != null ? Html::img($model->video, ['class' => 'file-preview-image']):null,
            ],
            'overwriteInitial' => true,
            'showCaption' => false,
            'showUpload' => false,
            'showRemove' => true,
            'showDetails' => true,
            'browseClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="fa fa-camera"></i> ',
            'browseLabel' => 'Выберите видео',
        ],

    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
