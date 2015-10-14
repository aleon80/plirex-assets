<?php
namespace plirex\assets;

class JQueryFormAsset extends CoreAsset
{
    public $sourcePath = '@common/assets/components/jQueryForm';
    public $baseUrl = '@realPath';
    public $js = [
        'js/jquery.form.js',
    ];
    public $css = [
    ];
    public $depends = [
        'torgestva\assets\JQueryAsset',
    ];
}
