<?php

namespace strtob\yii2toastrasset;

use yii\web\AssetBundle;

class ToastrAsset extends AssetBundle
{
    // The path to the toastr.js files in node_modules
    public $sourcePath = '@vendor/strtob/yii2-toastr-asset'; // Adjust path if necessary

    public $css = [
        'node_modules/toastr/build/toastr.min.css',
    ];

    public $js = [
        'node_modules/toastr/build/toastr.min.js',
        'src/js/toastrConfig.js',
    ];

    public $depends = [
        'yii\web\YiiAsset'
    ];
}
