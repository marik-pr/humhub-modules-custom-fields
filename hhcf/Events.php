<?php

namespace humhub\modules\addfields;
use humhub\modules\space\models\Space;
use humhub\modules\user\models\User;
use humhub\modules\space\modules\manage\widgets;
use Yii;
use yii\helpers\Url;

class Events extends \yii\base\Object
{

    
    
    public static function onSpaceAdminInit($event)
    {
        if ($event->sender->space !== null && $event->sender->space->isModuleEnabled('addfields') && $event->sender->space->isMember()) {
            $event->sender->addItem(array(
                'label' => Yii::t('AddfieldsModule.Space', 'Additional fields'),
                'url' => $event->sender->space->createUrl('/addfields/space'),
                'sortOrder' => 300,
                'isActive' => (Yii::$app->controller->id == 'space' && Yii::$app->controller->action->id == 'index'),
            ));
        }
    }


}
