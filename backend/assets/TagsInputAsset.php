<?php

namespace backend\assets;

use Codeception\Lib\Interfaces\DependsOnModule;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Summary of TagsInputAsset
 */
class TagsInputAsset extends AssetBundle{
    public $basePath = '@webroot/tagsinput';
    public $baseUrl = '@web/tagsinput';
    public $css = [
        'tagsinput.css'
    ];

    public $js = [
        'tagsinput.js'
    ];

    /**
     * Summary of depends
     * @var array
     */
    public $depends = [
        JqueryAsset::class
    ];
}
