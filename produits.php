
<?php

$sub_title = "Normes et spécificités";
$red_sub_title = "";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="author" content="CFenetre">
    
    <meta name="description" content="Sur CFenetre, commandez vos fenêtres, portes, portes de garage, baies vitrées et autres en ligne. Vous pouvez le faire par un formulaire de contact ou bien par le biais de notre concepteur de fenetre. Fenetres & portes de toute sorte sur mesure.">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--End_Bootstrap-->
    <link rel="stylesheet" href="scss/style.css">
    <link rel="shortcut icon" href="imgs/favicon.svg" type="image/x-icon">
    <title>Specs</title>
</head>
<body>

<header>
        <?php include 'html/header.html'; ?>
        <div class="btn-group">
            <a href="index.php" class="btn btn-primary">Accueil</a>
            <a href="commander.php" class="btn btn-primary">Commander</a>
            <a href="produits.php" class="btn btn-primary active" aria-current="Produits">Infos</a>
        </div>
</header> 

<div class="info-contain1">
    <div class="specs-infos">
        <h3>Spécificités et caractéristiques</h3>
        <br>
        <br>
        <p>Le Uw est 1.5 W / m2 K
            <br>
            Autres caractéristiques:
            <br>
            - RW( C, Ctr ) : 28 ( 0; -4 )
            <br>
            - Vitrage 24mm F4 + Low E +4 Ag
        </p>
    </div>
    
    <!--Caroussel-->

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/specs/double-vitrage.jpg" class="d-block w-100 imgs" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/specs/triple-vitrage.jpg" class="d-block w-100 imgs" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/specs/windows-group.png" class="d-block w-100 imgs" alt="...">
    </div>
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

    <!--FinCaroussel-->
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php include 'html/footer.html'; ?>
</body>
</html>