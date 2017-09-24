<?php

namespace humhub\modules\hhcf;
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
        return Yii::t('HhcfModule.Space', 'Custom Fields');
    }

    public function getContentContainerDescription(ContentContainerActiveRecord $container)
    {
        return Yii::t('HhcfModule.Space', 'Adds custom fields to this space');
    }
}