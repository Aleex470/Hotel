<?php
include('header.php');
?>

<header class="header">
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-spy=" scroll" data-bs-target="#" id="accueil">
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

<a href="#" class="btn btn-dark contact-btn" style="width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; right: 20px; bottom: 20px; position: fixed;">
    <i class="fa-solid fa-arrow-up fa-1x"></i>
</a>

<div class="text p-4" style="background-color: rgba(0,0,0,0.1);">
    <h4 class="mx-2">CHAMBRE LITS JUMEAUX</h4>
</div>


<div class="container my-4">
    <div class="row">
        <div class="col-lg">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Images/chambreJumeaux/chambreJumeaux1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Images/chambreJumeaux/chambreJumeaux2.jpg" class="d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item ">
                        <img src="Images/chambreJumeaux/chambreJumeaux4.jpg" class="d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item ">
                        <img src="Images/chambreJumeaux/chambreJumeaux5.jpg" class="d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item ">
                        <img src="Images/chambreJumeaux/chambreJumeaux6.jpg" class="d-block w-100" alt="...">
                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Préddent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
        </div>
        <div class="col-lg">
            <div class="card bg-light" style="height: 100%; border-radius:0;">
                <div class="card-body" style="padding: 0 50px 0 50px;">
                    <div class="row">
                        <h5 class="card-title text-center p-3">Réservation</h5>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label for="">Arrivée</label>
                        </div>
                        <div class="form-group">
                            <div class="date" style="border-radius: 0;">
                                <div class="input-group-append">
                                    <input type="date" placeholder="xx/xx/xxxx" class="form-control " id="reservationDate" style="border-radius: 0;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
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

                    <div class="row">
                        <div class="form-group1">
                            <label for="" style="font-style: uppercase; ">CHAMBRES</label>
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

                    <div class="row">
                        <div class="form-group">
                            <label for="" style="font-style: uppercase;">Personnes</label>
                        </div>
                        <div class="form-group">
                            <select class="form-select" id="" aria-label="" style="border-radius: 0;">
                                <option selected>1</option>
                                <option value="1">2</option>
                                <option value="2">3</option>
                                <option value="3">4</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
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
    </div>
</div>


<div class="container p-3">
    <h5>Description</h5>
    <p>Chambre pour 1 à 2 personnes </p>
    <p>La Chambre Lits Jumeaux est situé au rez-de-chaussée et est équipée de :</p>
    <ul>
        <li>
            Deux lits simples
        </li>
        <li>
            Une salle de bain privative
        </li>
        <li>
            Un accès WIFI gratuit
        </li>
        <li>
            Une télévision écran plat
        </li>
        <li>
            Un parking gratuit
        </li>
    </ul>

    <p>Fumeur : non-fumeur</p>

</div>

<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" colspan="2" class="text-center">Chambre Lits Jumeaux</th>
                <th scope="col" class="text-center">Personnes</th>
                <th scope="col" class="text-center">Superficie</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Equipement</th>
                <td> <i class="fa-solid fa-check"></i> Dressing / <i class="fa-solid fa-check"></i> Chauffage / <i class="fa-solid fa-check"></i> Bureau / <i class="fa-solid fa-check"></i> Télévision à écran plat / <i class="fa-solid fa-check"></i> Service de reveil / <i class="fa-solid fa-check"></i> WI-FI / <i class="fa-solid fa-check"></i> 2 lits simples</td>
                <td rowspan="2" class="text-center"> 2 personnes</td>
                <td rowspan="2" class="text-center"> 14m²</td>
            </tr>
            <tr>
                <th scope="row">Salle de bain privative</th>
                <td> <i class="fa-solid fa-check"></i> Articles de toilettes / <i class="fa-solid fa-check"></i> Toilettes / <i class="fa-solid fa-check"></i> Baignoire ou douche / <i class="fa-solid fa-check"></i> Sèche-cheveux / <i class="fa-solid fa-check"></i> Papier toilette </td>
            </tr>
        </tbody>
    </table>
</div>

<h1 class="text-center p-5" id="chambres">NOS CHAMBRES</h1>
<div class="container" style="margin-bottom: 5rem; display: flex; justify-content:center; align-items:center">
    <div class="row">
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

    </div>
</div>

<?php
include('footer.php');
?>