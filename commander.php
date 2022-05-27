<?php

$sub_title = "Une fois la demande de devis envoyée, vous le recevrez 
par mail ou par téléphone selon votre choix";
$red_sub_title = "Le tout sur mesure";

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
    <title>Commander</title>
</head>
<body>
    <header>
        <?php include 'html/header.html'; ?>
        <div class="btn-group">
            <a href="index.php" class="btn btn-primary">Accueil</a>
            <a href="commander.php" class="btn btn-primary active"   aria-current="Commander">Commander</a>
            <a href="produits.php" class="btn btn-primary">Infos</a>
        </div>
    </header>     

    <div class="separate-form"></div>
    <div class="separate-form"></div>

    <!--Fenetre-->
    <!--Fenetre-->
    <form action="send_command.php" method="post">

    <!--Formulaire info-->

    <div class="form-info-id">

        <div class="mb-3">
            <input class="form-control" name="first_name" type="text" placeholder="Votre nom" required>
        </div>

        <div class="mb-3">
            <input class="form-control" name="lastname" type="text" placeholder="Votre prénom" required>
        </div>

        <div class="mb-3">
            <input class="form-control" name="email" type="text" placeholder="Votre email" required>
        </div>

        <div class="mb-3">
            <input class="form-control" name="tel" type="tel" placeholder="Votre numéro de téléphone" required>
        </div>

    </div>

    <!--End-Formulaire info-->

    <div class="separate-form"></div>

    <div class="form-command-group1">
    <div class="group_fenetre group">
    
    <h3 class="h3-title">Configuration Fenêtre</h3>
        
        <div class="mb-3">
            <label for="DimensionFenetreLargeur" class="form-label">Largeur en mm</label>
            <input type="number" class="form-control" id="DimensionFenetreLargeur" name="L_Fenetre" placeholder="Ex: 2000">
        </div>
        <div class="mb-3">
            <label for="DimensionFenetreHauteur" class="form-label">Hauteur en mm</label>
            <input type="number" class="form-control" id="DimensionFenetreHauteur" name="H_Fenetre" placeholder="Ex: 2000">
        </div>

        <!--Radios-->
        <label>Choix Matière</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="CheckMatiereFenetre" id="CheckMatiereFenetre1" value="PVC">
            <label class="form-check-label" for="CheckMatiereFenetre1">
             PVC
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="CheckMatiereFenetre" id="CheckMatiereFenetre2" value="Aluminium">
            <label class="form-check-label" for="CheckMatiereFenetre2">
            Aluminium
            </label>
        </div>

        <div class="separate-form"></div>

        <label>Choix Vitrage</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="CheckVitrageFenetre" id="CheckVitrageFenetre1" value="Double_vitre">
            <label class="form-check-label" for="CheckVitrageFenetre1">
            Double-vitrage
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="CheckVitrageFenetre" id="CheckVitrageFenetre2" value="Triple_vitre">
            <label class="form-check-label" for="CheckVitrageFenetre2">
            Triple-Vitrage
            </label>
        </div>

        <div class="separate-form"></div>

        <label>Option Oscillo Battant</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="CheckOscilloFenetre" id="CheckOscilloFenetre1" value="Oscillo_Oui">
            <label class="form-check-label" for="CheckOscilloFenetre1">
            Oscillo battant
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="CheckOscilloFenetre" id="CheckOscilloFenetre2" value="Oscillo_Non">
            <label class="form-check-label" for="CheckOscilloFenetre2">
            Non Oscillo battant
            </label>
        </div>
        <!--End-Radios-->

        <div class="separate-form"></div>

        <div class="mb-3">
            <label for="CodeCouleurFenetre" class="form-label">Veuillez renseigner le code couleur désiré. Si votre choix se porte sur le blanc, écrivez 00.</label>
            <input type="number" class="form-control" id="CodeCouleurFenetre" name="Color_Fenetre" placeholder="Ex: 00">
            <label for="CodeCouleurFenetre" class="form-label">Pour rappel, vous pouvez retrouver les différents codes couleurs sur la page d'accueil.</label>
        </div>

        <div class="separate-form"></div>

        <div class="mb-3">
            <label for="QTEFenetre" class="form-label">Quantité</label>
            <input type="number" class="form-control" name="QTY_Fenetre" id="QTEFenetre" placeholder="Ex: 3">
        </div>

    </div>
    <!--End-Fenetre-->
    <!--End-Fenetre-->

    <div class="separate-form"></div>
    <div class="separate-form"></div>

    <!--Baie-Porte-Fenetre-->
    <!--Baie-Porte-Fenetre-->
    <div class="group_porte_baie_fenetre group">
    <h3 class="h3-title">Configuration Baie Vitrée ou Porte-Fenêtre</h3>

        <div class="separate-form"></div>

        <select class="form-select" name="choix_type" aria-label="Select-type">
            <option selected>Porte-fenêtre ou baie vitrée</option>
            <option value="porte-fenêtre">Porte-fenêtre</option>
            <option value="baie_vitree">Baie Vitrée</option>
        </select>

        <div class="separate-form"></div>

        <div class="mb-3">
            <label for="DimensionBaiePorteLargeur" class="form-label">Largeur en mm</label>
            <input type="number" class="form-control" name="L_Baie_Porte" id="DimensionBaiePorteLargeur" placeholder="Ex: 2000">
        </div>
        <div class="mb-3">
            <label for="DimensionBaiePorteHauteur" class="form-label">Hauteur en mm</label>
            <input type="number" class="form-control" name="H_Baie_Porte" id="DimensionBaiePorteHauteur" placeholder="Ex: 2000">
        </div>

        <!--Radios-->
        <label>Choix Matière</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="CheckMatiereBaiePorte" id="CheckMatiereBaiePorte1" value="PVC">
            <label class="form-check-label" for="CheckMatiereBaiePorte1">
             PVC
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="CheckMatiereBaiePorte" id="CheckMatiereBaiePorte2" value="Aluminium">
            <label class="form-check-label" for="CheckMatiereBaiePorte2">
            Aluminium
            </label>
        </div>

        <div class="separate-form"></div>

        <label>Choix Vitrage</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="CheckVitrageBaiePorte" id="CheckVitrageBaiePorte1" value="Double_vitre">
            <label class="form-check-label" for="CheckVitrageBaiePorte1">
            Double-vitrage
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="CheckVitrageBaiePorte" id="CheckVitrageBaiePorte2" value="Triple_vitre">
            <label class="form-check-label" for="CheckVitrageBaiePorte2">
            Triple-Vitrage
            </label>
        </div>

        <!--End-Radios-->

        <div class="separate-form"></div>

        <div class="mb-3">
            <label for="CodeCouleurBaiePorte" class="form-label">Veuillez renseigner le code couleur désiré. Si votre choix se porte sur le blanc, écrivez 00.</label>
            <input type="number" class="form-control" name="Color_Baie_Porte" id="CodeCouleurBaiePorte" placeholder="Ex: 00">
            <label for="CodeCouleurBaiePorte" class="form-label">Pour rappel, vous pouvez retrouver les différents codes couleurs sur la page d'accueil.</label>
        </div>

        <div class="separate-form"></div>

        <div class="mb-3">
            <label for="QTEBaiePorte" class="form-label">Quantité</label>
            <input type="number" class="form-control" name="QTY_Baie_Porte" id="QTEBaiePorte" placeholder="Ex: 3">
        </div>

    </div>
    </div>
    <!--End-Baie-Porte-Fenetre-->
    <!--End-Baie-Porte-Fenetre-->

    <div class="separate-form"></div>
    <div class="separate-form"></div>

    <div class="form-command-group2">

    <!--Porte-->
        <div class="group_porte group">
        <h3 class="h3-title">Configuration Porte</h3>
        <div class="mb-3">
            <label for="DimensionPorteLargeur" class="form-label">Largeur en mm</label>
            <input type="number" class="form-control" name="L_porte" id="DimensionPorteLargeur" placeholder="Ex: 2000">
        </div>
        <div class="mb-3">
            <label for="DimensionPorteHauteur" class="form-label">Hauteur en mm</label>
            <input type="number" class="form-control" name="H_porte" id="DimensionPorteHauteur" placeholder="Ex: 2000">
        </div>

        <!--Radios-->
        <label>Choix Matière</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="CheckMatierePorte" id="CheckMatierePorte1" value="PVC">
            <label class="form-check-label" for="CheckMatierePorte1">
             PVC
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="CheckMatierePorte" id="CheckMatierePorte2" value="Aluminium">
            <label class="form-check-label" for="CheckMatierePorte2">
            Aluminium
            </label>
        </div>

        <!--End-Radios-->

        <div class="separate-form"></div>

        <div class="mb-3">
            <label for="CodeCouleurPorte" class="form-label">Veuillez renseigner le code couleur désiré. Si votre choix se porte sur le blanc, écrivez 00.</label>
            <input type="number" class="form-control" name="ColorPorte" id="CodeCouleurPorte" placeholder="Ex: 00">
            <label for="CodeCouleurPorte" class="form-label">Pour rappel, vous pouvez retrouver les différents codes couleurs sur la page d'accueil.</label>
        </div>

        <div class="separate-form"></div>

        <div class="mb-3">
            <label for="QTEPortes" class="form-label">Quantité</label>
            <input type="number" class="form-control" name="QTY_Porte" id="QTEPortes" placeholder="Ex: 3">
        </div>

        </div>
    <!--End-Porte-->

    <div class="separate-form"></div>
    <div class="separate-form"></div>


    <!--Porte-garage-->
        <div class="group_porte_garage group">

        <h3 class="h3-title">Configuration Porte de Garage</h3>
        <div class="mb-3">
            <label for="DimensionPorteGarageLargeur" class="form-label">Largeur en mm</label>
            <input type="number" class="form-control" name="L_PorteGarage" id="DimensionPorteGarageLargeur" placeholder="Ex: 2000">
        </div>
        <div class="mb-3">
            <label for="DimensionPorteGarageHauteur" class="form-label">Hauteur en mm</label>
            <input type="number" class="form-control" name="H_PorteGarage" id="DimensionPorteGarageHauteur" placeholder="Ex: 2000">
        </div>

        <!--Radios-->
        <label>Choix Matière</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="CheckMatierePorteGarage" id="CheckMatierePorteGarage1" value="PVC">
            <label class="form-check-label" for="CheckMatierePorteGarage1">
             PVC
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="CheckMatierePorteGarage" id="CheckMatierePorteGarage2" value="Aluminium">
            <label class="form-check-label" for="CheckMatierePorteGarage2">
            Aluminium
            </label>
        </div>

        <div class="separate-form"></div>

        <label>Choix Porte de service</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="CheckServicePorteGarage" id="CheckServicePorteGarage1" value="NonPorteService">
            <label class="form-check-label" for="CheckServicePorteGarage1">
            Sans porte de service
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="CheckServicePorteGarage" id="CheckServicePorteGarage2" value="PorteServiceIntegre">
            <label class="form-check-label" for="CheckServicePorteGarage2">
            Porte de service integrée
            </label>
        </div>

        <!--End-Radios-->

        <div class="separate-form"></div>

        <div class="mb-3">
            <label for="CodeCouleurPorteGarage" class="form-label">Veuillez renseigner le code couleur désiré. Si votre choix se porte sur le blanc, écrivez 00.</label>
            <input type="number" class="form-control" name="Color_Garage" id="CodeCouleurPorteGarage" placeholder="Ex: 00">
            <label for="CodeCouleurPorteGarage" class="form-label">Pour rappel, vous pouvez retrouver les différents codes couleurs sur la page d'accueil.</label>
        </div>

        <div class="separate-form"></div>

        <div class="mb-3">
            <label for="QTEPorteGarage" class="form-label">Quantité</label>
            <input type="number" class="form-control" name="QTY_Garage" id="QTEPorteGarage" placeholder="Ex: 3">
        </div>

        </div>
    <!--End-Porte-garage-->
    </div>
    
    <div class="separate-form"></div>
    <div class="separate-form"></div>

    <!--Volet roulan-->

    <div class="form-command-group3">

        <div class="group_volet group">

        <h3 class="h3-title">Configuration Volet Roulant</h3>
        <div class="mb-3">
            <label for="DimensionVoletLargeur" class="form-label">Largeur en mm</label>
            <input type="number" class="form-control" name="L_Volet" id="DimensionVoletLargeur" placeholder="Ex: 2000">
        </div>
        <div class="mb-3">
            <label for="DimensionVoletHauteur" class="form-label">Hauteur en mm</label>
            <input type="number" class="form-control" name="H_Volet" id="DimensionVoletHauteur" placeholder="Ex: 2000">
        </div>

        <!--Radios-->
        <label>Choix Matière</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="CheckMatiereVolet" id="CheckMatiereVolet1" value="PVC">
            <label class="form-check-label" for="CheckMatiereVolet1">
             PVC
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="CheckMatiereVolet" id="CheckMatiereVolet2" value="Aluminium">
            <label class="form-check-label" for="CheckMatiereVolet2">
            Aluminium
            </label>
        </div>

        <!--End-Radios-->

        <div class="separate-form"></div>

        <div class="mb-3">
            <label for="CodeCouleurVolet" class="form-label">Veuillez renseigner le code couleur désiré. Si votre choix se porte sur le blanc, écrivez 00.</label>
            <input type="number" class="form-control" name="Color_Volet" id="CodeCouleurVolet" placeholder="Ex: 00">
            <label for="CodeCouleurVolet" class="form-label">Pour rappel, vous pouvez retrouver les différents codes couleurs sur la page d'accueil.</label>
        </div>

        <div class="separate-form"></div>

        <div class="mb-3">
            <label for="QTEVolet" class="form-label">Quantité</label>
            <input type="number" class="form-control" name="QTY_Volet" id="QTEVolet" placeholder="Ex: 3">
        </div>

        </div>

        <!--End-Volet roulant-->

    </div>

    <div class="separate-form"></div>
    <div class="separate-form"></div>

    <div class="form-command-group4">

        <div class="mb-3 checkChoixEnvoi">
        <label class="form-label" for="choixenvoi">Recevoir mon devis par SMS</label>
        <input class="form-check-input" type="radio" id="choixenvoi" name="choixenvoi" value="sms" checked>
    </div>
    <div class="mb-3 checkChoixEnvoi">
        <label class="form-label" for="choixenvoi">Par email</label>
        <input class="form-check-input" type="radio" id="choixenvoi" name="choixenvoi" value="email" checked>
    </div>

    </div>
    
    
    <button type="submit" class="btn btn-primary">Envoyer</button>

    </form>
    

    <?php include 'html/footer.html'; ?>
</body>
</html>