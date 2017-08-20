<?php
namespace plirex\assets;

class jQueryFormAsset extends CoreAsset
{
    public $sourcePath = '@plirex/assets/components/jQueryForm';
    public $baseUrl = '@realPath';
    public $js = [
        'js/jquery.form.js',
        'js/jquery.submit.form.js',
    ];
    public $css = [
    ];
    public $depends = [
        'plirex\assets\jQueryAsset',
    ];
}
