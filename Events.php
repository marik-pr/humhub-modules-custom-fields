<?php

namespace humhub\modules\hhcf;

use Yii;
use yii\helpers\Url;
use yii\base\Object
use humhub\modules\space\models\Space;
use humhub\modules\user\models\User;
use humhub\modules\space\modules\manage\widgets;

class Events extends Object
{

    public static function onSpaceAdminInit($event)
    {
        if ($event->sender->space !== null && $event->sender->space->isModuleEnabled('hhcf') && $event->sender->space->isMember()) {
            $event->sender->addItem(array(
                'label' => Yii::t('HhcfModule.Space', 'Custom Fields'),
                'url' => $event->sender->space->createUrl('/hhcf/space'),
                'sortOrder' => 300,
                'isActive' => (Yii::$app->controller->id == 'space' && Yii::$app->controller->action->id == 'index'),
            ));
        }
    }


}
