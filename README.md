# yii2-humhub-chartjs-widget

Renders a <a href="http://chartjs.org">ChartJs plugin</a> widget

Widget based on <a href="https://github.com/2amigos/yii2-chartjs-widget">yii2-chartjs-widget</a> and

# Installation

For manual installation put the downloaded repository in <code>protected/widgets</code> folder.

# Usage

The following types are supported:

<ul>
<li>Line</li>
<li>Bar</li>
<li>Radar</li>
<li>Polar</li>
<li>Pie</li>
<li>Doughnut</li>
</ul>

The following example is using the <code>Pie</code> type of chart. Please, check <a href="http://www.chartjs.org/docs/">ChartJs plugin documentation</a> for the different types supported by the plugin.

```
  <?= \app\widgets\chartjs\ChartJs::widget([
            'type' => 'pie',
            'options' => [
                'width' => 400,
                'height' => 400,
            ],
            'clientOptions' => [
                'cutoutPercentage' => 90,
                'percentageInnerCutout' => 40,
                'legend' => ['display' => false],
            ],
            'data' => [
                'labels' => [red, blue],
                'datasets' => [
                    [
                        'data' => [10, 50],
                        'backgroundColor' => [
                            "#eee",
                            "#bbb",
                        ],
                    ]
                ]
            ]
        ]);
        ?>
```

All ChartJs plugin options set in <code>'clientOptions'</code> 

# Credits
<ul>
<li><a href="https://github.com/marciy">NIKITA MARCIY</a></li>
</ul>

# License

GNU General Public License v3.0
<blockquote>
<a href="https://github.com/elysiym">
<img src="https://avatars2.githubusercontent.com/u/23127767?v=3&s=200" width="70px">
</a>
<span>Social network for quick and easy search of donors.</span>
<a href="https://elysium.help" alt="https://elysium.help">https://elysium.help</a>
</blockquote>
