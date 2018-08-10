
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
                        <form action="<?php echo base_url().'Compte/ajouter_utilisateur'; ?>" method="POST">
  <fieldset>
    <legend>Inscription</legend>



    <div class="form-group">
                                <select class="selectpicker form-control form-control-lg">
<option value="m">  M </option>
<option value="mlle">  Mlle  </option>
<option value="mme">  Mme   </option>
<option value="dr">  Dr   </option>
<option value="pr">  Pr   </option>

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
                                <select class="selectpicker form-control form-control-lg" name="ville">
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
                                <input id="gsm" name="GSM" type="text" placeholder="GSM *"
                                       class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <input id="email" name="email" type="text" placeholder="email *"
                                       class="form-control" required="">
                            </div>
                            <br />
                            
                             
                            
                              <div class="form-group">
                                  
                                 <input class="form-control" type="password" placeholder="Password" name="password"/>
                              
                                </div>


<div class="form-group">
                                    
                                    <input class="form-control" type="password" placeholder="Resaisir Password" name="password2" />
                                
                                   
                                </div>
                            
                            <div class="form-group">
<br/>

               Membre ARC : &nbsp;&nbsp;&nbsp;
                
    <label class="radio-inline">
      <input type="radio" name="membre" value="1" checked>OUI
    </label>
    <label class="radio-inline">
      <input type="radio" name="membre" value="0">NON

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




