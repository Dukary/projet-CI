<section id="home" class="testimonials section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Graphe Statistique</h2>
        </div><br><br>
        <div class="card-body">
            <!-- Bordered Tabs Justified -->
            <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                <li class="nav-item flex-fill" role="presentation">

                </li>
                <li class="nav-item flex-fill" role="presentation">
                    <a href="/home?p=graph1&#g" class="nav-link w-100 text-center @if(@$_GET['p'] == 'graph1') active @endif @if(@$_GET['p'] == '') active @endif"><b class="">Age/Sexe</b></a>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                    <a href="/home?p=graph2&#g" class="nav-link w-100 text-center @if(@$_GET['p'] == 'graph2') active  @endif"><b>Cathégorie/Grade</b></a>
                </li>
            </ul>
            <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                <div>
                    <br><br>
                    <div class="row">
                        @if(@$_GET['p'] == '')
                            @include('layouts.dash.graph.graph1')
                        @endif
                    </div>
                </div>
                <div>
                    <br><br>
                    <div class="row">
                        @if(@$_GET['p'] == 'graph1')
                            @include('layouts.dash.graph.graph1')
                        @endif
                    </div>
                </div>
                <div>
                    <div class="row">
                        @if(@$_GET['p'] == 'graph2')
                            @include('layouts.dash.graph.graph2')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
