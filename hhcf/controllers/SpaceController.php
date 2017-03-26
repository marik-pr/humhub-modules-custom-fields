<?php
namespace humhub\modules\hhfc\controllers;
use Yii;
use humhub\modules\space\modules\manage\components\Controller;
use humhub\modules\space\modules\manage\models\DeleteForm;
use humhub\modules\space\models\SpacePages;

class SpaceController extends \humhub\modules\space\modules\manage\controllers\DefaultController
{
    public function actionIndex()
    {
        $space = $this->contentContainer;
        $space->scenario = 'edit';

        if ($space->load(Yii::$app->request->post()) && $space->validate() && $space->save()) {
            Yii::$app->getSession()->setFlash('data-saved', Yii::t('SpaceModule.controllers_AdminController', 'Saved'));
            return $this->redirect($space->createUrl('index'));
        }
        return $this->render('index', ['model' => $space]);
    }
}


?>