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
                    <!-- <div class="breadcrumb_inner">
                        <h3>A propos</h3>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="breadcrumb_block" style="display: none;">
            <ul>
                <li><a href="home">home</a></li>
                <li>A propos</li>
            </ul>
        </div>
    </div>
    
    <!--About Section-->
    <div class="clv_about_wrapper clv_section">
        <div class="container">
            <div class="breadcrumb_inner text-center mb-5">
                <h1>A propos de nous</h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about_img">
                        <img src="assets/images/about-pdg.png" alt="image" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about_content">
                        <div class="about_heading">
                            <h2>Qui sommes nous <span>?</span></h2>
                            <h6>La maison de l'anacarde</h6>
                            <!-- <div class="clv_underline"><img src="images/underline.png" alt="image" /></div> -->
                        </div>
                        <p>Avec 32 ans d'experiences, la Societe Ivoirienne de Traitement d'Anacarde (SITA SA)
                            regroupe en son sein 07
                            sociétés.
                            Le groupe, à travers les investissements réalisés, les revenus distribués et les emplois
                            directs et indirects
                            créés, apporte une contribution significative à la lutte contre la pauvreté, le chômage
                            et l'exode rural.
                            Aussi, avec une plantation d'anacarde de 150ha à Odienné, la SITA SA opte pour un mode
                            de production
                            écologique qui respecte les normes internationales etenvironnementales.
                            Elle produit, exporte et traite l'anacarde. Les secteurs d'activités qu'elle couvre sont
                            : l'agriculture et
                            l'industrie à savoir le riz et l'anacarde. Enfin le Groupe SITA SA, est la première entreprise du traitement de l'anacarde en Côte d'Ivoire.</p>
                        <div class="video_block">
                            <div class="video_btn">
                                <a href="https://www.youtube.com/watch?v=gQomgs6ibJo" class="play_video"><span
                                        class="pulse"><i class="fa fa-play" aria-hidden="true"></i></span> Regarder
                                    la vidéo</a>
                            </div>
                            <!-- <a href="javascript:;" class="clv_btn">read more</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="mt-5" style="width: 60%;">
                <h4>Nos objectifs</h4>
                <p>
                    A force de travail, à la force de leurs poignés, les braves paysans ivoiriens ont réussi à faire de notre pays le premier producteur de noix de cajou.
                    Notre objectif aujourd'hui est de fédérer toutes les compétences dans la filière anacarde afin d'hisser la Côte d'Ivoire au rang de premier transformateur en Afrique.
                </p>
            </div>

            <div class="mt-3" style="width: 60%;">
                <h4>Notre apport</h4>
                <p>
                    Grâce à nos plantations d'anacardier, la situation pluviometrique dans la zone d'odiennée à considerablement evoluée positivement.
        La zone géographique est passée de savane clairesemée en savane arborée restant verte toute l'année.
                </p>
            </div>
        </div>
    </div>

    <div class="vision-title mt-3">
        <h1 class="text-center">Nos partenaires</h1>
    </div>
        
    <?php include_once 'views/includes/partners.php' ?>

		
    <?php include_once 'views/includes/footer.php' ?>
    <?php include_once 'views/includes/contact-popup.php' ?>
    <?php include_once 'views/includes/scripts.php' ?>
</div>


</body>
</html> 