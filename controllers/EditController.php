<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace humhub\modules\hhcf\controllers;

use Yii;
use humhub\modules\cfiles\models\ConfigureForm;
use humhub\models\Setting;


class EditController extends \humhub\modules\admin\components\Controller
{

    /**
     * Configuration action for super admins.
     */
    public function actionIndex()
    {
        

        return $this->render('index');
    }

}

?>