<?php 
use app\modules\halcyon\widgets\Menu;
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
    <section class="hero" id="hero" style="background: url('../img/hero-bg.jpg') no-repeat center center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-right navicon">
                    <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner">
                    <h1 class="animated fadeInDown">HALCYON<span>DAYS</span></h1>
                    <p class="animated fadeInUp delay-05s">An exclusive HTML5/CSS3 freebie for <em>Codrops</em></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <a href="http://tympanus.net/codrops/?p=19439" class="learn-more-btn">Back to the article</a>
                </div>
            </div>
        </div>
    </section>
</header>