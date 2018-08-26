<?php
/**
 * Created by PhpStorm.
 * User: huijiewei
 * Date: 2018/8/26
 * Time: 09:50
 */

namespace huijiewei\bootstraptoggle;

use yii\web\AssetBundle;

class BootstrapToggleAsset extends AssetBundle
{
    public $sourcePath = '@npm/bootstrap-toggle';

    public $publishOptions = [
        'only' => [
            'css/bootstrap-toggle.min.css',
            'js/bootstrap-toggle.min.js',
        ],
    ];

    public $css = [
        'css/bootstrap-toggle.min.css',
    ];

    public $js = [
        'js/bootstrap-toggle.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
