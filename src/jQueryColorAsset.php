<?php
namespace plirex\assets;

class jQueryColorAsset extends CoreAsset
{
    public $sourcePath = '@plirex/assets/components/jQueryColor';
    public $baseUrl = '@realPath';
    public $js = [
        'js/jquery.color.js',
    ];
    public $css = [
    ];
    public $depends = [
        'torgestva\assets\jQueryAsset',
    ];
}
