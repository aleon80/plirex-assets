<?php
namespace plirex\assets;

use Yii;
use yii\web\AssetBundle;

class CoreAsset extends AssetBundle
{
    public function init()
    {
        Yii::setAlias('@plirex', dirname(__DIR__).'/../');
        echo Yii::getAlias('@plirex');
        parent::init();
    }
}