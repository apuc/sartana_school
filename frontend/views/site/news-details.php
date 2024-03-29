<main class="newsDetails">
    <div class="newsDetails__introImg">
        <img src="/media/images/news-detailsIntro.jpg" alt="introImg" />
    </div>
    <div class="container">
        <section class="newsDetails__article article">
            <span class="article__date"><?=$item['prettyDate']?></span>
            <h1 class="article__title"><?=$item['name']?></h1>
            <div class="article__description">
                <p><?=$item['text']?></p>
            </div>
            <img class="article__img" src="/uploads/images/<?=$item['image']?>" alt="articleImg" />

        </section>

        <section class="newsDetails__relatedArticles relatedArticles">
            <h2 class="relatedArticles__title">Related articles</h2>
            <div class="relatedArticles__items">
                <?php
                foreach ($news as $content){
                ?>
                <div class="relatedArticles__item item">
                    <div class="item__imgContainer">
                        <?php
                        if($content['preview']){
                            ?>
                            <img class="item__img" src="/uploads/images/<?=$content['preview']?>" alt="img"/>
                            <?php
                        }else{
                            ?>
                            <img class="item__img" src="/uploads/images/<?=$content['image']?>" alt="img"/>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="item__date">
                        <span><?=$content['prettyDate']?></span>
                        <span>Добавлено</span>
                    </div>
                    <h4 class="item__title"><?=$content['name']?></h4>
                    <p class="item__description">
                        <?=$content['short_desc']?>
                    </p>


                    <a class="item__more" href="news?id=<?=$content['id']?>">
                        Continue reading<img src="/media/images/arrowRight.svg" alt="arrow" />
                    </a>
                </div>
                <?php
                }
                ?>
            </div>
        </section>
    </div>
</main>