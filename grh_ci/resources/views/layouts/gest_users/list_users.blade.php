<table class="table datatable">
    <thead>
    <tr>
        <th scope="col">img</th>
        <th scope="col">Matricule</th>
        <th scope="col">Pseudo</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($list_users as $l)
        <tr>
            <th scope="row"><img src="assets/img/users/{{$l->img}}" style="width:30px; border-radius:50%" alt=""></th>
            <td>{{ $l->matri }}</td>
            <td>{{ $l->pseudo }}</td>
            <td><a href="#" style="color:lime;font-weight: bold;"><i class="bi bi-sliders"></i></a></td>
        </tr>
    @endforeach
    </tbody>
</table>
