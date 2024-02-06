<form class="row g-3" method="POST" action="/upd_perso">
    @csrf
    <div class="col-md-6">
        <div class="form-floating">
            <input type="text" value="{{$p[0]->num_cni}}" name="num_cni" class="form-control" id="floatingName" placeholder="Your N°CNI">
            <label for="floatingName">N°CNI</label>
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-floating">
            <input type="file" name="img" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Photo</label>
        </div>
    </div>
    <div class="col-md-1">
        <img src="/storage/{{$p[0]->img}}" style="width:50px; border-radius:50%" alt="">
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="nom" value="{{$p[0]->nom}}" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Nom Complet</label>
        </div>
    </div>
    @include('layouts.gest_perso.gest_identif.grade')
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="matri" value="{{$p[0]->matri}}" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Matricule</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <select class="form-select" name="sexe" aria-label="Default select example">
                <option>---</option>
                <option value="Masculin" @if($p[0]->sexe == 'Masculin') selected @endif>Masculin</option>
                <option value="Feminin" @if($p[0]->sexe == 'Feminin') selected @endif>Feminin</option>
            </select>
            <label for="floatingName">Sexe</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="date" name="date_nais" value="{{$p[0]->date_nais}}" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Date de naissance</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="lieu_nais" value="{{$p[0]->lieu_nais}}" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Lieu de naissance</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="ethnie" value="{{$p[0]->ethnie}}" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Ethnie</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="reg_ori" value="{{$p[0]->reg_ori}}" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Region d'origine</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="dep" value="{{$p[0]->dep}}" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Departement</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="arron" value="{{$p[0]->arron}}" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Arrondissement</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="mat_solde" value="{{$p[0]->mat_solde}}" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Matricule solde</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="date" name="date_eng" value="{{$p[0]->date_eng}}" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Engager le</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="relig" value="{{$p[0]->relig}}" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Religion</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="tel" value="{{$p[0]->tel}}" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Contact téléphonique</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="nom_pere" value="{{$p[0]->nom_mere}}" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Nom du père</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-floating">
            <input type="text" name="nom_mere" value="{{$p[0]->nom_mere}}" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Nom de la mère</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-floating">
            <input type="text" name="dip_elev" value="{{$p[0]->dip_elev}}" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Diplôme le plus élévé</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-floating">
            <input type="text" name="unit" value="{{$p[0]->unit}}" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Unité</label>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-floating">
            <select class="form-select" name="stat_civ" aria-label="Default select example">
                <option>---</option>
                <option value="Célibataire" @if($p[0]->stat_civ == 'Célibataire') selected @endif>Célibataire</option>
                <option value="Marié" @if($p[0]->stat_civ == 'Marié') selected @endif>Marié</option>
                <option value="Divorcé" @if($p[0]->stat_civ == 'Divorcé') selected @endif>Divorcé</option>
            </select>
            <label for="floatingName">Statut civil</label>
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
            <input type="text" name="" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Adresse du Service</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-floating">
            <input type="text" name="ville_pra" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Ville</label>
        </div>
    </div>
    <br>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </div>
</form>
