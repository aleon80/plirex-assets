<?php
namespace plirex\assets;

class jQueryFormAsset extends CoreAsset
{
    public $sourcePath = '@plirex/assets/components/jQueryForm';
    public $baseUrl = '@realPath';
    public $js = [
        'js/jquery.form.js',
    ];
    public $css = [
    ];
    public $depends = [
        'torgestva\assets\jQueryAsset',
    ];
}
