
    <!--=============================== Menu-Bar ========================-->
    <div id="menuBar-charity"></div>

    <!--=============================== Banner ==========================-->
    <div class="banner">
        <div class="shadow-main">
            <h1> Soumission </h1>
            <ul class="breadcrumb breadcrumb-news">
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Soumissions</a></li>
            </ul>
        </div>
    </div>

    <!--=============================== Contact ================================-->
    <div class="main-contact">
        <div class="container">
            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12 mb-contact">
                                    <p>
                                        <h3>Titre Soumission</h3>
                                        <br/>
                                        Vous allez soumettre un résumé en ligne pour les 16èmes Journées Scientifiques de Résidanat de Casablanca.
                                        <br>
 <p/>                                       
                                        
 <p>                                       
Nous vous remercions par avance de bien vouloir respecter scrupuleusement les instructions qui vous seront données au fur et à mesure de la soumission.
<br />
</p>
<p>Votre résumé ne sera définitivement en ligne que lorsque vous aurez cliqué sur « VALIDER » à la fin de la procédure.
Vous devez d’abord valider toutes les étapes pour soumettre un résumé. 
                                    </p>
                                </div>
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="leave-reply">
                        <form action="<?php echo base_url().'soumission/save'; ?>" method="POST">
  
                            
      
       
  <fieldset>
    <legend>Soumission </legend>
                            
                            <div class="form-group">
                            <p style="padding-top: 7px; padding-bottom: 5px;">

                            
                            <i>Le titre doit être saisi en minuscules (majuscules en début de phrase), sauf pour les symboles et/ou abréviations nécessitant d’être en lettres capitales. Limitez-le à 10 mots maximum (sans point à la fin). Il doit présenter le contenu du résumé d’une manière concise.</i>
                            </p>
                                <input id="titre" name="titre" type="text" placeholder="titre *" class="form-control champ" required="">
<strong style="color: red" class="error"></strong>
                            
                            </div>
                            <br>
                             <div class="form-group">
                             <p style="padding-top: 7px; padding-bottom: 5px;">

                            <i>Merci de bien vouloir choisir la spécialité de soumission de votre résumé.
</i>
                            </p>
                            <select class="selectpicker form-control form-control-lg" name="services" id="services">

  <optgroup label="MEDECINE">
    <option value="anatomopathologie">  Anatomopathologie   </option>
<option value="anesthesie-reanimation">  Anesthésie-réanimation  </option>
<option value="biologie">  Biologie    </option>
<option value="cardiologie">  Cardiologie </option>
<option value="dermatologie">  Dermatologie    </option>
<option value="endocrinologie">  Endocrinologie  </option>
<option value="épidemiologie">  Épidémiologie   </option>
<option value="gastro-enterologie">  Gastro-entérologie  </option>
<option value="hematologie">  Hématologie </option>
<option value="medecine de travail">  Médecine de travail </option>
<option value="maladies infectieuses">  Maladies infectieuses   </option>
<option value="medecine interne">  Médecine interne    </option>
<option value="medecine nucleaire">  Médecine nucléaire  </option>
<option value="medecine-physique-et-readaptation">  Médecine physique et réadaptation   </option>
<option value="neurologie">  Neurologie  </option>
<option value="nephrologie">  Néphrologie </option>
<option value="oncologie medicale">  Oncologie médicale  </option>
<option value="pneumologie">  Pneumologie </option>
<option value="psychiatrie">  Psychiatrie </option>
<option value="pediatrie">  Pédiatrie   </option>
<option value="radiologie">  Radiologie  </option>
<option value="radiotherapie">  Radiothérapie   </option>
<option value="rhumatologie">  Rhumatologie    </option>

  </optgroup>
  <optgroup label="CHIRURGIE">
    <option value="chirurgie-cardio-vasculaire">  Chirurgie cardio-vasculaire </option>
<option value="chirurgie-maxillo-faciale">  Chirurgie maxillo-faciale   </option>
<option value="chirurgie-pediatrique">  Chirurgie pédiatrique   </option>
<option value="chirurgie-thoracique">  Chirurgie thoracique    </option>
<option value="chirurgie-viscerale">  Chirurgie viscérale </option>
<option value="gyneco-obstetrique">  Gynéco-obstétrique  </option>
<option value="neurochirurgie">  Neurochirurgie  </option>
<option value="orl">  ORL </option>
<option value="ophtalmologie">  Ophtalmologie   </option>
<option value="traumato-orthopedique">  Traumato-orthopédique   </option>
<option value="urologie">  Urologie    </option>

  </optgroup>
</select>

                            </div>
                            <div class="form-group">
                             <p style="padding-top: 7px; padding-bottom: 5px;">

                            <i>Merci de renseigner les établissements de rattachement de tous les auteurs</i>
                            </p>
                                <input id="etablissements" name="etablissements" type="text" placeholder="établissements *" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <input id="ville" name="ville" type="text" placeholder="Ville *" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <input id="pays" name="pays" type="text" placeholder="pays *" class="form-control" required="">
                            </div>
                            <div class="form-group">
                             <p style="padding-top: 7px; padding-bottom: 5px;">

                            <i>Merci de saisir tous les auteurs de votre résumé. (Préciser l’ordre dans lequel vous souhaitez les voir apparaitre)</i>
                            </p>
                                <input id="auteurs" name="auteurs" type="text" placeholder="Auteurs/ Co-auteurs *" class="form-control" required="">
                            </div>

                           
                           <div class="form-group">
                           <p><i>
                               Vous allez maintenant pouvoir saisir le corps du texte de votre résumé.
Merci de ne pas ressaisir le titre, ni la liste des auteurs que vous avez saisis aux étapes précédentes.
Votre résumé ne doit pas excéder 300 mots.
Le texte doit être structuré de façon suivante :
<ul>
<li> - Introduction – Objectif
<li> - Matériels et méthodes
<li> - Résultats 
<li> - Conclusion 
<li> - Mots-clés
</ul>
                           </i></p>
                                <textarea id="texte" name="texte" class="form-control" rows="30" placeholder="Texte..."></textarea>

<strong style="color: red" class="error"></strong>
                            </div>
                           
                           </fieldset> 

                            <input class="red-btn red-btn-form" type="submit" value="Enregistrer">
                            <input class="red-btn red-btn-form" type="button" id="preview" value="Pré-visualisation">
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
