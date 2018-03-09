<?php 
use app\modules\halcyon\widgets\Menu;
use app\models\Config;
?>

<header id="home">
    <nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                    <nav class="pull">
                        <ul class="top-nav">
                            <?= Menu::widget() ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </nav>
    <section class="hero" id="hero" style="background: url(<?= (new Config())->uploadPath().Yii::$app->config->get('headerImage')?>) no-repeat center center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-right navicon">
                    <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner">
                    <?= Yii::$app->config->get('шапка'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <a class="learn-more-btn" href="<?= strip_tags(Yii::$app->config->get('ссылка шапки')); ?>"><?= strip_tags(Yii::$app->config->get('ссылка текст шапки')); ?></a>
                </div>
            </div>
        </div>
    </section>
</header>