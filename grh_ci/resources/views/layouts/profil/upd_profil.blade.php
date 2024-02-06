<br>
<div class="container">
        <form class="row g-3" method="POST" action="/profil">
            <div class="col-md-6">
                <div class="form-floating">
                    <b class="form-control" id="floatingName" placeholder="Your Name">{{$info_perso->matri}}</b>
                    <label for="floatingName">Matricule</label>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-floating">
                    <input type="file" name="photo" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">Photo</label>
                </div>
            </div>
            <div class="col-md-1">
                <img src="/storage/{{ Auth()->user()->img }}" style="width:50px; border-radius:50%" alt="">
            </div>
            <div class="col-md-3">
                <div class="form-floating">
                    <input type="text" value="{{Auth()->user()->pseudo}}" autocomplete="off" name="nom" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">Pseudo</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-floating">
                    <input type="password" autocomplete="off" name="old_pwd" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">Old password</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-floating">
                    <input type="password" name="new_pwd" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">New password</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-floating">
                    <input type="text" autocomplete="off" name="pwd_conf" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">Password Confirm</label>
                </div>
            </div>
            <br>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </div>
