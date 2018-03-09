<?php
/**
 * @var $sectionIcon app\models\Config
 */
foreach ($sectionIcon as $section) { ?>
    <div class="col-md-4 wp2 delay-1s">
        <div class="icon">
            <i class="fa <?= $section->icon ?> shadow"></i>
        </div>
        <?= $section->text; ?>
    </div>
<?php } ?>