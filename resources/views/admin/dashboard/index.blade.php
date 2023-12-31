@extends('layout.base')

@section('title-head')
    <title>
        Dashboard | Logger Web App
    </title>
@endsection

@section('path')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}" class="link"><i
                                    class="mdi mdi-home-outline fs-4"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold">Dashboard</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-12">
                        <div id="container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('javascript')
    <script>
        Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Trend Activity',
        align: 'left'
    },
    subtitle: {
        text:
            '' +
            '',
        align: 'left'
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
        crosshair: true,
        accessibility: {
            description: 'Month'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Findings'
        }
    },
    tooltip: {
        valueSuffix: ' Findings'
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [
        {
            name: 'Open',
            data: [1, 12, 2, 4, 15, 7, 8, 12, 14, 11, 11, 16],
            color: 'red'
        },
        {
            name: 'Close',
            data: [7, 12, 34, 12, 34, 12, 11, 19, 10, 10, 11, 12],
            color: 'green'
        }
    ]
});

    </script>
@endsection
