<?php

namespace humhub\modules\hhcf\controllers;

use Yii;
use humhub\models\Setting;
use humhub\modules\admin\components\Controller;;

/**
 * ConfigController handles the configuration requests.
 */
class ConfigController extends Controller
{

    /**
     * Configuration action for super admins.
     */
    public function actionIndex()
    {
        
        
        return $this->render('index');
    }

}
