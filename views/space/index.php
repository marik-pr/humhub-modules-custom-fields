<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use humhub\modules\space\modules\manage\widgets\DefaultMenu;

\humhub\modules\hhcf\assets\Assets::register($this);
?>

<div class="panel panel-default">
    <div>
        <div class="panel-heading">
            <?= Yii::t('SpaceModule.views_settings', '<strong>Space</strong> settings'); ?>
        </div>
    </div>

    <?= DefaultMenu::widget(['space' => $model]); ?>
    <div class="panel-body">
 
        <hr>
        <?= Yii::t('HhcfModule.Space', '<strong>Select template</strong>'); ?>
        <hr>
        <div class="template_box">
            <div class="template_select">-</div>
            <div class="template_add"><a href=""><?= Yii::t('HhcfModule.Space', '<strong>Add template</strong>'); ?></a></div>
        </div>

    </div>

</div>
