@extends('grh_ci')

@section('content')
    <section id="gest_users">
        <section id="identif" class="testimonials section-bg">
            <div class="container">
                <div class="pagetitle">
                    <h3>Gest Users</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{'home'}}">Home</a></li>
                            <li class="breadcrumb-item active">Gest Users</li>
                        </ol>
                    </nav>
                </div><!-- End Page Title -->
                <br><br>

                <div class="card-body">
                    <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                        <div>
                            @include('layouts.gest_users.list_users')
                        </div>
                    </div>
                </div>
        </section>
    </section>
@endsection
