
    <!--=============================== Menu-Bar ========================-->
    <div id="menuBar-charity"></div>

    <!--=============================== Banner ==========================-->
    <div class="banner">
        <div class="shadow-main">
            <h1> Resultats des soumissions </h1>
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
                                
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="leave-reply">

                    <table>
                        
                    <?php foreach ($soumissions as $comm => $soumission) { ?>
                        
                        <thead>
                            <tr class="table100-head">
                                <th class="column1"  colspan="2" style="text-align: center; background-color: orange;"><?php echo $comm ;?></th>
                            </tr>
                        </thead>
                        <?php foreach ($soumission as $key => $value) { ?>
                        
                            <thead>
                                <tr class="table100-head">
                                    <th class="column1"  colspan="2"  style="text-align: center;"><?php echo ucwords(str_replace('-', ' ', $key)) ;?></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($value as $val) { ?>
                            <tr >
                                    <td class="column1"><?php echo $val->titre ; ?></td>
                                    <td class="column2"><?php echo $val->auteurs ; ?></td>
                            </tr>
                            <?php }  ?>
                            </tbody>
                    <?php }} ?>



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
