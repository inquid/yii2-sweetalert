<?php

namespace omnilight\assets;
use yii\web\AssetBundle;


/**
 * Class SweetAlertAsset
 */
class SweetAlertAsset extends AssetBundle
{
    public $sourcePath = '@bower/sweetalert2/dist';

    public $css = [
        'sweetalert2.css',
    ];

    public $js = [
        'sweetalert2.min.js'
    ];
}
