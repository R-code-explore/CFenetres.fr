<?php

$sub_title = "Commandez vos fenêtres, portes-fenêtres, portes d’entrées portes de garage et vos volets en ligne.";
$red_sub_title = "Le tout sur mesure";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="author" content="CFenetres">
    
    <meta name="description" content="Sur CFenetres, commandez vos fenêtres, portes, portes de garage, baies vitrées et autres en ligne. Vous pouvez le faire par un formulaire de contact ou bien par le biais de notre concepteur de fenetre. Fenetres & portes de toute sorte sur mesure.">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--End_Bootstrap-->
    <link rel="stylesheet" href="scss/style.css">
    <link rel="shortcut icon" href="imgs/favicon.svg" type="image/x-icon">
    <title>CFenetres</title>
</head>
<body>

<header>
        <?php include 'html/header.html'; ?>
        <div class="btn-group">
            <a href="index.php" class="btn btn-primary active" aria-current="Accueil_CFenetres">Accueil</a>
            <a href="commander.php" class="btn btn-primary">Commander</a>
            <a href="produits.php" class="btn btn-primary">Infos</a>
        </div>
</header> 

<div class="first-container">

  	<div id="carouselExampleControls" class="carousel slide first-image" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/specs/double-vitrage.jpg" class="d-block w-100 imgs" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/specs/triple-vitrage.jpg" class="d-block w-100 imgs" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/specs/baie-vitree.jpg" class="d-block w-100 imgs" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/specs/windows-group.png" class="d-block w-100 imgs" alt="...">
    </div>
    <!--presentation-->
    <div class="carousel-item">
      <img src="imgs/index_imgs/1.jpg" class="d-block w-100 imgs" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/index_imgs/2.jpg" class="d-block w-100 imgs" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/index_imgs/3.jpg" class="d-block w-100 imgs" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/index_imgs/4.jpg" class="d-block w-100 imgs" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/index_imgs/5.jpg" class="d-block w-100 imgs" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/index_imgs/6.jpg" class="d-block w-100 imgs" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/index_imgs/7.jpg" class="d-block w-100 imgs" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/index_imgs/8.jpg" class="d-block w-100 imgs" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/index_imgs/9.png" class="d-block w-100 imgs" alt="...">
    </div>
    <!--Fin présentation-->
  </div>
  <button class="carousel-control-prev carouss-btn" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next carouss-btn" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>  
  
    <div class="welcome-block">
        <h2>Bienvenue</h2>
        <h3>Éclairez votre chez vous !</h3>
        <a class="btn btn-primary btn-contact" href="#contact" role="button">Contact</a>
    </div>

</div>

<a class="btn btn-primary" id="btn-contact2" href="#contact" role="button">Contact</a>

<div class="second-container">
    
    <div class="left-box">
        <p class="box-title">Comment commander ?</p>
        <p class="box-text">Deux façons sont disponibles:
            <br><br> - Passer par la section contact et décrire votre demande. Vous recevrez ensuite un appel de notre part selon vos disponibilités.
            <br><br> - Passer par la section commander en configurant vous même votre demande. Vous recevrez ensuite votre devis par email ou bien par sms selon votre choix.
        </p>
    </div>
    
    <div class="right-box">
        <p class="box-title">Ce que vous pourrez commander chez CFenêtres</p>
        <p class="box-text">Fenêtres / Portes / Portes-fenêtres / Baies vitrées coulissantes.
        <br><br>
        Portes de garage automatique | Avec ou sans vitre | Avec ou sans porte de service | Possibilité d'intégration de la porte de service.
        <br><br>
        Volets roulants électriques ou non.
        <br><br>
        Double ou Triple vitrage | PVC ou Aluminium.
        <br><br>
        Les spécificités techniques sont disponibles dans la page d'informations:
        </p>
        <a href="produits.php" class="btn btn-primary btn-info-2">Infos</a>
    </div>

</div>

<p class="color-title">La palette des couleurs disponibles</p>

        <div id="palet-color" class="color-group-content">

            <div class="color">
                <img src="imgs/couleurs/c01.jpeg">
                <p>C01</p>
            </div>

            <div class="color">
                <img src="imgs/couleurs/c02.jpeg" class="color">
                <p>C02</p>
            </div>

            <div class="color">
                <img src="imgs/couleurs/c05.jpeg" class="color">
                <p>C05</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c06.jpeg" class="color">
                <p>C06</p>
            </div>

            <div class="color">
                <img src="imgs/couleurs/c11.jpeg" class="color">
                <p>C11</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c15.jpeg" class="color">
                <p>C15</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c23.jpeg" class="color">
                <p>C23</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c27.jpeg" class="color">
                <p>C27</p>
            </div>

            <div class="color">
                <img src="imgs/couleurs/c28.jpeg" class="color">
                <p>C28</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c29.jpeg" class="color">
                <p>C29</p>
            </div>

            <div class="color">
                <img src="imgs/couleurs/c30.jpeg" class="color">
                <p>C30</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c32.jpeg" class="color">
                <p>C32</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c33.jpeg" class="color">
                <p>C33</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c34.jpeg" class="color">
                <p>C34</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c40.jpeg" class="color">
                <p>C40</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c41.jpeg" class="color">
                <p>C41</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c42.jpeg" class="color">
                <p>C42</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c43.jpeg" class="color">
                <p>C43</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c44.jpeg" class="color">
                <p>C44</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c47.jpeg" class="color">
                <p>C47</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c50.jpeg" class="color">
                <p>C50</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c52.jpeg" class="color">
                <p>C52</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c60.jpeg" class="color">
                <p>C60</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c61.jpeg" class="color">
                <p>C61</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c62.jpeg" class="color">
                <p>C62</p>
            </div>

            <div class="color">
                <img src="imgs/couleurs/c63.jpeg" class="color">
                <p>C63</p>
            </div>            
            
            <div class="color">
                <img src="imgs/couleurs/c65.jpeg" class="color">
                <p>C65</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c69.jpeg" class="color">
                <p>C69</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c71.jpeg" class="color">
                <p>C71</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c75.jpeg" class="color">
                <p>C75</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c76.jpeg" class="color">
                <p>C76</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c86.jpeg" class="color">
                <p>C86</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c87.jpeg" class="color">
                <p>C87</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c88.jpeg" class="color">
                <p>C88</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c89.jpeg" class="color">
                <p>C89</p>
            </div>

            <div class="color">
                <img src="imgs/couleurs/c90.jpeg" class="color">
                <p>C90</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c91.jpeg" class="color">
                <p>C91</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c93.jpeg" class="color">
                <p>C93</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c94.jpeg" class="color">
                <p>C94</p>
            </div>
            
            <div class="color">
                <img src="imgs/couleurs/c95.jpeg" class="color">
                <p>C95</p>
            </div>
            
        </div>

        <!--Partie email contact-->

        <form class="contact-form" action="send_message.php" method="post">

        <p>Contact</p>

        <div class="mb-3" id="contact">
            
            <label for="NomPrenomForm" class="form-label">Nom et Prénom</label>
            <input type="text" name="NomPrenomForm" class="form-control" id="NomPrenomForm" placeholder="Votre nom et prénom" required>
            
        </div>
            
        <div class="mb-3">
            
            <label for="EmailForm" class="form-label">Votre adresse mail</label>
            <input type="email" name="EmailForm" class="form-control" id="EmailForm" placeholder="name@example.com" required>
            
        </div>

        <div class="mb-3">
            
            <label for="TelForm" class="form-label">Votre numéro de telephone</label>
            <input type="number" name="TelForm" class="form-control" id="TelForm" placeholder="00 00 00 00 00" required>
            
        </div>

        <div class="mb-3">
            
            <label for="TextArea" class="form-label">Entrez votre message</label>
            <textarea class="form-control AreaForm" name="TextArea" id="TextArea" rows="8" required></textarea>
        </div>

        <div class="form-check-index">

        <div class="mb-3 checkChoixEnvoi">
            <label class="form-label" for="choixenvoi">Recevoir mon devis par SMS</label>
            <input class="form-check-input" type="radio" id="choixenvoi" name="ChoixEnvoi" value="sms" checked>
        </div>
        
        <div class="mb-3 checkChoixEnvoi">
            <label class="form-label" for="choixenvoi">Par email</label>
            <input class="form-check-input" type="radio" id="choixenvoi" name="ChoixEnvoi" value="email" checked>
        </div>

        </div>

        <button class="btn btn-primary" type="submit">Envoyer</button>

        </form>

        <!--Fin-Partie email contact-->

        <?php include 'html/footer.html'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
<noscript>JavaScript n'est pas activé sur votre navigateur</noscript>
</body>
</html>