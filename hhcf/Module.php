<?php

namespace humhub\modules\addfields;
use Yii;
use humhub\modules\space\models\Space;
use humhub\modules\content\components\ContentContainerActiveRecord;
use humhub\modules\content\components\ContentContainerModule;

class Module extends ContentContainerModule
{

/**
     * @inheritdoc
     */
    public function getContentContainerTypes()
    {
        return [
            Space::className(),
        ];
    }

       public function getContentContainerName(ContentContainerActiveRecord $container)
    {
        return Yii::t('AddfieldsModule.Space', 'Additional fields');
    }

    public function getContentContainerDescription(ContentContainerActiveRecord $container)
    {
        return Yii::t('AddfieldsModule.Space', 'Adds additional fields to this space');
    }
}
