<div class="col-lg-6">
    <h5 class="card-title">Cathegorie</h5>

    <!-- Column Chart -->
    <div id="columnChart"></div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            new ApexCharts(document.querySelector("#columnChart"), {
                series: [{
                    name: 'Net Profit',
                    data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
                }, {
                    name: 'Revenue',
                    data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
                }, {
                    name: 'Free Cash Flow',
                    data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
                }],
                chart: {
                    type: 'bar',
                    height: 350
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                },
                yaxis: {
                    title: {
                        text: '$ (thousands)'
                    }
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return "$ " + val + " thousands"
                        }
                    }
                }
            }).render();
        });
    </script>
    <!-- End Column Chart -->
</div>

<div class="col-lg-6">
    <h5 class="card-title">Grade</h5>

    <!-- Bar Chart -->
    <div id="barChart"></div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            new ApexCharts(document.querySelector("#barChart"), {
                series: [{
                    data: [ {{$stat1}},
                            {{$stat2}},
                            {{$stat3}},
                            {{$stat4}},
                            {{$stat5}},
                            {{$stat6}},
                            {{$stat7}},
                            {{$stat8}},
                            {{$stat9}},
                            {{$stat10}},
                            {{$stat11}},
                            {{$stat12}},
                            {{$stat13}},
                            {{$stat14}},
                            {{$stat15}} ]
                }],
                chart: {
                    type: 'bar',
                    height: 350
                },
                plotOptions: {
                    bar: {
                        borderRadius: 4,
                        horizontal: true,
                    }
                },
                dataLabels: {
                    enabled: false
                },
                xaxis: {
                    categories: [
                        @foreach($list_grades as $lg) '{{$lg->titre}}', @endforeach
                    ],
                }
            }).render();
        });
    </script>
    <!-- End Bar Chart -->
</div>
