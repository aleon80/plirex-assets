<?php
namespace plirex\assets;

class JQueryJcropAsset extends CoreAsset
{
    public $sourcePath = '@common/assets/components/jQueryJcrop';
    public $baseUrl = '@realPath';
    public $js = [
        'js/jquery.Jcrop.js',
    ];
    public $css = [
        'styles/jquery.Jcrop.css',
    ];
    public $depends = [
        'torgestva\assets\JQueryAsset',
    ];
}
