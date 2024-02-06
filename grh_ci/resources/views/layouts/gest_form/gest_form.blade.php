@extends('grh_ci')

@section('content')
    <section id="gest_form">
        <section id="identif" class="testimonials section-bg">
            <div class="container">
                <div class="pagetitle">
                    <h3>Gest Formation</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{'home'}}">Home</a></li>
                            <li class="breadcrumb-item">Gest Spa</li>
                            @if(@$_GET['p3'] == 'plannif')
                                <li class="breadcrumb-item active">Plannification</li>
                            @endif
                            @if(@$_GET['p3'] == 'suivi')
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
                            <a href="/plannif?p3=plannif&opt=1"
                               class="nav-link w-100 text-center @if(@$_GET['p3'] == 'plannif') active @endif"><b class="">Plannification</b></a>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <a href="/suivi_form?p3=suivi"
                               class="nav-link w-100 text-center @if(@$_GET['p3'] == 'suivi') active  @endif"><b>Suivi</b></a>
                        </li>
                    </ul>
                    <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                        <div>
                            <br><br>
                            @if(@$_GET['p3'] == 'plannif')
                                @include('layouts.gest_form.plannif')
                            @endif
                        </div>
                        <div>
                            @if(@$_GET['p3'] == 'suivi')
                                @include('layouts.gest_form.suivi_form')
                            @endif
                        </div>
                    </div>
        </section>
    </section>
@endsection
