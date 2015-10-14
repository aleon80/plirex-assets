<?php
namespace plirex\assets;

class JQueryMaskPhoneAsset extends CoreAsset
{
    public $sourcePath = '@common/assets/components/jQueryPhoneMask';
    public $baseUrl = '@realPath';
    public $js = [
        'js/jquery.mask.input.js',
    ];
    public $css = [
    ];
    public $depends = [
        'torgestva\assets\JQueryAsset',
    ];
}
