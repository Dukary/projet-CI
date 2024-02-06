<?php

use App\Models\Personnel;

$mat = Auth()->user()->matri;
$info_perso = Personnel::where('matri', $mat)->first();

function verif_niv_sec()
{
    if (Auth()->user()->niv_sec == 'niv1') {
        echo 'hidden';
    }
}

?>

    <!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <div class="logo me-auto">
            <h1><a href="/home"><img src="assets/img/ico.png" style="border-radius: 50%;" width="" height=""> AIR FORCE</a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto " href="/home#home" data-bs-target="#home"
                       data-bs-toggle="testimonials">Home</a></li>
                <li><a class="nav-link scrollto " href="/plannif?p3=plannif&opt=1#gest_form" data-bs-target="#gest_form">Gest
                        Formation</a></li>
                <li><a class="nav-link scrollto " href="/fiche?p2=fiche&opt=1&#gest_spa" data-bs-target="#gest_spa">Gest
                        SPA</a></li>
                <li class="dropdown"><a class="nav-link scrollto " href="{{'#gest_perso'}}" data-bs-target="#gest_perso"><span>Gest Personnel</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/enreg?p=ins" {{ verif_niv_sec() }} data-bs-target="gest_identif"
                               data-bs-toggle="about">Identification</a></li>
                        <li><a href="#">Suivi Avancement</a></li>
                        <li><a href="#">Suivi Mission</a></li>
                        <li><a href="#">Suivi Permission</a></li>
                        <li><a href="#">Suivi Reglement</a></li>
                        <li><a href="#">Performances</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto " {{ verif_niv_sec() }} href="/gest_users#gest_users"
                       data-bs-target="#gest_users">Gest Users</a></li>
                <li class="dropdown">
                    <a class="nav-link scrollto " href="#profil" data-bs-target="#gest_perso">
              <span>
                  @if(Auth()->user()->img === '')
                      <i class="bi bi-person-circle" style="font-size:20px"></i>
                  @endif

                  @if(Auth()->user()->img != '')
                      <img src="/storage/{{ Auth()->user()->img }}" style="width:30px; border-radius:50%"
                           alt="">
                  @endif
                  {{Auth()->user()->pseudo}}
              </span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li class="text-center">
                            <h6><b>{{Auth()->user()->pseudo}}</b></h6>
                            <span>{{ $info_perso->grade }}</span>
                        </li>
                        <li>
                            <hr>
                        </li>
                        <li><a href="/profil?p=prof#profil">Profil</a></li>
                        <li><a href="/logout">Déconnexion</a></li>
                    </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->
