<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\modules\supervisors\models\Supervisors $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="supervisors-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'job_title')->dropDownList(\common\models\Supervisors::getPosition(),
        $params = [
            'prompt' => 'Должность...'
        ]) ?>
    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(),
        ['mask' => '+9 (999) 999-99-99',])->textInput(['maxlength' => true])
    ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
