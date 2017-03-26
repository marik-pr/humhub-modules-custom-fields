<?php

use humhub\modules\content\widgets\WallEntryLinks;
use humhub\commands\IntegrityController;
use humhub\modules\space\widgets\Menu;
use humhub\modules\user\models\User;

return [
    'id' => 'hhfc',
    'class' => 'humhub\modules\hhfc\Module',
    'namespace' => 'humhub\modules\hhfc',
    'events' => array(
        ['class' => humhub\modules\space\modules\manage\widgets\DefaultMenu::className(), 'event' => humhub\modules\space\modules\manage\widgets\DefaultMenu::EVENT_INIT, 'callback' => ['humhub\modules\hhfc\Events', 'onSpaceAdminInit']],
        ),
];
?>
