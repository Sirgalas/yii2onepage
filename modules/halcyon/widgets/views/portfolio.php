<?php
/**
 * @var $sectionPortfolio app\models\Config;
 */
foreach ($sectionPortfolio as $portfolio){ ?>
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
<?php } ?>