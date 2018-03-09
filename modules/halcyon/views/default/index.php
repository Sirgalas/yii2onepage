<?php

use app\modules\halcyon\widgets\Icon;
use app\modules\halcyon\widgets\Response;
use app\modules\halcyon\widgets\Portfolio;
use app\modules\halcyon\widgets\Reviews;
use app\models\Config;
?>
<section class="intro text-center section-padding" id="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 wp1">
                <?= Yii::$app->config->get('текст под шапкой') ?>
            </div>
        </div>
    </div>
</section>
<section class="features text-center section-padding" id="features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="arrow"><?= strip_tags(Yii::$app->config->get('загаловок секции с иконками')) ?></h1>
                <div class="features-wrapper">
                    <?= Icon::widget(); ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="text-center" id="responsive">
    <div class="container-fluid nopadding responsive-services">
        <div class="wrapper">
            <div class="iphone">
                <div class="wp3" style="background: url(<?= (new Config())->uploadPath().Yii::$app->config->get('картинка блока с условиями'); ?>) no-repeat center center;"></div>
            </div>
            <div class="fluid-white"></div>
        </div>
        <div class="container designs">
            <div class="row">
                <div class="col-md-5 col-md-offset-7">
                    <div id="servicesSlider">
                        <ul class="slides">
                            <?= Response::widget(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="swag text-center" style="background: url(<?= (new Config())->uploadPath().Yii::$app->config->get('перед каруселью'); ?>) no-repeat center center;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <?= Yii::$app->config->get('текст перед каруселью'); ?>
                <a href="#portfolio" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
            </div>
        </div>
    </div>
</section>
<section class="portfolio text-center section-padding" id="portfolio">
    <div class="container">
        <div class="row">
            <div id="portfolioSlider">
                <ul class="slides">
                    <?= Portfolio::widget(); ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="ignite-cta text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="<?= strip_tags(Yii::$app->config->get('ссылка между каруселями')); ?>" class="ignite-btn"><?= strip_tags(Yii::$app->config->get('текст ссылки между каруселями')); ?></a>
            </div>
        </div>
    </div>
</div>
<section class="team text-center section-padding" id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="arrow"><?= strip_tags(Yii::$app->config->get('Заголовок отзывы')) ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="team-wrapper">
                <div id="teamSlider">
                    <ul class="slides">
                        <?= Reviews::widget(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--<section class="subscribe text-center">
    <div class="container">
        <h1><i class="fa fa-paper-plane"></i><span>Subscribe to stay in the loop</span></h1>
        <form action="#">
            <input type="text" name="" value="" placeholder="" required>
            <input type="submit" name="" value="Send">
        </form>
    </div>
</section>-->
<section class="dark-bg text-center section-padding contact-wrap" id="contact">
    <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="arrow"><?= strip_tags(Yii::$app->config->get('загаловок контактов')); ?></h1>
            </div>
        </div>
        <div class="row contact-details">
            <div class="col-md-4">
                <div class="light-box box-hover">
                    <h2><i class="fa fa-map-marker"></i><span>Адрес</span></h2>
                    <?= strip_tags(Yii::$app->config->get('адрес')); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="light-box box-hover">
                    <h2><i class="fa fa-mobile"></i><span>Телефон</span></h2>
                    <?= strip_tags(Yii::$app->config->get('телефон')); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="light-box box-hover">
                    <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
                    <p><a href="milto:<?= strip_tags(Yii::$app->config->get('email')); ?>"><?= strip_tags(Yii::$app->config->get('email')); ?></a></p>
                </div>
            </div>
        </div>
    </div>
</section>
