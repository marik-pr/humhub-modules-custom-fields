<?php

namespace humhub\modules\hhcf\assets;

use yii\web\AssetBundle;

class Assets extends AssetBundle{
    public $publishOptions = [
        'forceCopy' => true,
        'linkAssets' =>true
    ];
    
    public $css = [
        'css/hhcf.css',
    ];
    
    public $jsOptions = [
        'position' => \yii\web\View::POS_BEGIN
    ];
    
    public $js = [
    ];

    public function init()
    {
        $this->sourcePath = dirname(dirname(__FILE__)) . '/resources';
        parent::init();
    }
}
