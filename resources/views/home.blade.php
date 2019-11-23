
@extends('layouts.main')
@section('title', 'Subscriber')
@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
   <div class="breadcrumbbar">
      <ul>
         <li class="breadcrumb-item">
            <a href="{{ url('home') }}"><span>Dashboard</span><i class="fas fa-arrow-left fa-fw"></i></a>
         </li>
      </ul>
   </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
                    
        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="#" class="after-loop-item card border-0 card-templates">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Group</h4>
                <h2>50</h2>
                <i class="far fa-object-group"></i>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="/snippets/" class="after-loop-item card border-0 card-snippets">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Branch</h4>
                <h2 class="w-75">40</h2>
                <i class="fas fa-code-branch"></i>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="/guides/" class="after-loop-item card border-0 card-guides shadow-lg">
            <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Scheme</h4>
                <h2 class="w-75">20</h2>
                <i class="fas fa-pencil-ruler"></i>
            </div>
            </a>
        </div>
         <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="#" class="after-loop-item card border-0 card-expence">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Expence</h4>
                <h2>50</h2>
                <i class="fas fa-file-invoice-dollar"></i>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="/snippets/" class="after-loop-item card border-0 card-pending">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Pending Amount</h4>
                <h2 class="w-75">40</h2>
                <i class="fas fa-exclamation-circle"></i>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="/guides/" class="after-loop-item card border-0 card-auction shadow-lg">
            <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Auction</h4>
                <h2 class="w-75">20</h2>
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-lg-6 col-md-6 bottomgap">
            <div id="piechart"></div>
        </div>
        <div class="col-12 col-sm-12 col-lg-6 col-md-6 bottomgap">
            <div id="columnchart"></div>
        </div>
        <div class="col-12 col-sm-12 col-lg-6 col-md-6 bottomgap">
            <div id="barchart"></div>
        </div>
        <div class="col-12 col-sm-12 col-lg-6 col-md-6 bottomgap">
            <div id="areachart"></div>
        </div>
        
    </div>
</div>



@endsection
@section('script')
<script>
    Highcharts.chart('piechart', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Browser market shares in January, 2018'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Chrome',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: 'Internet Explorer',
            y: 11.84
        }, {
            name: 'Firefox',
            y: 10.85
        }, {
            name: 'Edge',
            y: 4.67
        }, {
            name: 'Safari',
            y: 4.18
        }, {
            name: 'Sogou Explorer',
            y: 1.64
        }, {
            name: 'Opera',
            y: 1.6
        }, {
            name: 'QQ',
            y: 1.2
        }, {
            name: 'Other',
            y: 2.61
        }]
    }]
});


    Highcharts.chart('columnchart', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Monthly Average Rainfall'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Tokyo',
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

    }, {
        name: 'New York',
        data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

    }, {
        name: 'London',
        data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

    }, {
        name: 'Berlin',
        data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

    }]
});

    Highcharts.chart('areachart', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Historic and Estimated Worldwide Population Growth by Region'
    },
    subtitle: {
        text: 'Source: Wikipedia.org'
    },
    xAxis: {
        categories: ['1750', '1800', '1850', '1900', '1950', '1999', '2050'],
        tickmarkPlacement: 'on',
        title: {
            enabled: false
        }
    },
    yAxis: {
        title: {
            text: 'Billions'
        },
        labels: {
            formatter: function () {
                return this.value / 1000;
            }
        }
    },
    tooltip: {
        split: true,
        valueSuffix: ' millions'
    },
    plotOptions: {
        area: {
            stacking: 'normal',
            lineColor: '#666666',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#666666'
            }
        }
    },
    series: [{
        name: 'Asia',
        data: [502, 635, 809, 947, 1402, 3634, 5268]
    }, {
        name: 'Africa',
        data: [106, 107, 111, 133, 221, 767, 1766]
    }, {
        name: 'Europe',
        data: [163, 203, 276, 408, 547, 729, 628]
    }, {
        name: 'America',
        data: [18, 31, 54, 156, 339, 818, 1201]
    }, {
        name: 'Oceania',
        data: [2, 2, 2, 6, 13, 30, 46]
    }]
});

  Highcharts.chart('barchart', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Stacked column chart'
    },
    xAxis: {
        categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total fruit consumption'
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'gray'
            }
        }
    },
    legend: {
        align: 'right',
        x: -30,
        verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true
            }
        }
    },
    series: [{
        name: 'John',
        data: [5, 3, 4, 7, 2]
    }, {
        name: 'Jane',
        data: [2, 2, 3, 2, 1]
    }, {
        name: 'Joe',
        data: [3, 4, 4, 2, 5]
    }]
});
    </script>

@endsection