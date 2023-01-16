<main class="structure">
    <div class="container">
        <dl class="structure__list">
            <dt class="structure__title"><?=$model->title?></dt>
            <?php if ($model->text){
                echo $model->text;
            }else{
                echo ' Внедряем ФГОС';
            }
            ?>
        </dl>
    </div>
</main>