<?php
namespace plirex\assets;

class jQueryAsset extends CoreAsset
{
    public $sourcePath = '@plirex/assets/components/jQuery';
    public $baseUrl = '@realPath';
    public $js = [
        'js/jquery.js',
    ];
    public $css = [
    ];
}
