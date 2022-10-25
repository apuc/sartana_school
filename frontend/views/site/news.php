<main>
    <div class="container">
        <?php

        foreach ($news as $item){

        ?>
        <section class="news__section section">
            <div class="section__card">
                <div class="section__intro">
                    <h3 class="section__introTitle"><?=$item['short_desc']?></h3>
                    <div class="section__infoDate">
                        <span class="date"><?=$item['prettyDate']?></span>
                        <span class="category">Sports</span>
                    </div>
                </div>
                <div class="section__img">
                    <img class="section__introImg" src="/uploads/images/<?=$item['image']?>" alt="img" />
                </div>
            </div>
        </section>
            <?php
        }
        ?>
        <button class="moreNews">Load More</button>
    </div>
</main>
<aside class="contact">
    <img src="/media/images/contact.svg" alt="img" />
</aside>
