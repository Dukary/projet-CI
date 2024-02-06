@extends('grh_ci')

@section('content')
    <section id="gest_spa">
        <section id="identif" class="testimonials section-bg">
            <div class="container">
                <div class="pagetitle">
                    <h3>Gest Spa</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{'home'}}">Home</a></li>
                            <li class="breadcrumb-item">Gest Spa</li>
                            @if(@$_GET['p2'] == 'fiche')
                                <li class="breadcrumb-item active">Fiche</li>
                            @endif
                            @if(@$_GET['p2'] == 'suivi')
                                <li class="breadcrumb-item active">Suivi</li>
                            @endif
                        </ol>
                    </nav>
                </div><!-- End Page Title -->
                <br><br>
                <div class="card-body">
                    <!-- Bordered Tabs Justified -->
                    <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                        <li class="nav-item flex-fill" role="presentation">

                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <a href="/fiche?p2=fiche&opt=1"
                               class="nav-link w-100 text-center @if(@$_GET['p2'] == 'fiche') active @endif"><b class="">Fiche</b></a>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <a href="/suivi?p2=suivi"
                               class="nav-link w-100 text-center @if(@$_GET['p2'] == 'suivi') active  @endif"><b>Suivi</b></a>
                        </li>
                    </ul>
                    <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                        <div>
                            <br><br>
                            @if(@$_GET['p2'] == 'fiche')
                                @include('layouts.spa.form_spa')
                            @endif
                        </div>
                        <div>
                            @if(@$_GET['p2'] == 'suivi')
                                @include('layouts.spa.suivi_spa')
                            @endif
                        </div>
                    </div>
        </section>
    </section>
@endsection
