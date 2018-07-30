<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ARC IBN ROCHD - Connexion</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/manual.css">
    <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">
    <!-- Google fonts Poppins -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Fontello -->
    <link rel="stylesheet" href="assets/css/css-fontello/animation.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/css-fontello/fontello.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/css-fontello/fontello-codes.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/css-fontello/fontello-embedded.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/css-fontello/fontello-ie7.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/css-fontello/fontello-ie7-codes.css" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="page">

    <!--=============================== Header ===========================-->
    <div id="header"></div>

    <!--=============================== Menu-Bar ========================-->
    <div id="menuBar-charity"></div>

    <!--=============================== Banner ==========================-->
    <div class="banner">
        <div class="shadow-main">
            <h1> Login | Register </h1>
            <ul class="breadcrumb breadcrumb-news">
                <li><a href="index.html">HOME</a></li>
                <li><a href="login.html">LOGIN</a></li>
            </ul>
        </div>
    </div>

    <!--========================== Login | Register =======================-->
    <div class="main-contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-xs-12">

                    <div class="leave-reply">
                        <div class="form-login">
                            <h3>Login | Register </h3>
                            <form class="register-form form-all"  method="POST" action="<?php echo base_url().'Compte/connexion'; ?>">
                                <h4>Register:</h4>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Votre nom prenom"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Votre password"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Votre email address"/>
                                </div>
                                <button class="red-btn red-btn-form btn-login">Create</button>
                                <p class="message">Already registered? <a href="#">Sign In</a></p>
                            </form>
                            <form class="login-form form-all" method="POST" action="<?php echo base_url().'Compte/connexion'; ?>">
                                <h4>Login:</h4>
                                
 <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Email" name="email"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Password" name="password"/>
                                </div>
                                <button class="red-btn red-btn-form btn-login" >Login</button>
                                <p class="message">Non enregistré? <a href="<?php echo base_url().'Compte/enregistrement'; ?>">Nouveau compte</a></p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--=============================== Footer ===========================-->
    <div id="footer"></div>

</div><!--  /.page -->

<!-- JS code -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/myScript.js"></script>
<script>
    "use strict";
    $('.message a').click(function () {
        $('form.form-all').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
</script>

</body>
</html>
