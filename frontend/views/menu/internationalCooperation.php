<main class="structure">
    <div class="container">
        <dl class="structure__list">
            <dt class="structure__title"><?=$model->title?></dt>
            <?php if ($model->text){
                echo $model->text;
            }else{
                echo 'Должна содержать информацию о заключенных и планируемых к заключению договорах с иностранными и (или) международными организациями по вопросам образования и науки (при наличии).';
            }
            ?>
        </dl>
    </div>
</main>