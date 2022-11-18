<main class="structure">
    <div class="container">
        <dl class="structure__list">
            <dt class="structure__title">Организация питания в образовательной организации</dt>
            <dd>Меню ежедневного горячего питания;</dd>
            <?php
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
            <dd>
                <h3> Ответы на вопросы</h3>
                <?php
                if ($answer){
                foreach ($answer as $item) {
                    echo 'Вопрос: ' . \common\models\Feedback::find('name')->where(['id' => $item['feedback_id']])->one()['question'] . "<br>" .
                        'Ответ: ' . $item['answer'];
                }
                }
                ?>
            </dd>
        </dl>
    </div>
</main>