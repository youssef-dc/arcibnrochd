
    <!--=============================== Menu-Bar ========================-->
    <div id="menuBar-charity"></div>

    <!--=============================== Banner ==========================-->
    <div class="banner">
        <div class="shadow-main">
            <h1> Enregistrement </h1>
            <ul class="breadcrumb breadcrumb-news">
                <li><a href="index.html">Accueil</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>

    <!--=============================== Contact ================================-->
    <div class="main-contact">
        <div class="container">
            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12 mb-contact">
                                    <p>
                                        <h3>Enregistrement</h3>
                                        <br/>
                                        Text Text Text Text Text Text Text Text Text Text Text Text 
                                        Text Text Text Text Text Text Text Text Text Text Text Text 
                                        Text Text Text Text Text Text Text Text Text Text Text Text 
                                        Text Text Text Text Text Text Text Text Text Text Text Text 
                                        Text Text Text Text Text Text Text Text Text Text Text Text 
                                        Text Text Text Text Text Text Text Text Text Text Text Text 
                                    </p>
                                </div>
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="leave-reply">
                        <form action="<?php echo base_url().'soumission/save'; ?>" method="POST">
  <fieldset>
    <legend>Inscription</legend>
                            <div class="form-group">
                            <select class="selectpicker form-control form-control-lg">

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
                                <input id="nom" name="nom" type="text" placeholder="Nom *"
                                       class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <input id="prenom" name="prenom" type="text" placeholder="Prenom *"
                                       class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <input id="service" name="service" type="text" placeholder="service *"
                                       class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <input id="etablissement" name="etablissement" type="text" placeholder="etablissement *"
                                       class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <input id="adresse" name="adresse" type="text" placeholder="adresse *"
                                       class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <input id="code_postal" name="code_postal" type="text" placeholder="code postal"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <select class="selectpicker form-control form-control-lg">
                                    <option value="agadir">  Agadir  </option>
<option value="beni mellal">  Béni Mellal </option>
<option value="casablanca">  Casablanca  </option>
<option value="el jadida">  El Jadida   </option>
<option value="fes">  Fès </option>
<option value="kenitra">  Kénitra </option>
<option value="khemisset">  Khémisset   </option>
<option value="khouribga">  Khouribga   </option>
<option value="marrakech">  Marrakech   </option>
<option value="meknes">  Meknès  </option>
<option value="mohammedia">  Mohammédia  </option>
<option value="oujda">  Oujda   </option>
<option value="rabat">  Rabat   </option>
<option value="safi">  Safi    </option>
<option value="sale">  Salé    </option>
<option value="tanger">  Tanger  </option>
<option value="taourirt">  Taourirt    </option>
<option value="taza">  Taza    </option>
<option value="temara">  Témara  </option>
<option value="tetouan">  Tétouan </option>

                                </select>
                            </div>
                            <div class="form-group">
                                <input id="pays" name="pays" type="text" placeholder="pays *"
                                       class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <input id="telephone" name="telephone" type="text" placeholder="telephone *"
                                       class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <input id="gsm" name="gsm" type="text" placeholder="gsm *"
                                       class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <input id="email" name="email" type="text" placeholder="email *"
                                       class="form-control" required="">
                            </div>
                            <div class="form-group">
                                





<br/>

               Membre ARC : &nbsp;&nbsp;&nbsp;
                
    <label class="radio-inline">
      <input type="radio" name="optradio" checked>OUI
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">NON

</label>




                            </div>
<br/>

       
                            <input class="red-btn red-btn-form" type="submit" value="Enregistrer">
                        </form>
                    </div>
                </div>
            </div>
        </div> <!--  /.container -->
    </div> <!--  /.main-contact -->

    <div class="overlay" onClick="style.pointerEvents='none'"></div>




