<main class="structure">
    <div class="container">
        <dl class="structure__list">
            <dt class="structure__title">Документы:</dt>
            <?php

            use yii\helpers\Html;

            foreach ($docs as $item) {
                ?>
                <dd><?= Html::a($item['doc'] . ';', array('menu/document-install', 'id' => $item['id'])); ?></dd>
                <?php
            }
            ?>
        </dl>
    </div>
</main>
