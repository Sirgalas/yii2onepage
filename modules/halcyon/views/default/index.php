<?php

use app\modules\halcyon\widgets\Icon;
use app\modules\halcyon\widgets\Response;
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
                    <li>
                        <div class="col-md-4 wp4">
                            <div class="overlay-effect effects clearfix">
                                <div class="img">
                                    <img src="img/portfolio-01.jpg" alt="Portfolio Item">
                                    <div class="overlay">
                                        <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                                        <a class="close-overlay hidden">x</a>
                                    </div>
                                </div>
                            </div>
                            <h2>Creative Minds</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        </div>
                        <div class="col-md-4 wp4 delay-05s">
                            <div class="overlay-effect effects clearfix">
                                <div class="img">
                                    <img src="img/portfolio-02.jpg" alt="Portfolio Item">
                                    <div class="overlay">
                                        <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                                        <a class="close-overlay hidden">x</a>
                                    </div>
                                </div>
                            </div>
                            <h2>Creative Hearts</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        </div>
                        <div class="col-md-4 wp4 delay-1s">
                            <div class="overlay-effect effects clearfix">
                                <div class="img">
                                    <img src="img/portfolio-03.jpg" alt="Portfolio Item">
                                    <div class="overlay">
                                        <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                                        <a class="close-overlay hidden">x</a>
                                    </div>
                                </div>
                            </div>
                            <h2>Creative Ideas</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-4 wp4">
                            <div class="overlay-effect effects clearfix">
                                <div class="img">
                                    <img src="img/portfolio-01.jpg" alt="Portfolio Item">
                                    <div class="overlay">
                                        <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                                        <a class="close-overlay hidden">x</a>
                                    </div>
                                </div>
                            </div>
                            <h2>Creative Minds</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        </div>
                        <div class="col-md-4 wp4 delay-05s">
                            <div class="overlay-effect effects clearfix">
                                <div class="img">
                                    <img src="img/portfolio-02.jpg" alt="Portfolio Item">
                                    <div class="overlay">
                                        <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                                        <a class="close-overlay hidden">x</a>
                                    </div>
                                </div>
                            </div>
                            <h2>Creative Hearts</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        </div>
                        <div class="col-md-4 wp4 delay-1s">
                            <div class="overlay-effect effects clearfix">
                                <div class="img">
                                    <img src="img/portfolio-03.jpg" alt="Portfolio Item">
                                    <div class="overlay">
                                        <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                                        <a class="close-overlay hidden">x</a>
                                    </div>
                                </div>
                            </div>
                            <h2>Creative Ideas</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="ignite-cta text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="#" class="ignite-btn">Ignite Your Passion</a>
            </div>
        </div>
    </div>
</div>
<section class="team text-center section-padding" id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="arrow">We're a team that adore what we do</h1>
            </div>
        </div>
        <div class="row">
            <div class="team-wrapper">
                <div id="teamSlider">
                    <ul class="slides">
                        <li>
                            <div class="col-md-4 wp5">
                                <img src="img/team-01.png" alt="Team Member">
                                <h2>Jon Snow</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                                <div class="social">
                                    <ul class="social-buttons">
                                        <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 wp5 delay-05s">
                                <img src="img/team-02.png" alt="Team Member">
                                <h2>Cersei Lannister</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                                <div class="social">
                                    <ul class="social-buttons">
                                        <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 wp5 delay-1s">
                                <img src="img/team-03.png" alt="Team Member">
                                <h2>Jamie Lannister</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                                <div class="social">
                                    <ul class="social-buttons">
                                        <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-4 wp5">
                                <img src="img/team-01.png" alt="Team Member">
                                <h2>Jon Snow</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                                <div class="social">
                                    <ul class="social-buttons">
                                        <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 wp5 delay-05s">
                                <img src="img/team-02.png" alt="Team Member">
                                <h2>Cersei Lannister</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                                <div class="social">
                                    <ul class="social-buttons">
                                        <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 wp5 delay-1s">
                                <img src="img/team-03.png" alt="Team Member">
                                <h2>Jamie Lannister</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                                <div class="social">
                                    <ul class="social-buttons">
                                        <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="subscribe text-center">
    <div class="container">
        <h1><i class="fa fa-paper-plane"></i><span>Subscribe to stay in the loop</span></h1>
        <form action="#">
            <input type="text" name="" value="" placeholder="" required>
            <input type="submit" name="" value="Send">
        </form>
    </div>
</section>
<section class="dark-bg text-center section-padding contact-wrap" id="contact">
    <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="arrow">Drop us a line</h1>
            </div>
        </div>
        <div class="row contact-details">
            <div class="col-md-4">
                <div class="light-box box-hover">
                    <h2><i class="fa fa-map-marker"></i><span>Address</span></h2>
                    <p>Level 6, 23 Pitt St, Sydney</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="light-box box-hover">
                    <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
                    <p>+61 9 211 3747</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="light-box box-hover">
                    <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
                    <p><a href="#">hey@halcyondays.com</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="social-buttons">
                    <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
