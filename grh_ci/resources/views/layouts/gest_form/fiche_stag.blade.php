<html>
<head>
    <title>Fiche personnel</title>
    <link href="assets/img/favicon.png" rel="icon">
    <style type="text/css">
        *{
            font-family: arial;
        }
        td{
            text-align: center;
        }
        .tab td{
            text-align:left;
            font-size:11px;
        }
        .img{
            border: 2px solid black;
            border-radius: 5px;
            box-shadow: 0 0 8px black;
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
                    <i>MINISTERE DE LA DEFENCE</i><br>
                    <b>..................................</b>
                </p>

                <p>
                    <b>ARMEE DE L’AIR</b><br>
                    <b>..................................</b>
                </p>

                <p>
                    <b>CENTRE D’INTRUCTION DE LA BASE AERIENNE 301</b><br>
                    <b>..................................</b>
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
                    <b>	AIR FORCE</b><br>
                    <b>..................................</b>
                </p>

                <p>
                    <b>301 AIR FORCE BASE TRAINING CENTER</b><br>
                    <b>..................................</b>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="3"><br><h1>FORMULAIRE DE RENSEIGNEMENT CI-BASE 301</h1></td>
        </tr>
    </table>
    <table class="tab" style="width:95%;" cellspacing="0" cellpadding="5" align="center">
        <tr>
            <td><b>STAGE : </b> <?php echo strtoupper($info_form[0]->stage); ?></td>
            <td><div align="right"><img class="img" src="/storage/{{$info_stag[0]->img}}" width="120" height="120"></div><br><br></td>
        </tr>
        <tr>
            <td><b>1-NOM ET PRENOM :</b> <?php echo strtoupper($info_stag[0]->nom); ?></td>
            <td style="margin-left: 80%"><b>2-GRADE :</b> <?php echo strtoupper($info_stag[0]->grade); ?></td>
        </tr>
        <tr>
            <td><b>3-MLE:</b> <?php echo strtoupper($info_stag[0]->matri); ?></td>
            <td><b>4-SEXE :</b> <?php echo strtoupper($info_stag[0]->sexe); ?></td>
        </tr>
        <tr>
            <td><b>5-DATE DE NAISSANCE :</b> {{$info_stag[0]->date_nais}}</td>
            <td><b>A :</b> <?php echo strtoupper($info_stag[0]->date_nais); ?></td>
        </tr>
        <tr>
            <td><b>6-ETHNIE :</b> <?php echo strtoupper($info_stag[0]->ethnie); ?></td>
            <td><b>7-REGION D'ORIGINE :</b> <?php echo strtoupper($info_stag[0]->reg_ori); ?></td>
        </tr>
        <tr>
            <td><b>8-DEPARTEMENT :</b> <?php echo strtoupper($info_stag[0]->dep); ?></td>
            <td><b>9-ARRONDISSEMENT :</b> <?php echo strtoupper($info_stag[0]->arron); ?></td>
        </tr>
        <tr>
            <td><b>10-MLE SOLDE :</b> <?php echo strtoupper($info_stag[0]->mat_solde); ?></td>
            <td><b>11-N° CIM :</b> </td>
        </tr>
        <tr>
            <td><b>12-N° CNI :</b> <?php echo strtoupper($info_stag[0]->num_cni); ?></td>
            <td><b>13-DELIVRE LE :</b> <?php echo strtoupper($info_stag[0]->date_deliv); ?></td>
        </tr>
        <tr>
            <td><b>14-ENGAGER LE :</b> <?php echo strtoupper($info_stag[0]->date_eng); ?></td>
            <td><b>15-LIEU DE FORMATION :</b> <?php echo strtoupper($info_form[0]->lieu_form); ?></td>
        </tr>
        <tr>
            <td><b>16-RELIGION :</b> <?php echo strtoupper($info_stag[0]->relig); ?></td>
            <td><b>17-CONTACT TELEPHONIQUE :</b> <?php echo strtoupper($info_stag[0]->tel); ?></td>

        </tr>
        <tr>
            <td><b>18-DIP CIV LE PLUS ELEVE :</b> <?php echo strtoupper($info_stag[0]->dip_elev); ?></td>
            <td><b>19-DIP MIL LE PLUS ELEVE :</b> </td>
        </tr>
        <tr>
            <td><b>20-NOM DU PERE :</b> <?php echo strtoupper($info_stag[0]->nom_pere); ?></td>
            <td><b>21-NOM DE LA MERE :</b> <?php echo strtoupper($info_stag[0]->nom_mere); ?></td>
        </tr>
        <tr>
            <td><b>22-FORMATION :</b> <?php echo strtoupper($info_form[0]->form); ?></td>
            <td><b>23-UNITE :</b> <?php echo strtoupper($info_stag[0]->unit); ?></td>
        </tr>
        <tr>
            <td><b>24-EMPLOIS TENU :</b> <?php echo strtoupper($info_stag[0]->emp_tenu); ?></td>
            <td><b>25-FORMATION SPECIALISEES :</b> <?php echo strtoupper($info_stag[0]->form_spe); ?></td>
        </tr>
        <tr>
            <td><b>26-QUALIFICATION ALEATOIRES :</b> <?php echo strtoupper($info_stag[0]->qual_alea); ?></td>
            <td><b>27-STATUT CIVIL :</b> <?php echo strtoupper($info_stag[0]->stat_civ); ?></td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:14px"><br><br><b>PERSONNE A CONTACTER EN CAS D'URGENCE</b><br><br></td>
        </tr>
        <tr>
            <td><b>28-NOM ET PRENOM :</b> <?php echo strtoupper($info_stag[0]->nom_per_acc); ?></td>
            <td><b>29-LIEN DE PARENTE :</b> <?php echo strtoupper($info_stag[0]->lien_par_per_acc); ?></td>
        </tr>
        <tr>
            <td><b>30-TEL :</b> <?php echo strtoupper($info_stag[0]->tel_per_acc); ?></td>
            <td><b>31-ADRESSE DU SERVICE : </b> <?php echo strtoupper($info_stag[0]->adress_per_acc); ?></td>
        </tr>
        <tr>
            <td colspan="2"><b>32-VILLE : </b> <?php echo strtoupper($info_stag[0]->ville_per_acc); ?></td>
        </tr>
        <tr>
            <td><b>Je certifie l'exatitude de tous les renseignement ci-dessus</b></td>
            <td><div align="right"><b>A................ Le .................</b></div></td>
        </tr>
        <tr>
            <td colspan="2"><b>Nom, signature de l'interessé</b></td>
        </tr>
    </table>
</body>
</html>
