<?php

use kartik\file\FileInput;
use unclead\multipleinput\MultipleInput;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\assets\BackendAsset;


/** @var yii\web\View $this */
/** @var backend\modules\hotMenu\models\HotMenu $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="hot-menu-form">
    <?php $frontend = BackendAsset::register($this); ?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model,'dishes')->widget(MultipleInput::class,[
    'min' => 1,
    'max' => 5,
    'addButtonOptions' => [
        'class' => 'btn btn-success',
        'label' => 'Добавить'
    ],
    'removeButtonOptions' => [
        'label' => 'Удалить'
    ],
    'columns' => [

        [
            'name'  => 'name',
            'type'  => 'textInput',
            'title' => 'Название блюда',
        ],
        [
            'name'  => 'amount',
            'title' => 'Количество',
            'type' => 'textInput',
        ],
        [
            'name'  => 'is_diet',
            'type' => 'checkbox',
            'title' => 'Диетическое',
            'items' => ['uncheck' => 0, 'value' => 1, 'label' => 'Диетическое'],
        ],
    ]

    ])->label(false);?>

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

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
