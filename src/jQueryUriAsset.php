<?php
namespace plirex\assets;

class jQueryUriAsset extends CoreAsset
{
    public $sourcePath = '@plirex/assets/components/jQueryUri';
    public $baseUrl = '@realPath';
    public $js = [
        'js/query.url.js',
    ];
    public $css = [
    ];
    public $depends = [
        'plirex\assets\jQueryAsset',
    ];
}
