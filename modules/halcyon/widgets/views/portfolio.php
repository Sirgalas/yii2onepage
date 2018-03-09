<?php
/**
 * @var $sectionPortfolio app\models\Config;
 * @var $portfolio app\models\Config;
 */
$count = 0;

?>
<li>
    <?php
        foreach ($sectionPortfolio as $portfolio) {
            $count++; ?>
            <div class="col-md-4 wp4 delay-1s">
                <div class="overlay-effect effects clearfix">
                    <div class="img">
                        <img src="<?= $portfolio->imagePath ?>" alt="Portfolio Item">
                        <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>
                        </div>
                    </div>
                </div>
                <?= $portfolio->text; ?>
            </div>
            <?php
            if ((($count % 3)==0)&&$count<count($sectionPortfolio)) { ?>
                </li>
                <li>
            <?php

        }
    }
?>
</li>

