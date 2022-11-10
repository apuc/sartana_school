<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\modules\answer\models\Answers $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="answers-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php if ($_GET['id']){
        $model->feedback_id = $_GET['id'];
    }?>
    <?= $form->field($model, 'feedback_id')->dropDownList(

        \common\models\Feedback::getList(),
        $params = [
            'prompt' => 'Выберите вопрос...'
        ]
    ) ?>

    <?= $form->field($model, 'answer')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
