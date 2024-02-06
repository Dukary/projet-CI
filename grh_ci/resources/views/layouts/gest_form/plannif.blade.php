<form class="row g-3" method="POST" action="/plannif{{$_GET['opt']}}" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6 text-center">
        <a href="/plannif?p3=plannif&opt=1" style="@if(@$_GET['opt'] == 1) border: 3px solid black;box-shadow: 0 0 8px black; @endif" class="l">Stagiare de la base</a>
    </div>
    <div class="col-md-6 text-center">
        <a href="/plannif?p3=plannif&opt=2" style="@if(@$_GET['opt'] == 2) border: 3px solid black;box-shadow: 0 0 8px black; @endif" class="l">Stagiare d'une autre base</a>
    </div>
    <div class="col-md-12 text-center">
        <hr>
    </div>
@if(@$_GET['opt'] == 1)
    <div class="col-md-6">
        <div class="form-floating">
            <select class="form-select" name="stage" aria-label="Default select example">
                <option selected>---</option>
                @foreach($list as $l)
                    <option value="{{$l->titre}}">{{$l->titre}}</option>
                @endforeach
            </select>
            <label for="floatingName">Stage</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-floating">
            <input type="text" name="matri" autocomplete="off" class="form-control" list="mat" id="floatingName" placeholder="Your Name">
            <datalist id="mat">
                @foreach($perso as $p)
                    <option value="{{$p->matri}}">{{$p->nom}}</option>
                @endforeach
            </datalist>
            <label for="floatingName">Matricule</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-floating">
            <input type="text" name="form" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Formation</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-floating">
            <input type="text" name="lieu_form" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Lieu de Formation</label>
        </div>
    </div>
@endif

@if(@$_GET['opt'] == 2)
    <div class="col-md-6">
        <div class="form-floating">
            <select class="form-select" name="stage" aria-label="Default select example">
                <option selected>---</option>
                @foreach($list as $l)
                    <option value="{{$l->titre}}">{{$l->titre}}</option>
                @endforeach
            </select>
            <label for="floatingName">Stage</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-floating">
            <input type="file" name="img" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Photo</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="nom" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Nom Complet</label>
        </div>
    </div>
    @include('layouts.gest_perso.gest_identif.grade')
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="matri" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Matricule</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <select class="form-select" name="sexe" aria-label="Default select example">
                <option selected>---</option>
                <option value="Masculin">Masculin</option>
                <option value="Feminin">Feminin</option>
            </select>
            <label for="floatingName">Sexe</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="date" name="date_nais" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Date de naissance</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="lieu_nais" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Lieu de naissance</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="ethnie" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Ethnie</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="reg_ori" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Region d'origine</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="dep" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Département</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="arron" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Arrondissement</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="mat_solde" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Matricule Solde</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="num_cni" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">N° CNI</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="date" min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" name="date_deliv" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Delivre Le</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="date" name="date_eng" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Engager Le</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="lieu_form" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Lieu de Formation</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="relig" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Religion</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="tel" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Contact Télephonique</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="dip_elev" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Diplome le plus élévé</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="nom_pere" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Nom du père</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="nom_mere" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Nom de la mère</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="form" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Formation</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="unite" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Unité</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="emp_ten" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Emplois Tenu</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="qual_alea" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Qualification Aléatoire</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-floating">
            <input type="text" name="form_spe" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Formation Spéciale</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-floating">
            <select class="form-select" name="stat_civ" aria-label="Default select example">
                <option selected>---</option>
                <option value="Marie">Marie</option>
                <option value="Celibataire">Célibataire</option>
                <option value="Veu">Veuf(Ve)</option>
            </select>
            <label for="floatingName">Statut Civil</label>
        </div>
    </div>
    <div class="col-md-12">
        <h3>Personne a rencontrer en cas d'accident</h3>
    </div>
    <div class="col-md-4">
        <div class="form-floating">
            <input type="text" name="nom_pra" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Nom et Prénom</label>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-floating">
            <input type="text" name="lien_pa_pra" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Lien de Parenté</label>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-floating">
            <input type="text" name="tel_pra" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Téléphone</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-floating">
            <input type="text" name="add_ser_pra" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Adresse du Service</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-floating">
            <input type="text" name="ville_pra" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Ville</label>
        </div>
    </div>
@endif
    <br>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </div>
</form><!-- End floating Labels Form -->
