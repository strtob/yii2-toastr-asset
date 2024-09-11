 <?php

namespace strtob\yii2toastrasset;

use yii\web\AssetBundle;

class ToastrAsset extends AssetBundle
{
    // The path to the toastr.js files in node_modules
    public $sourcePath = '@app/node_modules/toastr'; // Adjust path if necessary

    public $css = [
        'build/toastr.min.css',
    ];

    public $js = [
        'build/toastr.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset'
    ];
}
