@extends('grh_ci')

@section('content')
<?php
    use App\Models\Grade;
?>
    <section id="home">
        <section class="testimonials section-bg">
            <div class="container">
                <div class="pagetitle">
                    <h3>Dashboard</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                    </nav>
                </div><!-- End Page Title -->

                <div class="section-title">
                    <h2>Fiche Individuel</h2>
                </div>
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach($list as $l)
                        <?php
                            $abv = $l->grade;

                            $sel_abv = Grade::where('titre',$abv)->get();
                        ?>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="/storage/{{ $l->img }}" class="testimonial-img" alt="">

                                    <h3>{{ $sel_abv[0]->code.'. '.$l->nom }}</h3>
                                    <h4>{{ $l->matri }}</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->

        <section id="home" class="testimonials">
            <div class="container">

                <div class="section-title">
                    <h2>Etat des Permissions</h2>
                    <br><br>
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Age</th>
                            <th scope="col">Start Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Brandon Jacob</td>
                            <td>Designer</td>
                            <td>28</td>
                            <td>2016-05-25</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Bridie Kessler</td>
                            <td>Developer</td>
                            <td>35</td>
                            <td>2014-12-05</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Ashleigh Langosh</td>
                            <td>Finance</td>
                            <td>45</td>
                            <td>2011-08-12</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Angus Grady</td>
                            <td>HR</td>
                            <td>34</td>
                            <td>2012-06-11</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Raheem Lehner</td>
                            <td>Dynamic Division Officer</td>
                            <td>47</td>
                            <td>2011-04-19</td>
                        </tr>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                </div>
            </div>
            <div class="swiper-pagination"></div>
            </div>

            </div>
        </section><!-- End Testimonials Section -->

        <section id="g" class="testimonials section-bg">
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
                            <a href="/home?p=graph1&#g" class="nav-link w-100 text-center @if(@$_GET['p'] == 'graph1') active @endif @if(@$_GET['p'] == '') active @endif"><b class="">Graph Sexe Perso/Stag</b></a>
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
        </section><!-- End Testimonials Section -->
    </section>
@endsection
