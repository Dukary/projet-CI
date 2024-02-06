<html>
<head>
    <title>Fiche suivi N°{{$_GET['num']}}</title>
    <link href="assets/img/favicon.png" rel="icon">
    <style type="text/css">
        *{
            font-family: arial;
        }
        td{
            text-align: center;
        }
        .tab{
            border: 1px solid black;
        }
        .tab td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table align="center" style="font-size:11px">
        <tr>
            <td style="width:40%">
                <p>
                    <b><i>REPUBLIQUE DU CAMEROUN</i></b><br>
                    <i>Paix-Travail-Patri</i><br>
                    <b>..................................</b>
                </p>

                <p>
                    <b>PRESIDENCE DE LA REPUBLIQUE</b><br>
                    <i>MINISTRE DE LA DEFENCE</i><br>
                    <b>..................................</b>
                </p>

                <p>
                    <b>ARMEE DE L’AIR CENTRE D’INTRUCTION DE LA BASE AERIENNE 301</b><br>
                    <b>..................................</b>
                    <br> <br>Garoua le : {{$inf[0]->date_jour}}
                </p>
            </td>
            <td style="width:20%">
                <img src="assets\img\ico.png" width="100" height="100">
            </td>
            <td style="width:40%">
                <p>
                    <b><i>REPUBLIC OF CAMEROON</i></b><br>
                    <i>Peace-Work-Fatherland</i><br>
                    <b>..................................</b>
                </p>

                <p>
                    <b>	PRESIDENCY OF THE REPUBLIC</b><br>
                    <i>MINISTRY OF DEFENCE</i><br>
                    <b>..................................</b>
                </p>

                <p>
                    <b>	AIR FORCE 301 AIR FORCE BASE TRAINING CENTER</b><br>
                    <b>..................................</b>
                     <br><br>N°<u>{{$_GET['num']}}</u>/DV/AA/CIBA301/CDT
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="3"><br><h2>SITUATION DE PRISE D'ARME CI-BA301</h2></td>
        </tr>
    </table>
    <table align="center" style="font-size:9px;width:96%" class="tab" cellpadding="4" cellspacing="0">
        <tr>
            <td rowspan="2"><b>CATHEGORIE DE PERSONNEL</b></td>
            <td colspan="8"><b>OFFICIERS</b></td>
            <td colspan="5"><b>SOUS-OFFICIERS</b></td>
            <td colspan="4"><b>MILITAIRE DU RANG</b></td>
            <td rowspan="2"><b>TOTAL</b></td>
        </tr>
        <tr>
            <td>GBA</td>
            <td>COL</td>
            <td>LCL</td>
            <td>CDT</td>
            <td>CNE</td>
            <td>LTT</td>
            <td>SLT</td>
            <td>ASP</td>
            <td>ACM</td>
            <td>ADC</td>
            <td>ADT</td>
            <td>SGC</td>
            <td>SGT</td>
            <td>C/C</td>
            <td>CAL</td>
            <td>1°CL</td>
            <td>2°CL</td>
        </tr>
        <tr>
            <td colspan="19"><b>PRESENT</b></td>
        </tr>
        @foreach($cc1 as $a1)
            <tr>
                <td>{{$a1->cathegorie}}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="2"></td>
            </tr>
        @endforeach
        <tr>
            <td colspan="19"><b>PERSONNEL EN ABSENCE JUSTIFIE</b></td>
        </tr>
        @foreach($cc2 as $a2)
            <tr>
                <td>{{$a2->cathegorie}}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="2"></td>
            </tr>
        @endforeach
        <tr>
            <td colspan="19"><b>PERSONNEL EN ABSENCE INJUSTIFIE</b></td>
        </tr>
        @foreach($cc3 as $a3)
            <tr>
                <td>{{$a3->cathegorie}}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="2"></td>
            </tr>
        @endforeach
        <tr>
            <td colspan="19" style="background:black">###</td>
        </tr>
        <tr>
            <td><b>TOTAL GENERAL</b></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2"></td>
        </tr>
    </table>
</body>
</html>
