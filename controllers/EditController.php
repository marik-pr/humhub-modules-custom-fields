<?php

namespace humhub\modules\hhcf\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use humhub\modules\admin\components\Controller;
use humhub\modules\hhcf\models\CFTemplate;
use humhub\models\Setting;

class EditController extends Controller
{

    /**
     * Configuration action for super admins.
     */
    public function actionIndex()
    {
        $model = new CFTemplate();
        return $this->render('edit');
    }

}

