<?php
namespace plirex\assets;

class JQueryUiAsset extends CoreAsset
{
    public $sourcePath = '@common/assets/components/jQueryUi';
    public $baseUrl = '@realPath';
    public $js = [
        'js/jquery-ui.js',
    ];
    public $css = [
        'styles/jquery-ui.css',
    ];
    public $depends = [
        'torgestva\assets\JQueryAsset',
    ];
}
