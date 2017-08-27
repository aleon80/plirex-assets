<?php
namespace plirex\assets;

class jQueryMaskPhoneAsset extends CoreAsset
{
    public $sourcePath = '@plirex/assets/components/jQueryPhoneMask';
    public $baseUrl = '@realPath';
    public $js = [
        'js/jquery.mask.input.js',
    ];
    public $css = [
    ];
    public $depends = [
        'plirex\assets\jQueryAsset',
   ];
}
