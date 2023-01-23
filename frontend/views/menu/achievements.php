<main class="structure">
    <div class="container">
        <dl class="structure__list">
            <dt class="structure__title"><?=$model->title?></dt>
            <style>
                tr{
                    border-width: 1px !important;
                }
                td{
                    border-width: 1px !important;
                }
            </style>
<?php if ($model->text){
    echo $model->text;
}else{
    echo 'Контент';
}
?>
</dl>
</div>
</main>
