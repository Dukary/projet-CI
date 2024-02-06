@php
use App\Models\Personnel;
use App\Models\Infostag;
@endphp
<div class="col-lg-6">
    <h5 class="card-title">Graph Sexe Personnels</h5>
    <br><br>
    <!-- Pie Chart -->
    <div id="pieChart"></div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            new ApexCharts(document.querySelector("#pieChart"), {
                series: [{{$nh}}, {{$nf}}],
                chart: {
                    height: 350,
                    type: 'pie',
                    toolbar: {
                        show: true
                    }
                },
                labels: ['Sexe Masculin', 'Sexe Feminin']
            }).render();
        });
    </script>
    <!-- End Pie Chart -->
</div>
<div class="col-lg-6">
    <h5 class="card-title">Graph Sexe Stagiares</h5>
    <br><br>
    <!-- Donut Chart -->
    <div id="donutChart"></div>
    @foreach($sel_all as $sel)
        <?php
            $mat = $sel->matri;
            $s1 = 0;
            $s2 = 0;

            $n_s1 = Personnel::where('matri',$mat)->where('sexe','Feminin')->count();
            $s1 = $s1+$n_s1;

            $n_s11 = Infostag::where('matri',$mat)->where('sexe','Feminin')->count();
             $s1 = $s1+$n_s11;

            $n_s2 = Infostag::where('matri',$mat)->where('sexe','Masculin')->count();
            $s2 = $s2+$n_s2;

            $n_s22 = Personnel::where('matri',$mat)->where('sexe','Masculin')->count();
            $s2 = $s2+$n_s22;
        ?>
    @endforeach
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            new ApexCharts(document.querySelector("#donutChart"), {
                series: [{{$s2}},{{$s1}}],
                chart: {
                    height: 350,
                    type: 'donut',
                    toolbar: {
                        show: true
                    }
                },
                labels: ['Sexe Masculin', 'Sexe Feminin'],
            }).render();
        });
    </script>
    <!-- End Donut Chart -->
</div>
