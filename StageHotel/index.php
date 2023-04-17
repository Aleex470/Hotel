<?php
include('header.php');
?>

<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top" data-bs-spy=" scroll" data-bs-target="#" id="accueil" style="background-color: rgba(0,0,0,0.39);">
        <div class=" container">
            <a class="navbar-brand" href="index.php">
                <img src="Images/LogoLesArchers.jpg" alt="" style="width: 50px; height: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-4 mb-lg-0 fs-5 ">
                    <li class="nav-item" style="padding: 0 10px 0 10px;">
                        <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item" style="padding: 0 10px 0 10px;">
                        <a class="nav-link" href="index.php#chambres">Chambre</a>
                    </li>

                    <li class="nav-item" style="padding: 0 10px 0 10px;">
                        <a class="nav-link" href="index.php#services">Services</a>
                    </li>

                    <li class="nav-item" style="padding: 0 10px 0 10px;">
                        <a class="nav-link" href="index.php#galerie">Galerie</a>
                    </li>

                    <li class="nav-item" style="padding: 0 10px 0 10px;">
                        <a class="nav-link" href="index.php#activites">activités</a>
                    </li>

                    <li class="nav-item" style="padding: 0 10px 0 10px;">
                        <a class="nav-link" href="index.php#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<body>


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" style="box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.4);">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Images/Galery/Facade1.jpg" class="mx-auto d-block w-100" alt="..." style="height: 710px; width:100%; filter:blur(1.5px)">
                <div class=" carousel-caption d-none d-md-block">
                    <h5 class="animate__animated animate__fadeInDown">Hôtel Les Archers</h5>

                    <p class="animate__animated animate__fadeInDown animate__delay-1s">Nous ferons de votre séjour un moment innoubliable.</p>
                </div>
            </div>
            <div class=" carousel-item">
                <img src="Images/Galery/Interieur7.jpg" class="mx-auto d-block w-100" alt="..." style="height: 710px; width:100% ;filter:blur(1.5px)">
                <div class=" carousel-caption d-none d-md-block">
                    <h5 class="animate__animated animate__fadeInDown ">Hôtel Les Archers</h5>
                    <p class="animate__animated animate__fadeInDown animate__delay-1s">Nous ferons de votre séjour un moment innoubliable.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="false"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>


    <!-- Réservation -->

    <div class="card mx-auto animate__animated animate__fadeIn animate__delay-1s" style="width: 80%; top:-220px; border-radius: 0;">
        <div class="card-body" style="margin-top: 10px; margin-bottom:20px;">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Arrivée</label>
                    </div>
                    <div class="form-group">
                        <div class="date" style="border-radius: 0;">
                            <div class="input-group-append">
                                <input type="date" placeholder="xx/xx/xxxx" class="form-control" id="reservationDate" style="border-radius: 0;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="">Départ</label>
                    </div>
                    <div class="form-group">
                        <div class="date" style="border-radius: 0;">
                            <div class="input-group-append">
                                <input type="date" placeholder="xx/xx/xxxx" class="form-control" id="reservationDate" style="border-radius: 0;">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="">Chambres</label>
                    </div>
                    <div class="form-group">
                        <select class="form-select" id="" aria-label="" style="border-radius: 0;">
                            <option selected class="option">1</option>
                            <option value="1" class="option">2</option>
                            <option value="2" class="option">3</option>
                            <option value="3" class="option">4</option>
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="">Personnes</label>
                    </div>
                    <div class="form-group">
                        <select class="form-select" id="" aria-label="" style="border-radius: 0;">
                            <option class="option" selected>1</option>
                            <option class="option" value="1">2</option>
                            <option class="option" value="2">3</option>
                            <option class="option" value="3">4</option>
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for=""></label>
                    </div>
                    <div class="input-group ">
                        <a href="https://galaxy-reservation.fr/dispo.php" class="btn btn-dark form-control contact-btn" style="border-radius: 0;">Réserver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <a href="#" class="btn btn-dark contact-btn" style="width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; right: 20px; bottom: 20px; position: fixed;">
            <i class="fa-solid fa-arrow-up fa-1x"></i>
        </a>

        <!-- Présentation -->

        <div class="container p-5">
            <div class="row">
                <div class="col">
                    <h1 style="margin-bottom: 1rem;">MEILLEUR TARIF GARANTI !</h1>
                    <span class="separe"> </span>
                    <p>L’hôtel Les Archers vous garantit le Meilleur Tarif !</p>
                    <p>En réservant votre chambre directement sur notre site internet www.hotel-lesarchers.fr, nous vous garantissons le meilleur tarif disponible sur internet.</p>
                    <p>Si vous trouvez moins cher ailleurs pour la même catégorie de chambre durant la même date de séjour, nous nous engageons à nous aligner sur ce tarif.</p>
                </div>
                <div class="col">
                    <p>5 bonnes raisons de réserver sur notre site internet : </p>
                    <ul>
                        <li>Le Meilleur Tarif Garanti</li>
                        <li>Aucun frais de réservation</li>
                        <li>Aucun interlocuteur intermédiaire</li>
                        <li>Paiement sécurisé</li>
                        <li>Flexibilité d’annulation</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Chambres -->

        <h1 class="text-center p-5" id="chambres">NOS CHAMBRES</h1>
        <div class="container" style="margin-bottom: 5rem; display: flex; justify-content:center; align-items:center">
            <div class="row" style="display: flex; justify-content:center; align-items:center">
                <div class="col p-4 ">
                    <div class="card" style="width: 22rem; border:0;">
                        <a href="chambreDouble.php" class="img-chambre">
                            <div class="container-img">
                                <img src="Images/chambreDouble/chambreDouble1.jpg" class="card-img-top img" style="border-radius:0;" alt="Chambre Double">
                                <div class="middle">
                                    <div class="text-chambre">À partir de <span style="font-size: 25px; color: #d43a27;">73€/nuit</span></div>
                                </div>
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Chambre double</h5>
                            <p class="text-muted card-text">À partir de 73€</p>
                            <a href="chambreDouble.php" class="btn btn-dark contact-btn">Détail <i class="fa-solid fa-arrow-right fa-xs"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col p-4">
                    <div class="card" style="width: 22rem;  border:0">
                        <a href="chambreJumeaux.php" class="img-chambre">
                            <div class="container-img">
                                <img src="Images/chambreJumeaux/chambreJumeaux1.jpg" class="card-img-top img" style="border-radius:0;" alt="Chambre Jumeaux">
                                <div class="middle">
                                    <div class="text-chambre">À partir de <span style="font-size: 25px; color: #d43a27;">73€/nuit</span></div>
                                </div>
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Chambre lits jumeaux</h5>
                            <p class="text-muted card-text">À partir de 73€</p>
                            <a href="chambreJumeaux.php" class="btn btn-dark contact-btn">Détail <i class="fa-solid fa-arrow-right fa-xs"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- <div class="trait text-center"></div> -->
        <!-- 5 Bonnes raisons de choisir cet hotel  / Nos services -->

        <h1 class="text-center p-5" id="services">NOS SERVICES</h1>
        <div class="container" style="margin-bottom: 5rem; ">
            <div class="row">
                <div class="col p-2">
                    <div class="card card-services text-center" style="width: 18rem;">
                        <div class="card-body">
                            <i class="icon-service fa-solid fa-paw fa-2x p-2"></i>
                            <p class="card-text">Les animaux de compagnie sont admis (un supplément peut s'appliquer).</p>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class=" card card-services text-center" style="width: 18rem;">
                        <div class="card-body">
                            <i class="icon-service fa-solid fa-mug-saucer fa-2x p-2"></i>
                            <p class="card-text">L'Hôtel Les Archers sert tous les matins un petit-déjeuner buffet.</p>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class=" card card-services text-center" style="width: 18rem;">
                        <div class="card-body">
                            <i class="icon-service fa-solid fa-square-parking fa-2x p-2"></i>
                            <p class="card-text">Un parking gratuit et public est disponible sur place (sans réservation préalable).</p>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class=" card card-services text-center" style="width: 18rem;">
                        <div class="card-body">
                            <i class="icon-service fa-solid fa-message fa-2x p-2"></i>
                            <p class="card-text">Le personnel parle français, anglais, espagnol.</p>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class=" card card-services text-center" style="width: 18rem;">
                        <div class="card-body">
                            <i class="icon-service fa-solid fa-wheelchair fa-2x p-2"></i>
                            <p class="card-text">Des chambres sont adaptées aux personnes à mobilité réduite.</p>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class="card card-services text-center" style="width: 18rem;">
                        <div class="card-body">
                            <i class="icon-service fa-solid fa-heart fa-2x p-2"></i>
                            <p class="card-text">Emplacement et équipements parfaits pour les couples.</p>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class="card card-services text-center" style="width: 18rem;">
                        <div class="card-body">
                            <i class="icon-service fa-solid fa-euro-sign fa-2x p-2"></i>
                            <p class="card-text">Des tarifs imbattables !</p>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class="card card-services text-center" style="width: 18rem;">
                        <div class="card-body">
                            <i class="icon-service fa-solid fa-wifi fa-2x p-2"></i>
                            <p class="card-text">Une connexion Wi-Fi est disponible dans tout l'établissement gratuitement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Galerie photo -->

        <h1 class="text-center p-5" id="galerie">GALERIE</h1>
        <div class="container text-center" style="margin-bottom: 5rem;">
            <div class="heading">


                <div class="row">
                    <div class="col-3 my-5">
                        <p>Nous voir d'un peu plus près </p>
                        <button type="button" class="btn btn-dark contact-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Voir les photos
                        </button>
                    </div>
                    <div class="col-9 slider">
                        <div class="container slide-barrier">
                            <div class="row slider-track">

                                <img src="Images/Galery/Facade1_modif.jpg" alt="" class="slide">


                                <img src="Images/Galery/Exterieur3.jpg" alt="" class="slide">


                                <img src="Images/Galery/Interieur3.jpg" alt="" class="slide">


                                <img src="Images/Galery/Interieur2.jpg" alt="" class="slide">


                                <img src="Images/Galery/Plat1.jpg" alt="" class="slide">


                                <img src="Images/Galery/Exterieur2.jpg" alt="" class="slide">


                                <img src="Images/Galery/Recent/InterieurManger2.jpg" alt="" class="slide">


                                <img src="Images/Galery/Chambre3.jpg" alt="" class="slide">


                                <img src="Images/Galery/Interieur2.jpg" alt="" class="slide">


                                <img src="Images/Galery/Exterieur1.jpg" alt="" class="slide">

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close mx-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row text-center">

                                    <div class="col-lg-4 col-sm-6 p-2">
                                        <a href="Images/Galery/Facade1.jpg" data-lightbox="mygalery" data-title="Facade 1">
                                            <img src="Images/Galery/Facade1_modif.jpg" alt="" class="galery-img">
                                        </a>

                                    </div>

                                    <div class="col-lg-4 col-sm-6 p-2">

                                        <a href="Images/Galery/Exterieur2.JPG" data-lightbox="mygalery" data-title="Extérieur 2">
                                            <img src="Images/Galery/Exterieur2.JPG" alt="">
                                        </a>

                                    </div>

                                    <div class="col-lg-4 col-sm-6 p-2">

                                        <a href="Images/Galery/Exterieur3.JPG" data-lightbox="mygalery" data-title="Extérieur 3">
                                            <img src="Images/Galery/Exterieur3.JPG" alt="">
                                        </a>

                                    </div>

                                    <div class="col-lg-4 col-sm-6 p-2">

                                        <a href="Images/Galery/Recent/InterieurManger2SM.jpg" data-lightbox="mygalery" data-title="Intérieur 1">
                                            <img src="Images/Galery/Recent/InterieurManger2.jpg" alt="">
                                        </a>

                                    </div>

                                    <div class="col-lg-4 col-sm-6 p-2">

                                        <a href="Images/Galery/Interieur2.JPG" data-lightbox="mygalery" data-title="Intérieur 2">
                                            <img src="Images/Galery/Interieur2.JPG" alt="">
                                        </a>

                                    </div>

                                    <div class="col-lg-4 col-sm-6 p-2">

                                        <a href="Images/Galery/Interieur3.JPG" data-lightbox="mygalery" data-title="Intérieur 3">
                                            <img src="Images/Galery/Interieur3.JPG" alt="">
                                        </a>

                                    </div>

                                    <div class="col-lg-4 col-sm-6 p-2">

                                        <a href="Images/Galery/Interieur4.jpg" data-lightbox="mygalery" data-title="Intérieur 4">
                                            <img src="Images/Galery/Interieur4.jpg" alt="">
                                        </a>

                                    </div>

                                    <div class="col-lg-4 col-sm-6 p-2">

                                        <a href="Images/Galery/Interieur5.JPG" data-lightbox="mygalery" data-title="Intérieur 5">
                                            <img src="Images/Galery/Interieur5.JPG" alt="">
                                        </a>

                                    </div>

                                    <div class="col-lg-4 col-sm-6 p-2">

                                        <a href="Images/Galery/Interieur6.JPG" data-lightbox="mygalery" data-title="Intérieur 6">
                                            <img src="Images/Galery/Interieur6.JPG" alt="">
                                        </a>

                                    </div>


                                    <div class="col-lg-4 col-sm-6 p-2">

                                        <a href="Images/Galery/Chambre1.JPG" data-lightbox="mygalery" data-title="Chambre 1">
                                            <img src="Images/Galery/Chambre1.JPG" alt="">
                                        </a>

                                    </div>

                                    <div class="col-lg-4 col-sm-6 p-2">

                                        <a href="Images/Galery/Chambre2.JPG" data-lightbox="mygalery" data-title="Chambre 2">
                                            <img src="Images/Galery/Chambre2.JPG" alt="">
                                        </a>

                                    </div>

                                    <div class="col-lg-4 col-sm-6 p-2">

                                        <a href="Images/Galery/Chambre3.JPG" data-lightbox="mygalery" data-title="Chambre 3">
                                            <img src="Images/Galery/Chambre3.JPG" alt="">
                                        </a>

                                    </div>


                                    <div class="col-lg-4 col-sm-6 p-2">

                                        <a href="Images/Galery/Dej2.JPG" data-lightbox="mygalery" data-title="Déjeuner 2">
                                            <img src="Images/Galery/Dej2.JPG" alt="">
                                        </a>

                                    </div>


                                    <div class="col-lg-4 col-sm-6 p-2">

                                        <a href="Images/Galery/Plat1.jpg" data-lightbox="mygalery" data-title="Plat 1">
                                            <img src="Images/Galery/Plat1.jpg" alt="">
                                        </a>

                                    </div>


                                    <div class="col-lg-4 col-sm-6 p-2">

                                        <a href="Images/Galery/Plat2.jpg" data-lightbox="mygalery" data-title="Plat 2">
                                            <img src="Images/Galery/Plat2.jpg" alt="">
                                        </a>

                                    </div>


                                    <div class="col-lg-4 col-sm-6 p-2">

                                        <a href="Images/Galery/Dej1.jpg" data-lightbox="mygalery" data-title="Déjeuner 1">
                                            <img src="Images/Galery/Dej1.jpg" alt="" height="337px" width="253">
                                        </a>

                                    </div>

                                    <div class="col-lg-4 col-sm-6 p-2">

                                        <a href="Images/Galery/Recent/Couloir1SM.jpg" data-lightbox="mygalery" data-title="Couloir 1">
                                            <img src="Images/Galery/Recent/Couloir1.jpg" alt="">
                                        </a>

                                    </div>


                                    <div class="col-lg-4 col-sm-6 p-2">

                                        <a href="Images/Galery/Recent/Coiloir2SM.jpg" data-lightbox="mygalery" data-title="Couloir 2">
                                            <img src="Images/Galery/Recent/Couloir2.jpg" alt="">
                                        </a>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- ACTIVITES -->

        <h1 class="text-center p-5" style="text-transform: uppercase;" id="activites"> activités</h1>
        <div class="container" style="margin-bottom: 6rem;">

            <div class="row text-center">
                <div class="col-4">
                    <i class="fa-solid fa-building-columns fa-2x" style="color: #d43a27; margin-bottom:1rem;"></i>
                    <div class="row p-3">
                        <div class="col-sm ">
                            <p>Parc Puy du Fou <br>
                                <span class="text-muted">6,2 km </span>
                            </p>
                        </div>
                    </div>

                    <div class="row p-3">
                        <div class="col-sm">
                            <p>Chateau de Tiffauges<br>
                                <span class="text-muted">13,6 km </span>
                            </p>
                        </div>
                    </div>

                    <div class="row p-3">
                        <div class="col-sm">
                            <p>Musée d'Art et d'Histoire<br>
                                <span class="text-muted">16,6 km </span>
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-4 ">
                    <i class="fa-solid fa-utensils fa-2x" style="color: #d43a27 ;margin-bottom:1rem;"></i>
                    <div class="row p-3">
                        <div class="col-sm">
                            <p>Restaurant la petite Auberge<br>
                                <span class="text-muted">0 km </span>
                            </p>
                        </div>
                    </div>

                    <div class="row p-3">
                        <div class="col-sm">
                            <p>Bar/Café la forge<br>
                                <span class="text-muted">6,2 km </span>
                            </p>
                        </div>
                    </div>

                </div>


                <div class="col-4">
                    <i class="fa-solid fa-plane fa-2x" style="color: #d43a27 ;margin-bottom:1rem;"></i>
                    <div class="row p-3">
                        <div class="col-sm">
                            <p>Aéroport de Nantes Atlantique<br>
                                <span class="text-muted"> 51 km </span>
                            </p>

                        </div>
                    </div>

                    <div class="row p-3">
                        <div class="col-sm">
                            <p>Aéroport de La Rochelle - Île de Ré<br>
                                <span class="text-muted"> 85,3 km </span>
                            </p>
                        </div>
                    </div>

                    <div class="row p-3">
                        <div class="col-sm">
                            <p>Gare de Cholet<br>
                                <span class="text-muted"> 17,7 km </span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>




        <!-- MAP & Contact-->
        <div class="container">
            <div class="row" id="contact" style="margin-top:5rem; margin-bottom: 5rem;">
                <div class="col map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2724.5999369969663!2d-0.9907303845399992!3d46.93024677914558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48066772db8216a1%3A0xe22690fe9e9aaf57!2sH%C3%B4tel%20Les%20Archers%20Chambretaud!5e0!3m2!1sfr!2sfr!4v1655126162844!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col" style="margin-right: 50px;">
                    <h1 style="margin-bottom:30px;">NOUS CONTACTER </h1>

                    <form method="post" action="mail.php">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="" placeholder="Votre nom" name="nom" aria-describedby="" maxlength="50" style="border-radius: 0;">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="" placeholder="Votre email" name="email" aria-describedby="" maxlength="80" style="border-radius: 0;">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Votre message" name="message" id="" rows="8" style="border-radius: 0;"></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-dark contact-btn" onclick="">
                            <!-- <input type="submit" class="btn btn-dark contact-btn" style="border-radius:0;">Envoyer <i class="fa-solid fa-arrow-right fa-xs"></i> -->
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>
    <?php
    include('footer.php');
    ?>