<!DOCTYPE html>
<?php include_once 'views/includes/html-nojs.php'?>
<head>
    <?php include_once 'views/includes/head.php'?>
    <title><?= WEBSITE_TITLE .' | '. ucfirst($page); ?></title>
</head>
<body>


<div class="clv_main_wrapper index_v2">
    
    <?php include_once 'views/includes/header.php'?>

	
    <!--header-->
        <div class="breadcrumb_wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="breadcrumb_inner">
                            <h3>contactez-Nous</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container m-4">
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: <?=$isSuccess ? 'block' : 'none'?> ">
                <strong>Message envoyé !</strong>Merci pour votre message Nous vous recontacterons si nécéssaire
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
		   
    <!--Contact Block-->
    <div class="contact_blocks_wrapper clv_section">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="contact_block">
                        <span></span>
                        <div class="contact_icon"><img src="assets/images/contact_icon1.png" alt="image" /></div>
                        <h4>Contact</h4>
                        <p>+225 21 00 00 01</p>
                        <p>+225 99 02 02 10</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="contact_block">
                        <span></span>
                        <div class="contact_icon"><img src="assets/images/contact_icon2.png" alt="image" /></div>
                        <h4>email</h4>
                        <p>info@sita-sa.com</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="contact_block">
                        <span></span>
                        <div class="contact_icon"><img src="assets/images/contact_icon3.png" alt="image" /></div>
                        <h4>address</h4>
                        <p>Côte d'Ivoire</p>
                        <p>Abidjan, Treichville</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Contact Form-->
    <div class="contact_form_wrapper clv_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="contact_form_section">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <h3>Envoyez-nous un message</h3>
                            </div>
							<form method="POST" action="">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form_block">
                                        <input type="text" name="nom" class="form_field require" placeholder="Votre Nom" value="<?=$nom?>">
                                        <small class="text-danger nomError"> <?=  $nomError ?> </small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form_block">
                                        <input type="text" name="email" class="form_field require" placeholder="Votre Email" data-valid="email" value="<?=$email?>">
                                        <small class="text-danger nomError"> <?=  $emailError ?> </small>
                                    </div>
                                </div>
                            
                                <div class="col-md-12 col-lg-12">
                                    <div class="form_block">
                                        <input type="text" name="sujet" class="form_field require" placeholder="Sujet" value="<?=$objet?>">
                                        <small class="text-danger nomError"> <?=  $sujetError ?> </small>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="form_block">
                                        <textarea placeholder="Votre Message" name="message" class="form_field require"><?=htmlspecialchars($message)?></textarea>
                                        <div class="response"></div>
                                        <small class="text-danger"> <?=  $messageError ?> </small>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="form_block">
                                        <button type="submit" class="clv_btn submitForm" data-type="contact">Envoyer</button>
                                    </div>
                                </div>
							</form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="working_time_section">
                        <div class="timetable_block">
                            <h5>Heures d'ouverture</h5>
                            <ul>
                                <li>
                                    <p>Lundi</p>
                                    <p>9H - 17 H 30</p>
                                </li>
                                <li>
                                    <p>Mardi</p>
                                    <p>9H - 17 H 30</p>
                                </li>
                                <li>
                                    <p>Mercredi</p>
                                    <p>9H - 17 H 30</p>
                                </li>
                                <li>
                                    <p>Jeudi</p>
                                    <p>9H - 17 H 30</p>
                                </li>
                                <li>
                                    <p>Vendredi</p>
                                    <p>9H - 17 H 30</p>
                                </li>
                               
                            </ul>
                        </div>
                        <!-- <div class="tollfree_block">
                            <h5>toll free number</h5>
                            <h3>+1-202-555-0101</h3>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Contact Map-->
    <div class="container-fluid">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.754001273494!2d-4.013848385736048!3d5.301032437636715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ebdeec5b1681%3A0x152b8f2b649f0420!2sSITA%20S.A.!5e0!3m2!1sfr!2sci!4v1592922918607!5m2!1sfr!2sci" width="1200" height="600" frameborder="0" style="border:1; max-width: 100%; width: 100%; margin: auto;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <?php include_once 'views/includes/partners.php' ?>

		
    <?php include_once 'views/includes/footer.php' ?>
    <?php include_once 'views/includes/scripts.php' ?>
</div>


</body>
</html> 