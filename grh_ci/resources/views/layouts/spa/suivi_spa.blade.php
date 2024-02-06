<table class="table datatable">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">N°</th>
        <th scope="col">Date</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($list as $l)
        <tr>
            <th scope="row">{{ $l->id }}</th>
            <td>{{ $l->num_spa }}</td>
            <td>{{ $l->date_jour }}</td>
            <td><a href="/fiche_suivi?num={{$l->num_spa}}" style="color:lime;font-weight: bold;" target="blank"><i class="bi bi-eye"></i></a></td>
        </tr>
    @endforeach
    </tbody>
</table>
