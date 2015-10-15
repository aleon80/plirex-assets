<?php
namespace plirex\assets;

class jQueryMaskAsset extends CoreAsset
{
    public $sourcePath = '@plirex/assets/components/jQueryMask';
    public $baseUrl = '@realPath';
    public $js = [
        'js/jquery.mask.js',
    ];
    public $css = [
    ];
    public $depends = [
        'torgestva\assets\jQueryAsset',
    ];
}
