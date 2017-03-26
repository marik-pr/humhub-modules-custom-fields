<?php

namespace humhub\modules\hhfc;
use humhub\modules\space\models\Space;
use humhub\modules\user\models\User;
use humhub\modules\space\modules\manage\widgets;
use Yii;
use yii\helpers\Url;

class Events extends \yii\base\Object
{

    
    
    public static function onSpaceAdminInit($event)
    {
        if ($event->sender->space !== null && $event->sender->space->isModuleEnabled('hhfc') && $event->sender->space->isMember()) {
            $event->sender->addItem(array(
                'label' => Yii::t('HHCModule.Space', 'Custom Fields'),
                'url' => $event->sender->space->createUrl('/hhfc/space'),
                'sortOrder' => 300,
                'isActive' => (Yii::$app->controller->id == 'space' && Yii::$app->controller->action->id == 'index'),
            ));
        }
    }


}
