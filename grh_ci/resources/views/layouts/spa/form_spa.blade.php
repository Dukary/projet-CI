<form class="row g-3" method="POST" action="/enreg_spa">
    {{ csrf_field() }}
    <div class="col-md-4 text-center">
        <a href="/fiche?p2=fiche&opt=1" style="@if(@$_GET['opt'] == 1) border: 3px solid black;box-shadow: 0 0 8px black; @endif" class="l">Personnel Présent</a>
    </div>
    <div class="col-md-4 text-center">
        <a href="/fiche?p2=fiche&opt=2" style="@if(@$_GET['opt'] == 2) border: 3px solid black;box-shadow: 0 0 8px black; @endif" class="l">Personnel en Absence Justifiée</a>
    </div>
    <div class="col-md-4 text-center">
        <a href="/fiche?p2=fiche&opt=3" style="@if(@$_GET['opt'] == 3) border: 3px solid black;box-shadow: 0 0 8px black; @endif" class="l">Personnel en Absence Injustifiée</a>
    </div>
    <div class="col-md-12 text-center">
        <hr>
    </div>
    <div class="col-md-6">
        <div class="form-floating">
            <input type="text" name="num_spa" value="000" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">N°</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-floating">
            <input type="date" min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" name="date" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Date</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-floating">
            <input type="text" name="matri" list="mat" autocomplete="off" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Matricule</label>
            <datalist id="mat">
                @foreach($perso as $p)
                    <option value="{{$p->matri}}">{{$p->nom}}</option>
                @endforeach
            </datalist>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-floating">
            <select class="form-select"  name="cath" aria-label="Default select example">
                <option selected>---</option>
                @foreach($cath as $c)
                    <option value="{{ $c->etat }}">{{ $c->cathegorie }}</option>
                @endforeach
            </select>
            <label for="floatingName">Cathegorie</label>
        </div>
    </div>
    <br>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </div>
</form>
