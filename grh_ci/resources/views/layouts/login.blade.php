@extends('index')

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
    @if(session()->has('statut'))
        @php
            $a = 'bi bi-exclamation-triangle-fill';
            $b = session()->get('statut');
            $c = 'danger';
            msg($c,$b,$a)
        @endphp
    @endif

    @if(session()->has('err_con'))
        @php
            $a = 'bi bi-exclamation-triangle-fill';
            $b = session()->get('err_con');
            $c = 'danger';
            msg($c,$b,$a)
        @endphp
    @endif

    @if(session()->has('log'))
        @php
            $a = 'bi bi-check2-circle';
            $b = session()->get('log');
            $c = 'success';
            msg($c,$b,$a)
        @endphp
    @endif

    @if($errors->has('password') || $errors->has('matricule'))
        @php
            $a = 'bi bi-exclamation-triangle-fill';
            $b = 'Erreur de connexion !';
            $c = 'warning';
            msg($c,$b,$a)
        @endphp
    @endif

    <form method="POST" action="/">
        @csrf
        <img class="mb-4" src="assets/img/ico.png" style="padding: 2%;border-radius: 50%;" alt="" width="120"
             height="120">
        <h1 class="h3 mb-3 fw-normal"><b>GRH CI-BA 301</b></h1>

        <div class="form-floating">
            <input type="text" name="matricule" value="{{ old('matricule') }}" autocomplete="off" class="form-control"
                   id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Matricule</label>
        </div>
        @if($errors->has('matricule'))
            <div style="color:red;margin: 2% 0;font-style: italic;opacity: 0.5;">
                {{ $errors->first('matricule') }}
            </div>
        @endif
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        @if($errors->has('password'))
            <div style="color:red;margin: 2% 0;font-style: italic;opacity: 0.5">
                {{ $errors->first('password') }}
            </div>
        @endif
        <br>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Se Connecter</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2023–2024</p>
    </form>
    @php
        function msg($c,$m,$a){
            echo'
                <div id="message" class="alert alert-'.$c.'" role="alert">
                <i class="'.$a.'"></i>
                    '.$m.'
                </div>
            ';
        }
    @endphp
    <script type="text/javascript">

        // Sélectionnez le message
        var message = document.getElementById("message");

        // Affichez le message
        message.style.display = "block";

        // Faites disparaître le message après 6 secondes
        setTimeout(function () {
            message.style.display = "none";
        }, 6000);
    </script>
@endsection
