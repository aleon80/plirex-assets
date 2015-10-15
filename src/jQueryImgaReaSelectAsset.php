<?php
namespace plirex\assets;

class jQueryImgaReaSelectAsset extends CoreAsset
{
    public $sourcePath = '@plirex/assets/components/jQueryImgaReaSelect';
    public $baseUrl = '@realPath';
    public $js = [
        'js/jquery.imgareaselect.js',
        'js/jquery.imgareaselect.pack.js',
        'js/jquery.form.js',
    ];
    public $css = [
        'styles/imgareaselect-animated.css',
        'styles/imgareaselect-deprecated.css',
        'styles/imgareaselect-default.css',
    ];
    public $depends = [
        'torgestva\assets\jQueryAsset',
    ];
}
