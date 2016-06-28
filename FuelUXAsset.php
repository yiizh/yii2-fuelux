<?php
/**
 * @author Di Zhang <zhangdi_me@163.com>
 */

namespace yiizh\fuelux;

use yii\web\AssetBundle;

/**
 *
 * @package yiizh\fuelux
 */
class FuelUXAsset extends AssetBundle
{
    public $sourcePath = '@yiizh/fuelux/assets';

    public $css = [
        'css/fuelux.min.css',
    ];

    public $js = [
        'js/fuelux.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}