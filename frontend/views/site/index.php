<?php

/** @var yii\web\View $this */

$this->title = Yii::$app->name;
?>

<main>
    <div class="container">
        <section class="intro">
            <h1 class="intro__title">Strathallan Prep School</h1>
            <h3 class="intro__subtitle">Where confidence is gently nurtured...</h3>
            <p class="intro__info">Discreetly set within Strathallan’s 153 acres of safe, rural campus, with its own
                classrooms, social areas and outdoor space, Strathallan Prep is a small, close community that also
                benefits from access to the extensive facilities of the whole School.</p>
            <p class="intro__subInfo">With pupils joining us from the local community and from all over the world,
                we take our responsibility as a fun, supportive home-from-home very seriously.</p>
            <a class="intro__about">Download the Prep School Prospectus</a>
            <a class="intro__about">Register for our next Open Morning</a>
        </section>

        <?php
        foreach ($news as $item){

        ?>

        <section class="info">
            <h2 class="info__title"><?=$item['name']?></h2>
            <div class="info__text">
                <span>
                    <?=$item['short_desc']?>
                </span>
            </div>
            <a class="info__more">Learn more about <?=$item['name']?>.</a>
            <img class="info__img" src="./uploads/images/<?=$item['image']?>" alt="img"/>
        </section>

        <?php
        }
        ?>

    </div>
    <div class="join">
        <div class="join__container">
            <h3 class="join__title">Join us</h3>
            <p class="join__subtitle">Take your first steps to joining the Strathallan family.</p>
            <div class="join__links">
                <a class="join__link">Request a prospectus</a>
                <a class="join__link">Make an admissions enquiry</a>
                <a class="join__link">Arrange to visit us</a>
            </div>
        </div>
    </div>
</main>
<aside class="contact">
    <img src="media/images/contact.svg" alt="img" />
</aside>