@extends('grh_ci')

@section('content')
    <style type="text/css">
        #message {
            display: none;
            position: fixed;
            top: 8px;
            right: 8px;
            border-radius: 0px;
            box-shadow: 1px 1px 4px black;
        }
    </style>
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
                            @if(@$_GET['p'] == 'ins')
                                <li class="breadcrumb-item active">Enregistrement</li>
                            @endif
                            @if(@$_GET['p'] == 'list')
                                <li class="breadcrumb-item active">Liste du personnel</li>
                            @endif
                            @if(@$_GET['p'] == 'mod')
                                <li class="breadcrumb-item active">Modication</li>
                            @endif
                        </ol>
                    </nav>
                </div><!-- End Page Title -->
                <br><br>
                @if(session()->get('vld_msg'))
                    <div id="message" class="alert alert-success" role="alert">
                        <i class="bi bi-check2-circle"></i>
                        {{session()->get('vld_msg')}}
                    </div>
                @endif

                <div class="card-body">
                    <!-- Bordered Tabs Justified -->
                    <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                        <li class="nav-item flex-fill" role="presentation">

                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <a href="/enreg?p=ins" class="nav-link w-100 text-center @if(@$_GET['p'] == 'ins') active @endif"><b class="">Enregistrement</b></a>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                                <a href="/perso_mod?p=list" class="nav-link w-100 text-center @if(@$_GET['p'] == 'list') active  @endif @if(@$_GET['p'] == 'mod') active  @endif"><b>Liste du Personnel</b></a>
                        </li>
                    </ul>
                    <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                        <div>
                            <br><br>
                            @if(@$_GET['p'] == 'ins')
                                @include('layouts.gest_perso.gest_identif.form_gest_perso')
                            @endif
                        </div>
                        <div>
                            @if(@$_GET['p'] == 'list')
                                @include('layouts.gest_perso.gest_identif.list_perso')
                            @endif
                        </div>
                    </div>
                </div>
        </section>
    </section>



    <script type="text/javascript">

        // Sélectionnez le message
        var message = document.getElementById("message");

        // Affichez le message
        message.style.display = "block";

        // Faites disparaître le message après 3 secondes
        setTimeout(function () {
            message.style.display = "none";
        }, 3000);
    </script>
@endsection
