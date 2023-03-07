<?php

use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\EducationalWork $model */
/** @var yii\widgets\ActiveForm $form */
//print_r(Yii::getAlias('@frontend').'/web'.$model->image);die();
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

    <?=InputFile::widget([
        'language' => 'ru',
        'controller' => 'elfinder',
        // вставляем название контроллера, по умолчанию равен elfinder
        'filter' => 'image',
        // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-con..
        'name' => 'EducationalWork[image]',
        'id' => 'educational-work-image',
        'template' => '<div class="input-group">{input}<span class="span-btn">{button}</span></div>',
        'options' => ['class' => 'form-control itemImg', 'maxlength' => '255'],
        'buttonOptions' => ['class' => 'btn btn-primary'],
        'value' => $model->image,
        'buttonName' => 'Выбрать фотографию',
    ]);
    ?>
    <?=InputFile::widget([
        'language' => 'ru',
        'controller' => 'elfinder',
        // вставляем название контроллера, по умолчанию равен elfinder
//        'filter' => 'video',
        // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-con..
        'name' => 'EducationalWork[video]',
        'id' => 'educational-work-video',
        'template' => '<div class="input-group">{input}<span class="span-btn">{button}</span></div>',
        'options' => ['class' => 'form-control itemImg', 'maxlength' => '255'],
        'buttonOptions' => ['class' => 'btn btn-primary'],
        'value' => $model->video,
        'buttonName' => 'Выбрать видео',
    ]);
    ?>


    <!--    --><?php //= $form->field($model, 'image')->fileInput()->widget(FileInput::class, [
////        'options' => [
////            'value' => $model->image,
////        ],
////        'name' => 'EducationalWork[image]',
//        'pluginOptions' => [
//            'showZoom' => false,
//            'initialPreview' => [
//                $model->image != null ? Html::img($model->image, ['class' => 'file-preview-image']) : null,
//            ],
//            'overwriteInitial' => true,
//            'showCaption' => false,
//            'showUpload' => false,
//            'showRemove' => true,
//            'showDetails' => true,
//            'browseClass' => 'btn btn-primary btn-block',
//            'browseIcon' => '<i class="fa fa-camera"></i> ',
//            'browseLabel' => 'Выберите фото',
//        ],
//
//    ]); ?>

<!--    --><?php //= $form->field($model, 'video')->fileInput()->widget(FileInput::class, [
//        'pluginOptions' => [
//            'showZoom' => false,
//            'initialPreview' => [
//                $model->video != null ? Html::img($model->video, ['class' => 'file-preview-image']) : null,
//            ],
//            'overwriteInitial' => true,
//            'showCaption' => false,
//            'showUpload' => false,
//            'showRemove' => true,
//            'showDetails' => true,
//            'browseClass' => 'btn btn-primary btn-block',
//            'browseIcon' => '<i class="fa fa-camera"></i> ',
//            'browseLabel' => 'Выберите видео',
//        ],
//
//    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
