
    <!--=============================== Menu-Bar ========================-->
    <div id="menuBar-charity"></div>

    <!--=============================== Banner ==========================-->
    <div class="banner">
        <div class="shadow-main">
            <h1> Soumission </h1>
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
                                <input id="titre" name="titre" type="text" placeholder="titre *" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <input id="auteurs" name="auteurs" type="text" placeholder="auteurs *" class="form-control" required="">
                            </div>
                           
                           <div class="form-group">
                                <textarea class="form-control" rows="6" placeholder="Message..."></textarea>
                            </div>
                           
                           </fieldset> 

                            <input class="red-btn red-btn-form" type="submit" value="Enregistrer">
                        </form>
                    </div>
                </div>
            </div>
        </div> <!--  /.container -->
    </div> <!--  /.main-contact -->

    <div class="overlay" onClick="style.pointerEvents='none'"></div>




