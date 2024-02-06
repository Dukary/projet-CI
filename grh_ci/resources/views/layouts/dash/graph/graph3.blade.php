<div class="col-lg-6">
    <h5 class="card-title">Age</h5>
    <!-- Pie Chart -->
    <div id="pieChart"></div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            new ApexCharts(document.querySelector("#pieChart"), {
                series: [44, 55, 13, 43, 22],
                chart: {
                    height: 350,
                    type: 'pie',
                    toolbar: {
                        show: true
                    }
                },
                labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E']
            }).render();
        });
    </script>
    <!-- End Pie Chart -->
</div>
<div class="col-lg-6">
    <h5 class="card-title">Age</h5>

    <?php
    $dd = date("Y-m-d");
    $age = "2001-06-24";
    $diff = date_diff(date_create($age),date_create($dd));

    echo $diff->format('%y');
    echo $list = request('list');

    ?>


    <div id="pieChart" style="min-height: 400px;" class="echart"></div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            echarts.init(document.querySelector("#pieChart")).setOption({
                title: {
                    text: 'Referer of a Website',
                    subtext: 'Fake Data',
                    left: 'center'
                },
                tooltip: {
                    trigger: 'item'
                },
                legend: {
                    orient: 'vertical',
                    left: 'left'
                },
                series: [{
                    name: 'Access From',
                    type: 'pie',
                    radius: 'ç0%',
                    data: [{
                        value: 1048,
                        name: 'Search Engine'
                    },
                        {
                            value: 735,
                            name: 'Direct'
                        },
                        {
                            value: 580,
                            name: 'Email'
                        },
                        {
                            value: 484,
                            name: 'Union Ads'
                        },
                        {
                            value: 300,
                            name: 'Video Ads'
                        }
                    ],
                    emphasis: {
                        itemStyle: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }]
            });
        });
    </script>
    <!-- End Pie Chart -->
</div>
