<form class="row g-3" method="POST" action="/enreg">
        {{ csrf_field() }}
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" name="num_cni" class="form-control" id="floatingName" placeholder="Your N°CNI">
                <label for="floatingName">N°CNI</label>
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
                <input type="text" name="depart" class="form-control" id="floatingName" placeholder="Your Name">
                <label for="floatingName">Departement</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
                <input type="text" name="arrond" class="form-control" id="floatingName" placeholder="Your Name">
                <label for="floatingName">Arrondissement</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
                <input type="text" name="mat_sold" class="form-control" id="floatingName" placeholder="Your Name">
                <label for="floatingName">Matricule solde</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
                <input type="date" name="date_eng" class="form-control" id="floatingName" placeholder="Your Name">
                <label for="floatingName">Engager le</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
                <input type="text" name="religion" class="form-control" id="floatingName" placeholder="Your Name">
                <label for="floatingName">Religion</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
                <input type="text" name="num_tel" class="form-control" id="floatingName" placeholder="Your Name">
                <label for="floatingName">Contact téléphonique</label>
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
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" name="dip_ele" class="form-control" id="floatingName" placeholder="Your Name">
                <label for="floatingName">Diplôme le plus élévé</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" name="unite" class="form-control" id="floatingName" placeholder="Your Name">
                <label for="floatingName">Unité</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <select class="form-select" name="stat_civ" aria-label="Default select example">
                    <option selected>---</option>
                    <option value="Célibataire">Célibataire</option>
                    <option value="Marié">Marié</option>
                    <option value="Divorcé">Divorcé</option>
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
