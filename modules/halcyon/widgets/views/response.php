<?php
/**
 * @var $sectionResponses app\models\Config;
 */
foreach ($sectionResponses as $sectionResponse){ ?>
    <li>
        <?= $sectionResponse->text ?>
    </li>
<?php } ?>