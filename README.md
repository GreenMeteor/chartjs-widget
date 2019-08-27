# yii2-humhub-chartjs-widget

Renders a <a href="http://chartjs.org">ChartJs plugin</a> widget

Widget based on <a href="https://github.com/2amigos/yii2-chartjs-widget">yii2-chartjs-widget</a>

# Installation

For manual installation put the downloaded repository in <code>/protected/humhub/widgets</code> folder.

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
  <?= \humhub\widgets\chartjs\ChartJs::widget([
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
