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
                        'data' => [90000, 100000, 110000, 120000],
                        'backgroundColor' => '#FF0000',
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
                        'borderColor' => '#FF0000',
                        'backgroundColor' => '#FF0000',
                        'pointRadius' => 4,
                        'borderWidth' => 2,
                        'fill' => false,
                        'yAxisID' => 'y1',
                        'tension' => 0.3,
                        'datalabels' => [
                            'display' => true,
                            'backgroundColor' => '#e2e2e2',
                            'color' => 'black',
                            'borderRadius' => 4,
                            'padding' => 4,
                            'align' => 'bottom',
                        ],
                    ],
                    [
                        'type' => 'bar',
                        'label' => 'Closing Portfolio Value (£)',
                        'data' => [400030, 600030, 800030, 825771],
                        'backgroundColor' => '#9CA3AF',
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

                    // 🔵 Closing Portfolio Value (BOTTOM)
                    [
                        'type' => 'bar',
                        'label' => 'Closing Portfolio Value (£)',
                        'data' => [400030, 600030, 800030, 825771],
                        'backgroundColor' => '#9ca3af', // grey
                        'stack' => 'stack1',
                        'yAxisID' => 'y',
                        'barPercentage' => 0.55,
                        'categoryPercentage' => 0.6,
                        'datalabels' => [
                            'display' => true,
                            'color' => '#000',
                            'anchor' => 'end',
                            'align' => 'bottom',
                            'backgroundColor' => '#f3f4f6',
                            'borderRadius' => 3,
                            'padding' => 4,
                            'formatter' => '{value}',
                        ],
                    ],

                    // 🔴 Cumulative Profit (TOP)
                    [
                        'type' => 'bar',
                        'label' => 'Cumulative Profit (£)',
                        'data' => [90000, 100000, 110000, 120000],
                        'backgroundColor' => '#dc2626',
                        'stack' => 'stack1',
                        'yAxisID' => 'y',
                        'barPercentage' => 0.55,
                        'categoryPercentage' => 0.6,
                        'datalabels' => [
                            'display' => true,
                            'color' => '#000',
                            'anchor' => 'end',
                            'align' => 'top',
                            'formatter' => '{value}',
                        ],
                    ],

                    // 🟢 ROI LINE
                    [
                        'type' => 'line',
                        'label' => 'Cumulative ROI (%)',
                        'data' => [9.21, 10.41, 12.72, 13.72],
                        'borderColor' => '#9acd32',
                        'backgroundColor' => '#9acd32',
                        'pointRadius' => 4,
                        'borderWidth' => 3,
                        'fill' => false,
                        'yAxisID' => 'y1',
                        'tension' => 0.3,
                        'datalabels' => [
                            'display' => true,
                            'backgroundColor' => '#c7e59f',
                            'color' => '#000',
                            'borderRadius' => 4,
                            'padding' => 4,
                            'anchor' => 'center',
                            'align' => 'top',
                            'formatter' => '{value}%',
                        ],
                    ],
                ],

            ],
            'options' => [
                'plugins' => [
                    'legend' => ['position' => 'top', 'labels' => ['usePointStyle' => false, 'boxWidth' => 15, 'boxHeight' => 5]],
                    'datalabels' => ['display' => true]
                ],
                'scales' => [
                    'x' => [
                        'stacked' => true,
                        'offset' => true,
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
                        'grid' => [
                            'drawOnChartArea' => false,
                        ],
                        'ticks' => [
                            'stepSize' => 2,
                            'format' => [
                                'style' => 'percent',
                                'minimumFractionDigits' => 0,
                                'maximumFractionDigits' => 0,
                            ],
                        ],

                    ],
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
                        'backgroundColor' => ['#9CA3AF', '#FF0000'],
                        'borderColor' => '#FF0000',
                        'borderWidth' => 1
                    ]
                ]
            ],
            'options' => [
                'rotation' => -0.7, // Radians for v2 (-40 degrees)
                'cutoutPercentage' => 55,
                'legend' => ['display' => true],
                'plugins' => [
                    'outlabels' => [
                        'text' => "%l\n%p",
                        'color' => 'black',
                        'stretch' => 20,
                        'font' => ['resizable' => true, 'minSize' => 12, 'maxSize' => 14],
                        'backgroundColor' => null,
                        'lineWidth' => 2,
                    ],
                    'doughnutlabel' => [
                        'labels' => [
                            ['text' => '  £ 825,771  ', 'font' => ['size' => 16, 'weight' => 'bold'], 'color' => 'black', 'background' => ['color' => '#FF0000', 'borderRadius' => 4]]
                        ]
                    ]
                ],
                'layout' => [
                    'padding' => 40
                ]
            ]
        ];

        $url2 = 'https://quickchart.io/chart?v=2&width=400&height=400&c=' . urlencode(json_encode($chart2));

        // CHART 3: Pie (Liquidity)
        $chart3 = [
            'type' => 'pie',
            'data' => [
                'labels' => ['Cash Available', 'Vehicles Stock at Cost'],
                'datasets' => [
                    [
                        'data' => [45146, 780625],
                        'backgroundColor' => ['#9CA3AF', '#FF0000'],
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
                        'font' => ['weight' => 'bold', 'size' => 14],
                        'formatter' => "function(val, ctx){ var lbl = ctx.chart.data.labels[ctx.dataIndex]; var perc = Math.round(val / (45146+780625) * 100); return lbl + '\\n£ ' + val.toLocaleString() + ' , ' + perc + '%'; }"
                    ]
                ]
            ]
        ];

        // CHART 4: Bar (Relative Performance Context)
        $chart4 = [
            'type' => 'bar',
            'data' => [
                'labels' => ['Blackstone Motors', 'FTSE 100', 'Gilts (UK Govt. bonds)', 'Savings/ Bank Deposits', 'Buy to let property'],
                'datasets' => [
                    [
                        'data' => [8.10, 8.36, 4.70, 4.30, 5.00],
                        'backgroundColor' => '#9CA3AF',
                        'barPercentage' => 0.5,
                        'categoryPercentage' => 0.5,
                        'datalabels' => [
                            'display' => true,
                            'anchor' => 'end',
                            'align' => 'top',
                            'color' => '#000',
                            'font' => ['weight' => 'bold'],
                            'formatter' => "function(val){return val.toFixed(2) + '%';}"
                        ]
                    ]
                ]
            ],
            'options' => [
                'plugins' => [
                    'legend' => ['display' => false],
                    'datalabels' => ['display' => true]
                ],
                'scales' => [
                    'y' => [
                        'stacked' => true,
                        'position' => 'left',
                        'title' => ['display' => false],
                        'ticks' => [
                            'stepSize' => 2,
                            'format' => [
                                'style' => 'percent',
                                'minimumFractionDigits' => 0,
                                'maximumFractionDigits' => 0,
                            ],
                        ],
                    ],
                    'x' => [
                        'grid' => ['display' => true]
                    ]
                ]
            ]
        ];

        // Helper to get URL
        $getChartUrl = function ($config) {
            return 'https://quickchart.io/chart?v=3&width=500&height=500&c=' . urlencode(json_encode($config));
        };

        // Specific sizes for layout
        $url1 = 'https://quickchart.io/chart?v=3&width=600&height=250&c=' . urlencode(json_encode($chart1));
        $url2 = 'https://quickchart.io/chart?v=2&width=400&height=400&c=' . urlencode(json_encode($chart2));
        $url3 = 'https://quickchart.io/chart?v=3&width=400&height=300&c=' . urlencode(json_encode($chart3));
        $url4 = 'https://quickchart.io/chart?v=3&width=500&height=300&c=' . urlencode(json_encode($chart4));

        $imagePath1 = public_path('charts/chart_combo.png');
        $imagePath2 = public_path('charts/chart_doughnut.png');
        $imagePath3 = public_path('charts/chart_pie.png');
        $imagePath4 = public_path('charts/chart_relative.png');

        if (!is_dir(public_path('charts'))) {
            mkdir(public_path('charts'), 0755, true);
        }

        file_put_contents($imagePath1, file_get_contents($url1));
        file_put_contents($imagePath2, file_get_contents($url2));
        file_put_contents($imagePath3, file_get_contents($url3));
        file_put_contents($imagePath4, file_get_contents($url4));

        $pdf = Pdf::loadView('pdf.black-stone', [
            'chart1' => $imagePath1,
            'chart2' => $imagePath2,
            'chart3' => $imagePath3,
            'chart4' => $imagePath4,
        ])->setPaper('letter', 'landscape')
            ->setOption('isPhpEnabled', true);

        return $pdf->stream('investment.pdf');
    }


    public function investment()
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
                        'data' => [90000, 100000, 110000, 120000],
                        'backgroundColor' => '#FF0000',
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
                        'borderColor' => '#FF0000',
                        'backgroundColor' => '#FF0000',
                        'pointRadius' => 4,
                        'borderWidth' => 2,
                        'fill' => false,
                        'yAxisID' => 'y1',
                        'tension' => 0.3,
                        'datalabels' => [
                            'display' => true,
                            'backgroundColor' => '#e2e2e2',
                            'color' => 'black',
                            'borderRadius' => 4,
                            'padding' => 4,
                            'align' => 'bottom',
                        ],
                    ],
                    [
                        'type' => 'bar',
                        'label' => 'Closing Portfolio Value (£)',
                        'data' => [400030, 600030, 800030, 825771],
                        'backgroundColor' => '#9CA3AF',
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

                    // 🔵 Closing Portfolio Value (BOTTOM)
                    [
                        'type' => 'bar',
                        'label' => 'Closing Portfolio Value (£)',
                        'data' => [400030, 600030, 800030, 825771],
                        'backgroundColor' => '#9ca3af', // grey
                        'stack' => 'stack1',
                        'yAxisID' => 'y',
                        'barPercentage' => 0.55,
                        'categoryPercentage' => 0.6,
                        'datalabels' => [
                            'display' => true,
                            'color' => '#000',
                            'anchor' => 'end',
                            'align' => 'bottom',
                            'backgroundColor' => '#f3f4f6',
                            'borderRadius' => 3,
                            'padding' => 4,
                            'formatter' => '{value}',
                        ],
                    ],

                    // 🔴 Cumulative Profit (TOP)
                    [
                        'type' => 'bar',
                        'label' => 'Cumulative Profit (£)',
                        'data' => [90000, 100000, 110000, 120000],
                        'backgroundColor' => '#dc2626',
                        'stack' => 'stack1',
                        'yAxisID' => 'y',
                        'barPercentage' => 0.55,
                        'categoryPercentage' => 0.6,
                        'datalabels' => [
                            'display' => true,
                            'color' => '#000',
                            'anchor' => 'end',
                            'align' => 'top',
                            'formatter' => '{value}',
                        ],
                    ],

                    // 🟢 ROI LINE
                    [
                        'type' => 'line',
                        'label' => 'Cumulative ROI (%)',
                        'data' => [9.21, 10.41, 12.72, 13.72],
                        'borderColor' => '#9acd32',
                        'backgroundColor' => '#9acd32',
                        'pointRadius' => 4,
                        'borderWidth' => 3,
                        'fill' => false,
                        'yAxisID' => 'y1',
                        'tension' => 0.3,
                        'datalabels' => [
                            'display' => true,
                            'backgroundColor' => '#c7e59f',
                            'color' => '#000',
                            'borderRadius' => 4,
                            'padding' => 4,
                            'anchor' => 'center',
                            'align' => 'top',
                            'formatter' => '{value}%',
                        ],
                    ],
                ],

            ],
            'options' => [
                'plugins' => [
                    'legend' => ['position' => 'top', 'labels' => ['usePointStyle' => false, 'boxWidth' => 15, 'boxHeight' => 5]],
                    'datalabels' => ['display' => true]
                ],
                'scales' => [
                    'x' => [
                        'stacked' => true,
                        'offset' => true,
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
                        'grid' => [
                            'drawOnChartArea' => false,
                        ],
                        'ticks' => [
                            'stepSize' => 2,
                            'format' => [
                                'style' => 'percent',
                                'minimumFractionDigits' => 0,
                                'maximumFractionDigits' => 0,
                            ],
                        ],

                    ],
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
                        'backgroundColor' => ['#9CA3AF', '#FF0000'],
                        'borderColor' => '#FF0000',
                        'borderWidth' => 1
                    ]
                ]
            ],
            'options' => [
                'rotation' => -0.7, // Radians for v2 (-40 degrees)
                'cutoutPercentage' => 55,
                'legend' => ['display' => true],
                'plugins' => [
                    'outlabels' => [
                        'text' => "%l\n%p",
                        'color' => 'black',
                        'stretch' => 20,
                        'font' => ['resizable' => true, 'minSize' => 12, 'maxSize' => 14],
                        'backgroundColor' => null,
                        'lineWidth' => 2,
                    ],
                    'doughnutlabel' => [
                        'labels' => [
                            ['text' => '  £ 825,771  ', 'font' => ['size' => 16, 'weight' => 'bold'], 'color' => 'black', 'background' => ['color' => '#FF0000', 'borderRadius' => 4]]
                        ]
                    ]
                ],
                'layout' => [
                    'padding' => 40
                ]
            ]
        ];

        $url2 = 'https://quickchart.io/chart?v=2&width=400&height=400&c=' . urlencode(json_encode($chart2));

        // CHART 3: Pie (Liquidity)
        $chart3 = [
            'type' => 'pie',
            'data' => [
                'labels' => ['Cash Available', 'Vehicles Stock at Cost'],
                'datasets' => [
                    [
                        'data' => [45146, 780625],
                        'backgroundColor' => ['#9CA3AF', '#FF0000'],
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
                        'font' => ['weight' => 'bold', 'size' => 14],
                        'formatter' => "function(val, ctx){ var lbl = ctx.chart.data.labels[ctx.dataIndex]; var perc = Math.round(val / (45146+780625) * 100); return lbl + '\\n£ ' + val.toLocaleString() + ' , ' + perc + '%'; }"
                    ]
                ]
            ]
        ];

        // CHART 4: Bar (Relative Performance Context)
        $chart4 = [
            'type' => 'bar',
            'data' => [
                'labels' => ['Blackstone Motors', 'FTSE 100', 'Gilts (UK Govt. bonds)', 'Savings/ Bank Deposits', 'Buy to let property'],
                'datasets' => [
                    [
                        'data' => [8.10, 8.36, 4.70, 4.30, 5.00],
                        'backgroundColor' => '#FF0000',
                        'barPercentage' => 0.5,
                        'categoryPercentage' => 0.5,
                        'datalabels' => [
                            'display' => true,
                            'anchor' => 'end',
                            'align' => 'top',
                            'color' => '#000',
                            'font' => ['weight' => 'bold'],
                            'formatter' => "function(val){return val.toFixed(2) + '%';}"
                        ]
                    ]
                ]
            ],
            'options' => [
                'plugins' => [
                    'legend' => ['display' => false],
                    'datalabels' => ['display' => true]
                ],
                'scales' => [
                    'y' => [
                        'stacked' => true,
                        'position' => 'left',
                        'title' => ['display' => false],
                        'ticks' => [
                            'stepSize' => 2,
                            'format' => [
                                'style' => 'percent',
                                'minimumFractionDigits' => 0,
                                'maximumFractionDigits' => 0,
                            ],
                        ],
                    ],
                    'x' => [
                        'grid' => ['display' => true]
                    ]
                ]
            ]
        ];

        // Helper to get URL
        $getChartUrl = function ($config) {
            return 'https://quickchart.io/chart?v=3&width=500&height=500&c=' . urlencode(json_encode($config));
        };

        // Specific sizes for layout
        $url1 = 'https://quickchart.io/chart?v=3&width=600&height=300&c=' . urlencode(json_encode($chart1));
        $url2 = 'https://quickchart.io/chart?v=2&width=400&height=400&c=' . urlencode(json_encode($chart2));
        $url3 = 'https://quickchart.io/chart?v=3&width=400&height=400&c=' . urlencode(json_encode($chart3));
        $url4 = 'https://quickchart.io/chart?v=3&width=500&height=300&c=' . urlencode(json_encode($chart4));

        $imagePath1 = public_path('charts/chart_combo.png');
        $imagePath2 = public_path('charts/chart_doughnut.png');
        $imagePath3 = public_path('charts/chart_pie.png');
        $imagePath4 = public_path('charts/chart_relative.png');

        if (!is_dir(public_path('charts'))) {
            mkdir(public_path('charts'), 0755, true);
        }

        file_put_contents($imagePath1, file_get_contents($url1));
        file_put_contents($imagePath2, file_get_contents($url2));
        file_put_contents($imagePath3, file_get_contents($url3));
        file_put_contents($imagePath4, file_get_contents($url4));

        $pdf = Pdf::loadView('pdf.investment', [
            'chart1' => $imagePath1,
            'chart2' => $imagePath2,
            'chart3' => $imagePath3,
            'chart4' => $imagePath4,
        ])->setPaper('a4', 'portrait')
            ->setOption('isPhpEnabled', true);

        return $pdf->stream('investment.pdf');
    }



}
