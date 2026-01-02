<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

use QuickChart;

class PdfController extends Controller
{
    // Khubaib Controller
    public function vehicleChecklist()
    {
        $pdf = Pdf::loadView('pdf.vehicle-checklist')
            ->setPaper('A4', 'portrait');

        return $pdf->stream('vehicle-midpoint-checklist.pdf');
    }


    public function investmentLetter()
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
        $url1 = 'https://quickchart.io/chart?v=3&width=600&height=250&c=' . urlencode(json_encode($chart1));
        $url2 = 'https://quickchart.io/chart?v=2&width=400&height=400&c=' . urlencode(json_encode($chart2));
        $url3 = 'https://quickchart.io/chart?v=3&width=400&height=300&c=' . urlencode(json_encode($chart3));
        $url4 = 'https://quickchart.io/chart?v=3&width=400&height=200&c=' . urlencode(json_encode($chart4));

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

        $pdf = Pdf::loadView('pdf.investment-letter', [
            'chart1' => $imagePath1,
            'chart2' => $imagePath2,
            'chart3' => $imagePath3,
            'chart4' => $imagePath4,
        ])->setPaper('letter', 'landscape')
            ->setOption('isPhpEnabled', true);

        return $pdf->stream('investment.pdf');
    }


    public function investmentLetterA4()
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

        $chartConfig1Json = json_encode($chartConfig1);

        // CHART 2:
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
        $url3 = 'https://quickchart.io/chart?v=3&width=300&height=300&c=' . urlencode(json_encode($chart3));
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

        $pdf = Pdf::loadView('pdf.investment-a4', [
            'chart1' => $imagePath1,
            'chart2' => $imagePath2,
            'chart3' => $imagePath3,
            'chart4' => $imagePath4,
        ])->setPaper('a4', 'portrait')
            ->setOption('isPhpEnabled', true);

        return $pdf->stream('investment.pdf');
    }




    // Ahad COntroller
    public function blackStonePdf()
    {
        // Generate chart images first and convert to base64
        $chartImages = $this->generateChartImages();

        // Generate the CAGR chart image
        $cagrChartImage = $this->generateCAGRChart();

        // Convert other static images to base64
        $coverBg = $this->imageToBase64('https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
        $luxuryCar = $this->imageToBase64('https://images.unsplash.com/photo-1555212697-194d92e40b14?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');
        // $logo = $this->imageToBase64(public_path('logo.jpg')); // Example for local file

        $data = [
            'investorName' => 'Neil Partridge',
            'reportDate' => 'DEC25',
            'periodStart' => '14 Feb 2024',
            'periodEnd' => '12 Dec 2025',
            'closingPortfolioValue' => 825771,
            'cumulativeProfit' => 111642,
            'cumulativeROI' => 13.72,
            'performanceData' => [
                'labels' => ['1/3 FY24', 'H1-FY25', 'H2-FY25', 'H1-FY26 - Partial'],
                'portfolioValues' => [680053, 694101, 814350, 825771],
                'roiValues' => [9.238, 10.41, 12.72, 13.73]
            ],
            'investmentBreakdown' => [
                'gainLoss' => 13.72,
                'netInvestment' => 86.28
            ],
            'liquidityData' => [
                'cashAvailable' => 45146,
                'cashPercentage' => 5,
                'vehiclesStock' => 780625,
                'vehiclesPercentage' => 95
            ],
            'tableData' => [
                'totalValue' => 825771,
                'totalCapitalInvested' => 715897,
                'totalWithdrawals' => -1768,
                'netInvestment' => 714129,
                'totalGainLoss' => 111642,
                'cumulativeROI' => 13.72,
                'annualizedReturn' => 8.14,
                'avgProfitPerVehicle' => 4465.68,
                'vehiclesSold' => 25,
                'vehiclesInStock' => 9,
                'vehiclesStockCost' => 780625,
                'cashAvailable' => 45146
            ],
            'chartImages' => $chartImages,
            'coverBg' => $coverBg,
            'luxuryCar' => $luxuryCar,
            // NEW: CAGR chart data and image
            'cagrChartImage' => $cagrChartImage,
            'cagrComparisonText' => 'The achieved <strong>8.11%</strong> annualised return (same period) compares favourably with UK savings and money-market instruments, UK government bonds (gilts) and net yields from residential buy-to-let property. Crucially, these returns were achieved through tangible assets, rather than exposure to public market volatility.',
            'cagrData' => [
                'blackstoneMotors' => 8.11, // Annualized return from tableData
                'ftse100' => 5.8, // Example value - you can adjust these
                'gilts' => 4.2, // Example value
                'savings' => 2.1, // Example value
                'buyToLet' => 3.5 // Example value
            ]
        ];

        $pdf = Pdf::loadView('pdf.black-stone-pdf', $data)
            ->setPaper('letter', 'landscape')
            ->setOptions([
                'isHtml5ParserEnabled' => true,
                'isRemoteEnabled' => true,
                'defaultFont' => 'Arial',
                'isPhpEnabled' => true
            ]);

        return $pdf->stream('Blackstone-Motors-Investment-Report.pdf');
    }

    private function imageToBase64($path)
    {
        // 1x1 Transparent PNG as fallback
        $fallback = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==';

        try {
            if (empty($path))
                return $fallback;

            $type = '';
            $data = '';

            if (filter_var($path, FILTER_VALIDATE_URL)) {
                // Strip query parameters for extension detection
                $pathWithoutQuery = strtok($path, '?');
                $type = strtolower(pathinfo($pathWithoutQuery, PATHINFO_EXTENSION));

                // Fetch content
                $data = @file_get_contents($path); // suppress warnings
            } else {
                if (file_exists($path)) {
                    $type = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                    $data = @file_get_contents($path);
                }
            }

            if ($data === false || empty($data)) {
                return $fallback;
            }

            // Normalize type
            if (!$type || !in_array($type, ['jpg', 'jpeg', 'png', 'gif', 'svg'])) {
                $type = 'png';
            }
            if ($type === 'svg')
                $type = 'svg+xml';

            return 'data:image/' . $type . ';base64,' . base64_encode($data);
        } catch (\Exception $e) {
            return $fallback;
        }
    }

    private function generateChartImages()
    {
        $chartImages = [];


        // Chart 1: Performance Line Chart
        $chart1Config = [
            'type' => 'line',
            'data' => [
                'labels' => ['1/3 FY24', 'H1-FY25', 'H2-FY25', 'H1-FY26 - Partial'],
                'datasets' => [
                    [
                        'label' => 'Portfolio Value',
                        'data' => [680053, 694101, 814350, 825771],
                        'borderColor' => '#000000',
                        'backgroundColor' => 'rgba(0, 0, 0, 0.1)',
                        'fill' => true,
                        'tension' => 0.1
                    ],
                    [
                        'label' => 'ROI (%)',
                        'data' => [9.238, 10.41, 12.72, 13.73],
                        'borderColor' => '#666666',
                        'backgroundColor' => 'rgba(102, 102, 102, 0.1)',
                        'fill' => false,
                        'tension' => 0.1,
                        'borderDash' => [5, 5]
                    ]
                ]
            ],
            'options' => [
                'responsive' => false,
                'maintainAspectRatio' => false,
                'width' => 700,
                'height' => 180,
                'plugins' => [
                    'legend' => [
                        'position' => 'top',
                        'labels' => [
                            'color' => '#FFFFFF', // White text for legend
                            'font' => ['size' => 10]
                        ]
                    ]
                ],
                'scales' => [
                    'x' => [
                        'ticks' => [
                            'color' => '#FFFFFF', // White text for x-axis
                            'font' => ['size' => 9]
                        ],
                        'grid' => [
                            'color' => 'rgba(255, 255, 255, 0.1)' // Light grid lines
                        ]
                    ],
                    'y' => [
                        'beginAtZero' => false,
                        'position' => 'left',
                        'ticks' => [
                            'color' => '#FFFFFF', // White text for y-axis
                            'callback' => 'function(value) {
                        if (value >= 1000000) return "£" + (value/1000000).toFixed(1) + "M";
                        if (value >= 1000) return "£" + (value/1000).toFixed(0) + "k";
                        return "£" + value;
                    }'
                        ],
                        'grid' => [
                            'color' => 'rgba(255, 255, 255, 0.1)' // Light grid lines
                        ]
                    ],
                    'y1' => [
                        'position' => 'right',
                        'beginAtZero' => true,
                        'max' => 16,
                        'ticks' => [
                            'color' => '#FFFFFF', // White text for secondary y-axis
                            'callback' => 'function(value) { return value + "%"; }'
                        ],
                        'grid' => [
                            'drawOnChartArea' => false
                        ]
                    ]
                ]
            ]
        ];

        // Chart 2: Investment Pie Chart
        $chart2Config = [
            'type' => 'doughnut',
            'data' => [
                'labels' => ['Total Gain/Loss', 'Net Investment'],
                'datasets' => [
                    [
                        'data' => [13.72, 86.28],
                        'backgroundColor' => ['red', 'black'],
                        'borderWidth' => 1
                    ]
                ]
            ],
            'options' => [
                'responsive' => false,
                'maintainAspectRatio' => false,
                'width' => 200,
                'height' => 200,
                'cutout' => '60%',
                'plugins' => [
                    'legend' => [
                        'position' => 'bottom',
                        'labels' => [
                            'color' => '#FFFFFF', // White text for legend
                            'font' => ['size' => 9]
                        ]
                    ],
                    'datalabels' => [
                        'color' => '#FFFFFF', // White text for data labels
                        'font' => ['size' => 10, 'weight' => 'bold'],
                        'formatter' => 'function(value, context) {
                    return value.toFixed(1) + "%";
                }'
                    ]
                ]
            ]
        ];

        // Chart 3: Liquidity Pie Chart
        $chart3Config = [
            'type' => 'pie',
            'data' => [
                'labels' => ['Cash Available', 'Vehicles Stock at Cost'],
                'datasets' => [
                    [
                        'data' => [5, 95],
                        'backgroundColor' => ['red', 'black'],
                        'borderWidth' => 1
                    ]
                ]
            ],
            'options' => [
                'responsive' => false,
                'maintainAspectRatio' => false,
                'width' => 200,
                'height' => 200,
                'cutout' => '60%',
                'plugins' => [
                    'legend' => [
                        'display' => false
                    ],
                    'datalabels' => [
                        'color' => '#FFFFFF', // White text for data labels
                        'font' => ['size' => 10, 'weight' => 'bold'],
                        'formatter' => 'function(value, context) {
                    return value.toFixed(1) + "%";
                }'
                    ]
                ]
            ]
        ];

        // Generate image URLs using QuickChart and convert to Base64
        $baseUrl = 'https://quickchart.io/chart?';

        $url1 = $baseUrl . 'c=' . urlencode(json_encode($chart1Config)) . '&width=700&height=180';
        $url2 = $baseUrl . 'c=' . urlencode(json_encode($chart2Config)) . '&width=200&height=200';
        $url3 = $baseUrl . 'c=' . urlencode(json_encode($chart3Config)) . '&width=200&height=200';

        $chartImages['performance'] = $this->imageToBase64($url1);
        $chartImages['investment'] = $this->imageToBase64($url2);
        $chartImages['liquidity'] = $this->imageToBase64($url3);

        return $chartImages;
    }

    private function generateCAGRChart()
    {
        $cagrConfig = [
            'type' => 'bar',
            'data' => [
                'labels' => [
                    'Blackstone Motors',
                    'FTSE 100',
                    'Gilts (UK Govt. bonds)',
                    'Savings/ Bank Deposits',
                    'Buy to let property'
                ],
                'datasets' => [
                    [
                        'label' => 'Annualized Return (%)',
                        'data' => [8.11, 5.8, 4.2, 2.1, 3.5],
                        'backgroundColor' => [
                            'rgba(0,0,0,1)',
                            'rgba(255,0,0,1)',
                            'rgba(0,0,0,1)',
                            'rgba(255,0,0,1)',
                            'rgba(0,0,0,1)'
                        ],
                        'borderColor' => [
                            'rgba(0,0,0,1)',
                            'rgba(255,0,0,1)',
                            'rgba(0,0,0,1)',
                            'rgba(255,0,0,1)',
                            'rgba(0,0,0,1)'
                        ],
                        'borderWidth' => 1
                    ]
                ]
            ],
            'options' => [
                'indexAxis' => 'y',
                'responsive' => false,
                'plugins' => [
                    'title' => [
                        'display' => true,
                        'text' => 'CAGR Comparison (%)',
                        'font' => ['size' => 14]
                    ],
                    'legend' => ['display' => false]
                ],
                'scales' => [
                    'x' => [
                        'beginAtZero' => true,
                        'title' => [
                            'display' => true,
                            'text' => 'Annualized Return (%)'
                        ],
                        'ticks' => [
                            'callback' => 'function(value) { return value + "%"; }'
                        ]
                    ],
                    'y' => [
                        'ticks' => [
                            'font' => [
                                'size' => 12,
                                'family' => "'Arial', 'Helvetica', sans-serif"
                            ],
                            'maxRotation' => 0, // Important: Prevent rotation
                            'minRotation' => 0  // Force horizontal text
                        ]
                    ]
                ]
            ]
        ];

        // QuickChart URL with explicit font settings
        $chartUrl = 'https://quickchart.io/chart?';
        $chartUrl .= 'c=' . urlencode(json_encode($cagrConfig));
        $chartUrl .= '&width=600&height=400';
        $chartUrl .= '&devicePixelRatio=2.0'; // Better quality for PDF
        $chartUrl .= '&format=png'; // Explicit PNG format

        return $this->imageToBase64($chartUrl);
    }

    public function salesreciept()
    {
        $pdf = PDF::loadView('pdf.sales-reciept-pdf');
        return $pdf->stream('Black Stone Motor Sales Reciept.pdf');
    }
}
