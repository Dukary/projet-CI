<?php
    use App\Models\Infostag;
    use App\Models\Personnel;
?>
<table class="table datatable">
    <thead>
    <tr>
        <th scope="col">img</th>
        <th scope="col">Stage</th>
        <th scope="col">Matricule</th>
        <th scope="col">Type stagiaire</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($suiv as $l)
        <tr>
            <th scope="row">
            <?php
                $mat = $l->matri;

                if($l->type_stag == "perso"){
                    $rec_img = Personnel::where('matri',$mat)->get();
            ?>
                <img src="/storage/{{ $rec_img[0]->img }}" style="width:30px; border-radius:50%">
            <?php
                }else{
                    $rec_img = Infostag::where('matri',$mat)->get();
            ?>
                    <img src="/storage/{{ $rec_img[0]->img }}" style="width:30px; border-radius:50%">
            <?php
                }
            ?>

            </th>
            <td>{{ $l->stage }}</td>
            <td>{{ $l->matri }}</td>
            <td>
            @if($l->type_stag == "perso")
                Personnel
            @endif

            @if($l->type_stag == "stag")
                Stagiare
            @endif
            </td>
            <td><a href="/suivi_form?mat={{$l->matri}}" style="color:orange;font-weight: bold;" target="blank"><i class="bi bi-sliders" style="float:right"></i></a></td>
            <td>
                @if($l->type_stag == "stag")
                    <a href="/suivi_form1?mat={{$l->matri}}" style="color:blue;font-weight: bold;" target="blank"><i class="bi bi-file-richtext" style="float:right"></i></a>
                @endif

                @if($l->type_stag == "perso")
                    <a href="/suivi_form2?mat={{$l->matri}}" style="color:blue;font-weight: bold;" target="blank"><i class="bi bi-file-richtext" style="float:right"></i></a>
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
