<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>

<div class="panel panel-default">

    <div class="panel-heading"><?php echo Yii::t('HhcfModule.Base', '<strong>HHCF</strong> module configuration'); ?></div>

    <div class="panel-body">
        <?php $form = ActiveForm::begin(['id' => 'configure-form']); ?>

        <?php ActiveForm::end(); ?>
    </div>
</div>

