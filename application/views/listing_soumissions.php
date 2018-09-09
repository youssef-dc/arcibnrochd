
    <!--=============================== Menu-Bar ========================-->
    <div id="menuBar-charity"></div>

    <!--=============================== Banner ==========================-->
    <div class="banner">
        <div class="shadow-main">
            <h1> Correcteurs </h1>
            <ul class="breadcrumb breadcrumb-news">
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Correcteur</a></li>
            </ul>
        </div>
    </div>

    <!--=============================== Contact ================================-->
    <div class="main-contact">
        <div class="container">
            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12 mb-contact">
                                    <p>
                                        <h3>Titre pour correcteur</h3>
                                        <br/>
                                        Texte correcteur.
                                        <br>
 <p/>                                       
                                        
 <p>                                       
description texte description texte description texte description texte description texte description texte description texte description texte description texte description texte description texte 
                                    </p>
                                </div>
                <div class="col-md-9 col-sm-6 col-xs-12">
                    <div class="leave-reply">

                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">Titre</th>
                                <th class="column2">Etablissement</th>
                                <th class="column3">Auteurs</th>
                                <th class="column4" style="text-align: left;">Villes</th>
                                <th class="column5" style="text-align: left;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                               <?php if(isset($soumissions)){ foreach($soumissions as $soumission) { ?>
                                <tr  onclick="location.href='<?php echo site_url("correcteur/soumission/".$soumission->id) ; ?>'">
                                    <td class="column1"><?php echo $soumission->titre ; ?></td>
                                    <td class="column2"><?php echo $soumission->etablissements ; ?></td>
                                    <td class="column3"><?php echo $soumission->auteurs ; ?></td>
                                    <td class="column4" style="text-align: left;"><?php echo $soumission->ville ; ?></td>
                                    <td class="column4" style="text-align: left;">
                                        <?php  
                                            switch ($soumission->status) {
                                                case 0:
                                                    echo "non traitee";
                                                    break;
                                                
                                                case 1:                                                    
                                                    echo "valide";
                                                    break;
                                                
                                                case 2:                                                    
                                                    echo "non valide";
                                                    break;
                                                
                                                default:
                                                    echo "non traitee";
                                                    break;
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <?php }} ?>
                        </tbody>
                    </table>






                    </div>
                </div>
            </div>





        </div> <!--  /.container -->
    </div> <!--  /.main-contact -->
<!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p id="preview-titre"></p>
    <p id="preview-auteurs"></p>
    <p id="preview-services-etablissements"></p>
    <p id="preview-texte"></p>
  </div>

</div>
