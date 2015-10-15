<?php
namespace plirex\assets;

class jQueryUiAsset extends CoreAsset
{
    public $sourcePath = '@plirex/assets/components/jQueryUi';

    public $baseUrl = '@realPath';
    public $js = [
        'js/jquery-ui.js',
    ];
    public $css = [
        'styles/jquery-ui.css',
    ];
    public $depends = [
        'torgestva\assets\jQueryAsset',
    ];
}
