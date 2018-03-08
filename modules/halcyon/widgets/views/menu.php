<?php

/**
 * @var $config  app\models\Config;
 */

foreach ($config as $item){ ?>
    <li><a href="#<?= $item->item; ?>"><?= $item->text ?><span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
<?php } ?>