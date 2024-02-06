<section class="home">
    <div class="row">
        <div class="col-xl-6">

            <div class="testimonial-item">
                <img src="/storage/{{Auth()->user()->img}}" class="testimonial-img" alt="">
                <h3>{{Auth()->user()->pseudo}}</h3>
                <h4>{{ $info_perso->grade }}</h4>
                <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                    quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
            </div>

        </div>

        <div class="col-xl-6">
            <div class="testimonial-item">
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <h2>Profile Details</h2><br>

                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <b class="form-control" id="floatingName" placeholder="Your Name">{{$info_perso->matri}}</b>
                                <label for="floatingName">Matricule</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <b class="form-control" id="floatingName" placeholder="Your Name">{{$info_perso->nom}}</b>
                                <label for="floatingName">Nom Complet</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <b class="form-control" id="floatingName" placeholder="Your Name">{{$info_perso->grade}}</b>
                                <label for="floatingName">Grade</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
