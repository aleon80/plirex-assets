<?php
namespace plirex\assets;

class JQueryColorAsset extends CoreAsset
{
    public $sourcePath = '@common/assets/components/jQueryColor';
    public $baseUrl = '@realPath';
    public $js = [
        'js/jquery.color.js',
    ];
    public $css = [
    ];
    public $depends = [
        'torgestva\assets\JQueryAsset',
    ];
}
