<?php

use frontend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header class="header" >
    <a class="header__logo" href="/">
        <img src="/media/images/school-logo.jpg" alt="logo"/>
        <div style="margin-left: 100px;" class="header__logoText">
            <h2>Sartana School</h2>
            <p>Opportunites for all to excel</p>
        </div>
    </a>
    <nav class="header__navigation">
        <span class="header__burger"></span>
        <ul class="header__navigationMain">
            <li class="header__navigationMain__item"><a href="/" class="navItem">Главная</a></li>
            <li class="header__navigationMain__item informationItem"><a class="navItem more">Сведения</a>
                <div class="header__navigationMain__dropdown">
                    <?= Html::a('Основные сведения', ['menu/base-info']);?>
                    <?= Html::a('Структура и органы управления', ['menu/structures']);?>
                    <?= Html::a('Образование', ['menu/education']);?>
                    <?= Html::a('документы', ['menu/documents']);?>
                    <?= Html::a('Руководство. Педагогический состав', ['menu/staff']);?>
                    <?= Html::a('Материально - техническое обеспечение и оснащенность', ['menu/equipment']);?>
                    <?= Html::a('Стипендии и меры поддержки', ['menu/support']);?>
                    <?= Html::a('Платные образовательные услуги', ['menu/paid-services']);?>
                    <?= Html::a('Финансово- хозяйственная деятельность', ['menu/economic-activity']);?>
                    <?= Html::a('Вакантные места', ['menu/vacancies']);?>
                    <?= Html::a('Доступная среда', ['menu/environment']);?>
                    <?= Html::a('Международное сотрудничество', ['menu/international-cooperation']);?>
                    <?= Html::a('Организация питания', ['menu/feed']);?>
                    <?= Html::a('Внедряем ФГОС', ['menu/fgos']);?>
                    <?= Html::a('Государственная итоговая аттестация (ГИА) - 2023', ['menu/gia']);?>
                </div>
            </li>
        </ul>
    </nav>
</header>

<?= $content?>

<footer class="footer">
    <div class="footer__content">
<!--        <div class="footer__awards">-->
<!--            <h4>We're proud to be recognised...</h4>-->
<!--            <div class="awards">-->
<!--                <a class="award">-->
<!--                    <img src="/media/images/footerAwards.png" alt="img"/>-->
<!--                </a>-->
<!--                <a class="award">-->
<!--                    <img src="/media/images/footerAwards.png" alt="img"/>-->
<!--                </a>-->
<!--                <a class="award">-->
<!--                    <img src="/media/images/footerAwards.png" alt="img"/>-->
<!--                </a>-->
<!--                <a class="award">-->
<!--                    <img src="/media/images/footerAwards.png" alt="img"/>-->
<!--                </a>-->
<!--                <a class="award">-->
<!--                    <img src="/media/images/footerAwards.png" alt="img"/>-->
<!--                </a>-->
<!--                <a class="award">-->
<!--                    <img src="/media/images/footerAwards.png" alt="img"/>-->
<!--                </a>-->
<!--                <a class="award">-->
<!--                    <img src="/media/images/footerAwards.png" alt="img"/>-->
<!--                </a>-->
<!--                <a class="award">-->
<!--                    <img src="/media/images/footerAwards.png" alt="img"/>-->
<!--                </a>-->
<!--                <a class="award">-->
<!--                    <img src="/media/images/footerAwards.png" alt="img"/>-->
<!--                </a>-->
<!--                <a class="award">-->
<!--                    <img src="/media/images/footerAwards.png" alt="img"/>-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="footer__nav">-->
<!--            <nav class="navigation-footer">-->
<!--                <ul class="navigation-footerList">-->
<!--                    <li class="navigation-footerListItem"><a>Privacy policy</a></li>-->
<!--                    <li class="navigation-footerListItem"><a>Logins</a></li>-->
<!--                    <li class="navigation-footerListItem"><a>Vacancies</a></li>-->
<!--                    <li class="navigation-footerListItem"><a>Virtual Tour</a></li>-->
<!--                </ul>-->
<!--            </nav>-->
<!--        </div>-->
        <div class="footer__social">
            <a href="https://vk.com/club217039218" target="_blank"><img src="/media/images/vk.png" alt="vk"/></a>
        </div>
        <div class="footer__bottom">
            <span>© 2022 Sartana School. All rights reserved.</span>
        </div>
    </div>
</footer>
<script>
    const burger = document.querySelector('.header__burger');
    const navBar = document.querySelector('.header__navigationMain');
    const informationHeaderItem = document.querySelector('.informationItem')
    burger.addEventListener('click', ()=> {
        burger.classList.toggle('header__burger--open');
        navBar.classList.toggle('header__navigationMain--open');
    })

    informationHeaderItem.addEventListener('click', ()=> {
        informationHeaderItem.classList.toggle('informationItem--open');
    })
    const closeByClickingOut = function (event) {
        if (event && !event.path.find((div) => div.classList && (div.classList.contains('header__navigationMain__dropdown') || div.classList.contains('informationItem')))) {
            informationHeaderItem.classList.remove('informationItem--open')
        }
    }
    document.addEventListener('click', closeByClickingOut)
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
