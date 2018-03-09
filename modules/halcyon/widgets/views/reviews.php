<?php
/**
 * @var $sectionPortfolio app\models\Config;
 * @var $portfolio app\models\Config;
 */
$count = 0;

?>
<li>
    <?php
        foreach ($sectionReviews as $reviews) {
            $count++; ?>
                <div class="col-md-4 wp5">
                    <?= \yii\helpers\Html:: img($reviews->imagePath) ?>
                    <?= $reviews->text; ?>
                </div>
            <?php
            if ((($count % 3)==0)&&$count<count($sectionReviews)) { ?>
                </li>
                <li>
            <?php
        }
    }
?>
</li>

