<?php

use Yii;
use humhub\modules\content\widgets\WallEntryLinks;
use humhub\commands\IntegrityController;
use humhub\modules\space\widgets\Menu;
use humhub\modules\user\models\User;

return [
    'id' => 'hhcf',
    'class' => 'humhub\modules\hhcf\Module',
    'namespace' => 'humhub\modules\hhcf',
    'events' => array(
        ['class' => humhub\modules\space\modules\manage\widgets\DefaultMenu::className(), 'event' => humhub\modules\space\modules\manage\widgets\DefaultMenu::EVENT_INIT, 'callback' => ['humhub\modules\hhcf\Events', 'onSpaceAdminInit']],
        ),
];
?>
