<main class="structure">
    <div class="container">
        <dl class="structure__list">
            <dt class="structure__title">Организация питания в образовательной организации</dt>
            <dd>Меню ежедневного горячего питания;</dd>
            <?php

            use yii\helpers\Html;
            use yii\widgets\ActiveForm;

            if ($menu){
            foreach ($menu as $item) {
                ?>
                <p>
                    <?php echo "<h3>" . $item['name'] . "</h3>";
                    foreach ($item['dishes'] as $dish) {
                        echo $dish['name'] . ' | ' . $dish['amount'] . ' | ' . \common\models\Dish::getDietLabel()[$dish['is_diet']] . '</br>';
                    }
                    ?>
                </p>
                <img class="info__img" src="/uploads/images/<?= $item['image'] ?>" alt="img"/>
                <?php
            }
            }
            ?>
            <dd>Перечни юридических лиц и индивидуальных предпринимателей, оказывающих услуги по организации питания в
                общеобразовательной организации;
            </dd>
            <dd>Перечни юpидичecкиx лиц и индивидуальных предпринимателей, поставляющих (реализующих) пищевые продукты и
                продовольственное сырье в общеобразовательную организацию;
            </dd>
        </dl>
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'name')->textInput()->label('Имя, Фамилия'); ?>
        <?= $form->field($model, 'email')->input('email')->label('Адрес почты'); ?>
        <?= $form->field($model, 'question')->textarea(['rows' => 5])->label('Ваше сообщение'); ?>
        <?= Html::submitButton('Отправить', ['class' => 'form__btn']); ?>
        <?php ActiveForm::end(); ?>

        <div class="form__answers">
            <h3> Ответы на вопросы</h3>
            <?php
            echo '<div class="form__answer">';
            if ($answer){
                foreach ($answer as $item) {
                    echo "<p>" . 'Вопрос: ' . \common\models\Feedback::find('name')->where(['id' => $item['feedback_id']])->one()['question'] . "<p>".
                        'Ответ: ' . $item['answer'];
                }
            }
            echo '</div>
            </div>'
            ?>
    </div>
</main>