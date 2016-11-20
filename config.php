<?php

use humhub\modules\content\widgets\WallEntryLinks;
use humhub\commands\IntegrityController;
use humhub\modules\space\widgets\Menu;
use humhub\modules\user\models\User;

return [
    'id' => 'addfields',
    'class' => 'humhub\modules\addfields\Module',
    'namespace' => 'humhub\modules\addfields',
    'events' => array(
        ['class' => humhub\modules\space\modules\manage\widgets\DefaultMenu::className(), 'event' => humhub\modules\space\modules\manage\widgets\DefaultMenu::EVENT_INIT, 'callback' => ['humhub\modules\addfields\Events', 'onSpaceAdminInit']],
        ),
];
?>
