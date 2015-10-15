<?php
namespace plirex\assets;

class jQueryJcropAsset extends CoreAsset
{
    public $sourcePath = '@plirex/assets/components/jQueryJcrop';
    public $baseUrl = '@realPath';
    public $js = [
        'js/jquery.Jcrop.js',
    ];
    public $css = [
        'styles/jquery.Jcrop.css',
    ];
    public $depends = [
        'torgestva\assets\jQueryAsset',
    ];
}
