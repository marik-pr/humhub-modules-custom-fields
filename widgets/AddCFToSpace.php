<?php

namespace humhub\modules\hhcf\widgets;

use Yii;
use humhub\components\Widget;

class AddfieldToSpace extends Widget
{

    public $name;
    public $showTitle;

    public function run()
    {
        return $this->render('AddCFToSpace');
    }

}

?>
