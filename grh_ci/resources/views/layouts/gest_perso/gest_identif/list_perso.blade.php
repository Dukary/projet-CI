<table class="table datatable">
    <thead>
    <tr>
        <th scope="col">img</th>
        <th scope="col">Matricule</th>
        <th scope="col">Nom</th>
        <th scope="col">Grade</th>
        <th scope="col">Date de naissance</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($list as $l)
        <tr>
            <th scope="row"><img src="/storage/{{$l->img}}" style="width:30px; border-radius:50%" alt=""></th>
            <td>{{ $l->matri }}</td>
            <td>{{ $l->nom }}</td>
            <td>{{ $l->grade }}</td>
            <td>{{ $l->date_nais }}</td>
            <td><a href="/upd?mat={{ $l->matri }}&p=upd" style="color:lime;font-weight: bold;"><i class="bi bi-sliders"></i></a></td>
            <td><a href="/del/{{ $l->matri }}" style="color:red;font-weight: bold;"><i class="bi bi-trash"></i></a></td>
            <td><a href="/fich_perso?mat={{$l->matri}}" target="blank" style="color:blue;font-weight: bold;"><i class="bi bi-file-richtext"></i></a></td>
        </tr>
    @endforeach
    </tbody>
</table>
