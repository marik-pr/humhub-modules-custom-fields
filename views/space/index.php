<?php
use yii\jui\DatePicker;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use humhub\modules\space\modules\manage\widgets\DefaultMenu;
?>

<div class="panel panel-default">
    <div>
        <div class="panel-heading">
            <?php echo Yii::t('SpaceModule.views_settings', '<strong>Space</strong> settings'); ?>
        </div>
    </div>

    <?= DefaultMenu::widget(['space' => $model]); ?>
    <div class="panel-body">

        <?php $form = ActiveForm::begin(['options' => ['id' => 'spaceIndexForm'], 'enableClientValidation' => false]); ?>
        <?php 

          ?>  
        <hr>
        <?php echo Yii::t('HhcfModule.Space', '<strong>Post...</strong>'); ?>
        <hr>

        <?php echo Html::submitButton(Yii::t('SpaceModule.views_admin_edit', 'Save'), array('class' => 'btn btn-primary', 'data-ui-loader' => '')); ?>

        <?php echo \humhub\widgets\DataSaved::widget(); ?>

        <?php ActiveForm::end(); ?>
    </div>

</div>