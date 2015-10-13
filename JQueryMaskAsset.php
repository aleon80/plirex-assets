<?php
namespace plirex\assets;

class JQueryMaskAsset extends CoreAsset
{
    public $sourcePath = '@common/assets/components/jQueryMask';
    public $baseUrl = '@realPath';
    public $js = [
        'js/jquery.mask.js',
    ];
    public $css = [
    ];
    public $depends = [
        'torgestva\assets\JQueryAsset',
    ];
}
