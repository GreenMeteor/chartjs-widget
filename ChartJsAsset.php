<?php
/**
 * @link https://github.com/2amigos/yii2-chartjs-widget
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
namespace app\widgets\chartjs;

use yii\web\AssetBundle;

/**
 *
 * ChartPluginAsset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 */
class ChartJsAsset extends AssetBundle
{

    public $js = [
        'Chart.min.js'
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__);
        parent::init();
    }

}
