<?php
namespace plirex\assets\src;

use Yii;
use yii\web\AssetBundle;

class CoreAsset extends AssetBundle
{
    public function init()
    {
        Yii::setAlias('@plirex', dirname(__DIR__).'/../');
        parent::init();
    }
}