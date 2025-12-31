<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

use QuickChart;

class PdfController extends Controller
{
    public function generate()
    {
        $pdf = Pdf::loadView('pdf.vehicle-checklist')
            ->setPaper('A4', 'portrait');

        return $pdf->stream('vehicle-midpoint-checklist.pdf');
    }


    public function blackstonepdf()
    {
        // CHART 1: Combo Chart (Portfolio)
        $chartConfig1 = [
            'type' => 'bar',
            'data' => [
                'labels' => ['H2-FY24', 'H1-FY25', 'H2-FY25', 'H1-FY26 - Partial'],
                'datasets' => [
                    [
                        'type' => 'bar',
                        'label' => 'Cumulative Profit (£)',
                        'data' => [57407, 70858, 99866, 111642],
                        'backgroundColor' => '#ed7d31',
                        'yAxisID' => 'y',
                        'stack' => 'portfolio',
                        'categoryPercentage' => 0.6,
                        'barPercentage' => 0.7,
                        'datalabels' => [
                            'display' => true,
                            'anchor' => 'end',
                            'align' => 'top',
                            'color' => '#000',
                            'font' => ['weight' => 'bold'],
                            'formatter' => function ($value) {
                                return number_format($value);
                            }
                        ],
                    ],
                    [
                        'type' => 'line',
                        'label' => 'Cumulative ROI (%)',
                        'data' => [9.21, 10.41, 12.72, 13.72],
                        'borderColor' => '#70ad47',
                        'backgroundColor' => '#70ad47',
                        'pointRadius' => 4,
                        'borderWidth' => 2,
                        'fill' => false,
                        'yAxisID' => 'y1',
                        'tension' => 0.3,
                        'datalabels' => [
                            'display' => true,
                            'backgroundColor' => '#9bc574',
                            'color' => 'black',
                            'borderRadius' => 4,
                            'padding' => 4,
                            'align' => 'bottom',
                        ],
                    ],
                    [
                        'type' => 'bar',
                        'label' => 'Closing Portfolio Value (£)',
                        'data' => [680651, 694102, 814350, 825771],
                        'backgroundColor' => '#4472c4',
                        'yAxisID' => 'y',
                        'stack' => 'portfolio',
                        'categoryPercentage' => 0.6,
                        'barPercentage' => 0.7,
                        'datalabels' => ['display' => true],
                    ],
                ],
            ],
            'options' => [
                'plugins' => [
                    'legend' => [
                        'position' => 'top',
                        'labels' => ['font' => ['size' => 10]],
                    ],
                    'datalabels' => [
                        'display' => true,
                        'font' => ['size' => 9],
                    ],
                ],

                'scales' => [
                    'x' => [
                        'stacked' => true
                    ],
                    'y' => [
                        'stacked' => true,
                        'position' => 'left',
                        'title' => ['display' => false],
                        'ticks' => ['max' => 1000000]
                    ],
                    'y1' => [
                        'position' => 'right',
                        'min' => 0,
                        'max' => 16,
                        'grid' => ['drawOnChartArea' => false],
                        'ticks' => [
                            'max' => 1000000,
                            'stepSize' => 200000,
                            'callback' => function ($value, $index, $values) {
                                return number_format($value);
                            }
                        ]
                    ],
                ],
            ],
        ];

        // Prepare chart1 string formatter for json
        $chartConfig1Json = json_encode($chartConfig1);

        $chart1 = [
            'type' => 'bar',
            'data' => [
                'labels' => ['H2-FY24', 'H1-FY25', 'H2-FY25', 'H1-FY26 - Partial'],
                'datasets' => [
                    [
                        'type' => 'bar',
                        'label' => 'Closing Portfolio Value (£)',
                        'data' => [680651, 694102, 814350, 825771],
                        'backgroundColor' => '#4472c4',
                        'yAxisID' => 'y',
                        'order' => 10,
                        'padding' => 10,
                        'stack' => 'portfolio',
                        'categoryPercentage' => 0.5,
                        'barPercentage' => 0.5,
                        'datalabels' => ['display' => true, 'backgroundColor' => 'whitesmoke', 'borderColor' => '#ccc', 'anchor' => 'center', 'align' => 'center', 'color' => 'black', 'font' => ['weight' => 'normal'], 'formatter' => "function(val){return val.toLocaleString();}"]
                    ],
                    [
                        'type' => 'bar',
                        'label' => 'Cumulative Profit (£)',
                        'data' => [57407, 70858, 99866, 111642],
                        'backgroundColor' => '#ed7d31',
                        'yAxisID' => 'y',
                        'order' => 10,
                        'stack' => 'portfolio',
                        'categoryPercentage' => 0.5,
                        'barPercentage' => 0.5,
                        'datalabels' => ['display' => false]
                    ],
                    [
                        'type' => 'line',
                        'label' => 'Cumulative ROI (%)',
                        'data' => [9.21, 10.41, 12.72, 13.72],
                        'borderColor' => '#70ad47',
                        'backgroundColor' => '#70ad47',
                        'pointRadius' => 4,
                        'borderWidth' => 2,
                        'fill' => false,
                        'yAxisID' => 'y1',
                        'order' => 1,
                        'datalabels' => [
                            'display' => true,
                            'align' => 'right',
                            'anchor' => 'center',
                            'offset' => 10,
                            'backgroundColor' => '#c5e0b4',
                            'color' => 'black',
                            'borderRadius' => 4,
                            'padding' => 4,
                            'formatter' => "function(val){return val.toFixed(2) + '%';}"
                        ],
                    ],
                ]
            ],
            'options' => [
                'plugins' => [
                    'legend' => ['position' => 'top', 'labels' => ['usePointStyle' => false, 'boxWidth' => 15, 'boxHeight' => 5]],
                    'datalabels' => ['display' => true]
                ],
                'scales' => [
                    'x' => [
                        'stacked' => true
                    ],
                    'y' => [
                        'stacked' => true,
                        'position' => 'left',
                        'title' => ['display' => false],
                        'ticks' => ['max' => 1000000]
                    ],
                    'y1' => [
                        'position' => 'right',
                        'title' => ['display' => false],
                        'grid' => ['drawOnChartArea' => false],
                        'ticks' => [
                            'callback' => "function(val){return val.toFixed(2) + '%';}"
                        ]
                    ]
                ]
            ]
        ];

        // CHART 2: Doughnut (Investment vs Profit)
        $chart2 = [
            'type' => 'doughnut',
            'data' => [
                'labels' => ['Net Investment', 'Total Gain/Loss'],
                'datasets' => [
                    [
                        'data' => [86.28, 13.72],
                        'backgroundColor' => ['#ffffff', '#4472c4'], // Outer ring: White for investment?, Blue for gain. Wait, mockup: "Net Investment" is white/light, "Gain" is blue.
                        'borderColor' => '#4472c4',
                        'borderWidth' => 1
                    ]
                ]
            ],
            'options' => [
                'cutout' => '60%',
                'plugins' => [
                    'legend' => ['display' => false],
                    'datalabels' => [
                        'display' => true,
                        'color' => '#000',
                        'anchor' => 'end',
                        'align' => 'end',
                        'offset' => 10,
                        'font' => ['weight' => 'bold'],
                        'formatter' => "function(val, ctx){ return ctx.chart.data.labels[ctx.dataIndex] + '\\n' + val + '%'; }"
                    ],
                    'doughnutlabel' => [
                        'labels' => [
                            ['text' => '£ 825,771', 'font' => ['size' => 14, 'weight' => 'bold'], 'color' => 'white', 'background' => ['color' => '#4472c4']] // Simplified center text approach
                        ]
                    ]
                ]
            ]
        ];

        $chart2 = [
            'type' => 'doughnut',
            'data' => [
                'labels' => ['Net Investment', 'Total Gain/Loss'],
                'datasets' => [
                    [
                        'data' => [86.28, 13.72],
                        'backgroundColor' => ['#f2f2f2', '#4472c4'],
                        'borderColor' => '#4472c4',
                    ]
                ]
            ],
            'options' => [
                'cutout' => '50%',
                'plugins' => [
                    'legend' => ['display' => false],
                    'datalabels' => [
                        'display' => true,
                        'color' => 'black',
                        'anchor' => 'end',
                        'align' => 'start',
                        'offset' => 20,
                        'font' => ['size' => 10],
                        'formatter' => "function(val, ctx){ return ctx.chart.data.labels[ctx.dataIndex] + '\\n' + val + '%'; }"
                    ]
                ]
            ]
        ];

        // CHART 3: Pie (Liquidity)
        $chart3 = [
            'type' => 'pie',
            'data' => [
                'labels' => ['Cash Available', 'Vehicles Stock at Cost'],
                'datasets' => [
                    [
                        'data' => [45146, 780625],
                        'backgroundColor' => ['#ed7d31', '#4472c4'],
                        'borderColor' => '#ffffff',
                        'borderWidth' => 2
                    ]
                ]
            ],
            'options' => [
                'plugins' => [
                    'legend' => ['display' => false],
                    'datalabels' => [
                        'color' => 'white',
                        'font' => ['weight' => 'bold', 'size' => 10],
                        'formatter' => "function(val, ctx){ var lbl = ctx.chart.data.labels[ctx.dataIndex]; var perc = Math.round(val / (45146+780625) * 100); return lbl + '\\n£ ' + val.toLocaleString() + ' , ' + perc + '%'; }"
                    ]
                ]
            ]
        ];

        // Helper to get URL
        $getChartUrl = function ($config) {
            return 'https://quickchart.io/chart?v=3&width=500&height=300&c=' . urlencode(json_encode($config));
        };

        // Specific sizes for layout
        $url1 = 'https://quickchart.io/chart?v=3&width=600&height=350&c=' . urlencode(json_encode($chart1));
        // Center text plugin for chart 2 manual injection if needed, but let's try just the chart first.
        // Actually for Chart 2, let's use the 'doughnutlabel' plugin if Quickchart supports it, otherwise plain.
        // QuickChart default supports 'outlabels' plugin which is nice for pie/doughnut.
        $chart2['options']['plugins']['outlabels'] = ['text' => "%l\n%p", 'color' => 'black', 'stretch' => 30, 'font' => ['resizable' => true, 'minSize' => 12, 'maxSize' => 18]];
        $chart2['options']['plugins']['datalabels']['display'] = false; // Disable standard datalabels if using outlabels
        $chart2['options']['layout']['padding'] = 40;

        $url2 = 'https://quickchart.io/chart?v=3&width=300&height=300&c=' . urlencode(json_encode($chart2));

        $url3 = 'https://quickchart.io/chart?v=3&width=300&height=300&c=' . urlencode(json_encode($chart3));

        $imagePath1 = public_path('charts/chart_combo.png');
        $imagePath2 = public_path('charts/chart_doughnut.png');
        $imagePath3 = public_path('charts/chart_pie.png');

        if (!is_dir(public_path('charts'))) {
            mkdir(public_path('charts'), 0755, true);
        }

        file_put_contents($imagePath1, file_get_contents($url1));
        file_put_contents($imagePath2, file_get_contents($url2));
        file_put_contents($imagePath3, file_get_contents($url3));

        $pdf = Pdf::loadView('pdf.black-stone', [
            'chart1' => $imagePath1,
            'chart2' => $imagePath2,
            'chart3' => $imagePath3,
        ])->setPaper('letter', 'landscape');

        return $pdf->stream('np-black-stone.pdf');
    }
}
