
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

                    <p> <strong>Titre</strong> : <?php echo $soumission->titre; ?> </p><br/>
                    <p> <strong>Service</strong> :  <?php echo $soumission->services; ?> </p><br/>
                    <p> <strong>Auteurs</strong> :  <?php echo $soumission->auteurs; ?> </p><br/>
                    <p> <strong>Soumission</strong> <br/><br/>  <?php echo $soumission->texte; ?> </p>

                    <br/><br/> <br/><br/> 

                    <form action="<?php echo site_url("correcteur/validation"); ?>" method="post" style="text-align: center;">
                        <label class="radio-inline"><input type="radio" name="com" value="oral">Com orale</label>
                        <label class="radio-inline"><input type="radio" name="com" value="ecrite">Com ecrite</label><br/><br/>
                        <label class="radio-inline"><input type="submit" name="valide" value="VALIDE" style="padding: 10px;"></label>
                        <label class="radio-inline"><input type="submit" name="valide" value="NON VALIDE" style="padding: 10px;"></label>
                        <input type="hidden" name="id_soumission" value="<?php echo $soumission->id; ?>">                        
                    </form>
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
