@extends('grh_ci')

@section('content')
<?php
    use App\Models\Personnel;

    $mat = Auth()->user()->matri;
    $info_perso = Personnel::where('matri', $mat)->first();
?>
<section id="profil">
    <section class="testimonials section-bg">
        <div class="container">
            <div class="pagetitle">
                <h3>Profil</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item ">Profil</li>
                        @if(@$_GET['p'] == 'prof')
                            <li class="breadcrumb-item active">Profil</li>
                        @endif
                        @if(@$_GET['p'] == 'upd')
                            <li class="breadcrumb-item active">Modification</li>
                        @endif
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <div class="card-body">
                <!-- Bordered Tabs Justified -->
                <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                    <li class="nav-item flex-fill" role="presentation">

                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                        <a href="/profil?p=prof#profil"
                           class="nav-link w-100 text-center @if(@$_GET['p'] == 'prof') active @endif"><b class="">Profil</b></a>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                        <a href="/profil?p=upd#profil"
                           class="nav-link w-100 text-center @if(@$_GET['p'] == 'upd') active  @endif"><b>Modification</b></a>
                    </li>
                </ul>
                <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                    <div>
                        @if(@$_GET['p'] == 'prof')
                            @include('layouts.profil.det_profil')
                        @endif
                    </div>
                    <div>
                        @if(@$_GET['p'] == 'upd')
                            @include('layouts.profil.upd_profil')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
