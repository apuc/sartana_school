<?php

use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\elfinder\ElFinder;


mihaildev\elfinder\Assets::noConflict($this);
/** @var yii\web\View $this */
/** @var backend\modules\menuEducation\models\MenuEducationSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Редактор страниц'?>

<?php
$form = ActiveForm::begin();
echo $form->field($model, 'title')->widget(CKEditor::className(), [
    'editorOptions' => [
        'preset' => 'full',
        'inline' => false,
    ],
]);

//echo $form->field($model, 'text')->widget(CKEditor::className(), [
//    'editorOptions' => [
//        'preset' => 'full',
//        'inline' => false,
//    ],
//]);
echo $form->field($model, 'text')->widget(CKEditor::className(), [
    'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
        'onlyMimes' => ['']
    ]),
]);
?>
    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end(); ?>