@extends('grh_ci')

@section('content')
    <section id="gest_perso">
        <section id="identif" class="testimonials section-bg">
            <div class="container">
                <div class="pagetitle">
                    <h3>Gest Personnel</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{'home'}}">Home</a></li>
                            <li class="breadcrumb-item">Gest Personnel</li>
                            <li class="breadcrumb-item">Identification</li>
                            <li class="breadcrumb-item active">Modification</li>
                        </ol>
                    </nav>
                </div><!-- End Page Title -->
                <br><br>
                @if(session()->get('vld_msg'))
                    <div class="alert alert-success">
                        {{ session()->get('vld_msg') }}
                    </div>
                @endif
                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                        <li class="nav-item flex-fill" role="presentation">

                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <a href="/enreg?p=ins" class="nav-link w-100 text-center @if(@$_GET['p'] == 'ins') active @endif"><b class="">Enregistrement</b></a>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <a href="/perso_mod?p=list" class="nav-link w-100 text-center @if(@$_GET['p'] == 'upd') active  @endif @if(@$_GET['p'] == 'mod') active  @endif"><b>Modification</b></a>
                        </li>
                    </ul>
                    <br><br>
                    <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                        <div>
                            @include('layouts.gest_perso.gest_identif.upd_perso')
                        </div>
                    </div>
                </div>
        </section>
    </section>
@endsection
