<?php

namespace humhub\modules\hhcf\controllers;

use Yii;
// use humhub\modules\hhcf\models\ConfigureForm; // Markded out till directory is made!
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
