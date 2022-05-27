<button>
    <a href="index.php">Accueil</a>
</button>

<?php

if(!empty($_POST)){
    
    if(
        isset($_POST["first_name"], $_POST["lastname"], $_POST["email"], $_POST["tel"])//, $_POST["L_Fenetre"], $_POST["H_Fenetre"], $_POST["CheckMatiereFenetre"], $_POST["CheckVitrageFenetre"], $_POST["CheckOscilloFenetre"], $_POST["Color_Fenetre"], $_POST["QTY_Fenetre"], $_POST["choixenvoi"])
        
        && !empty($_POST["first_name"]) && !empty($_POST["lastname"]) && !empty($_POST["email"]) && !empty($_POST["tel"])// && !empty($_POST["L_Fenetre"]) && !empty($_POST["H_Fenetre"]) && !empty($_POST["CheckMatiereFenetre"]) && !empty($_POST["CheckVitrageFenetre"]) && !empty($_POST["CheckOscilloFenetre"]) && !empty($_POST["Color_Fenetre"]) && !empty($_POST["QTY_Fenetre"]) && !empty($_POST["choixenvoi"])
    ){

        $first_name = strip_tags($_POST["first_name"]);
        $lastname = strip_tags($_POST["lastname"]);
        $email = strip_tags($_POST["email"]);
        $tel = strip_tags($_POST["tel"]);

        //Partie des fenetres
        $L_Fenetre = strip_tags($_POST["L_Fenetre"]);
        $H_Fenetre = strip_tags($_POST["H_Fenetre"]);
        
        if (empty($_POST["CheckMatiereFenetre"])){$CheckMatiereFenetre = 'vide';}else{$CheckMatiereFenetre = ($_POST["CheckMatiereFenetre"]);}

        if (empty($_POST["CheckVitrageFenetre"])){$CheckVitrageFenetre = 'vide';}else{$CheckVitrageFenetre = ($_POST["CheckVitrageFenetre"]);}

        if (empty($_POST["CheckOscilloFenetre"])){$CheckOscilloFenetre = 'vide';}else{$CheckOscilloFenetre = ($_POST["CheckOscilloFenetre"]);}

        $Color_Fenetre = strip_tags($_POST["Color_Fenetre"]);
        $QTY_Fenetre = strip_tags($_POST["QTY_Fenetre"]);
        //Fin-Partie des fenetres

        //Partie des Baie ou portes fenetres
        $choix_type = ($_POST["choix_type"]);
        $L_baie_porte = strip_tags($_POST["L_Baie_Porte"]);
        $H_baie_porte = strip_tags($_POST["H_Baie_Porte"]);

        if (empty($_POST["CheckMatiereBaiePorte"])){$CheckMatiereBaiePorte = 'vide';}else{$CheckMatiereBaiePorte = ($_POST["CheckMatiereBaiePorte"]);}

        if (empty($_POST["CheckVitrageBaiePorte"])){$CheckVitrageBaiePorte = 'vide';}else{$CheckVitrageBaiePorte = ($_POST["CheckVitrageBaiePorte"]);}

        $Color_Baie_Porte = strip_tags($_POST["Color_Baie_Porte"]);
        $QTY_Baie_Porte = strip_tags($_POST["QTY_Baie_Porte"]);
        //Fin-Partie des Baie ou portes fenetres

        //Portes d'entrée
        $L_porte = strip_tags($_POST["L_porte"]);
        $H_porte = strip_tags($_POST["H_porte"]);

        if (empty($_POST["CheckMatierePorte"])){$CheckMatierePorte = 'vide';}else{$CheckMatierePorte = ($_POST["CheckMatierePorte"]);}

        $ColorPorte = strip_tags($_POST["ColorPorte"]);
        $QTY_Porte = strip_tags($_POST["QTY_Porte"]);
        //Fin-Portes d'entrée

        //Portes de garage
        $L_PorteGarage = strip_tags($_POST["L_PorteGarage"]);
        $H_PorteGarage = strip_tags($_POST["H_PorteGarage"]);

        if (empty($_POST["CheckMatierePorteGarage"])){$CheckMatierePorteGarage = 'vide';}else{$CheckMatierePorteGarage = ($_POST["CheckMatierePorteGarage"]);}

        if (empty($_POST["CheckServicePorteGarage"])){$CheckServicePorteGarage = 'vide';}else{$CheckServicePorteGarage = ($_POST["CheckServicePorteGarage"]);}

        $Color_Garage = strip_tags($_POST["Color_Garage"]);
        $QTY_Garage = strip_tags($_POST["QTY_Garage"]);
        //Fin-Portes de garage

        //Partie Volet
        $L_Volet = strip_tags($_POST["L_Volet"]);
        $H_Volet = strip_tags($_POST["H_Volet"]);

        if (empty($_POST["CheckMatiereVolet"])){$CheckMatiereVolet = 'vide';}else{$CheckMatiereVolet = ($_POST["CheckMatiereVolet"]);}

        $Color_Volet = strip_tags($_POST["Color_Volet"]);
        $QTY_Volet = strip_tags($_POST["QTY_Volet"]);
        //Fin-Partie Volet

        $choixenvoi = ($_POST["choixenvoi"]);

        //:first_name, :lastname, :email, :tel, :L_Fenetre, :H_Fenetre, :CheckMatiereFenetre, :CheckVitrageFenetre, :CheckOscilloFenetre, :Color_Fenetre, :QTY_Fenetre, :choix_type, :L_baie_porte, :H_baie_porte, :CheckMatiereBaiePorte, :CheckVitrageBaiePorte, :Color_Baie_Porte, :QTY_Baie_Porte, :L_porte, :H_porte, :CheckMatierePorte, :ColorPorte, :QTY_Porte, :L_PorteGarage, :H_PorteGarage, :CheckMatierePorteGarage, :CheckServicePorteGarage, :Color_Garage, :QTY_Garage, :L_Volet, :H_Volet, :CheckMatiereVolet, :Color_Volet, :QTY_Volet, :choixenvoi

        require_once "connect.php";

        $sql = "INSERT INTO `commandes` (`id`, `first_name`, `lastname`, `email`, `tel`, `l-fenetre`, `h-fenetre`, `matiere-fenetre`, `vitrage-fenetre`, `oscillo-fenetre`, `color-fenetre`, `qty-fenetre`, `choix-type`, `l-baie-porte`, `h-baie-porte`, `matiere-baie-porte`, `vitrage-baie-porte`, `color-baie-porte`, `qty-baie-porte`, `l-porte`, `h-porte`, `MatierePorte`, `ColorPorte`, `QTY-porte`, `l-porte-garage`, `h-porte-garage`, `Matiere-PorteGarage`, `ServicePorteGarage`, `ColorGarage`, `QTY-Garage`, `l-volet`, `h-volet`, `MatiereVolet`, `ColorVolet`, `QTY-Volet`, `choix-envoi`) VALUES (NULL, :first_name, :lastname, :email, :tel, :L_Fenetre, :H_Fenetre, :CheckMatiereFenetre, :CheckVitrageFenetre, :CheckOscilloFenetre, :Color_Fenetre, :QTY_Fenetre, :choix_type, :L_baie_porte, :H_baie_porte, :CheckMatiereBaiePorte, :CheckVitrageBaiePorte, :Color_Baie_Porte, :QTY_Baie_Porte, :L_porte, :H_porte, :CheckMatierePorte, :ColorPorte, :QTY_Porte, :L_PorteGarage, :H_PorteGarage, :CheckMatierePorteGarage, :CheckServicePorteGarage, :Color_Garage, :QTY_Garage, :L_Volet, :H_Volet, :CheckMatiereVolet, :Color_Volet, :QTY_Volet, :choixenvoi)";

        $query = $db->prepare($sql);

        $query->bindValue(":first_name", $first_name, PDO::PARAM_STR);
        $query->bindValue(":lastname", $lastname, PDO::PARAM_STR);
        $query->bindValue(":email", $email, PDO::PARAM_STR);
        $query->bindValue(":tel", $tel, PDO::PARAM_STR);

        //Partie des fenetres
        $query->bindValue(":L_Fenetre", $L_Fenetre, PDO::PARAM_STR);
        $query->bindValue(":H_Fenetre", $H_Fenetre, PDO::PARAM_STR);
        $query->bindValue(":CheckMatiereFenetre", $CheckMatiereFenetre, PDO::PARAM_STR);
        $query->bindValue(":CheckVitrageFenetre", $CheckVitrageFenetre, PDO::PARAM_STR);
        $query->bindValue(":CheckOscilloFenetre", $CheckOscilloFenetre, PDO::PARAM_STR);
        $query->bindValue(":Color_Fenetre", $Color_Fenetre, PDO::PARAM_STR);
        $query->bindValue(":QTY_Fenetre", $QTY_Fenetre, PDO::PARAM_STR);
        //Fin partie fenetres

        //Partie des Baie ou portes fenetres
        $query->bindValue(":choix_type", $choix_type, PDO::PARAM_STR);
        $query->bindValue(":L_baie_porte", $L_baie_porte, PDO::PARAM_STR);
        $query->bindValue(":H_baie_porte", $H_baie_porte, PDO::PARAM_STR);
        $query->bindValue(":CheckMatiereBaiePorte", $CheckMatiereBaiePorte, PDO::PARAM_STR);
        $query->bindValue(":CheckVitrageBaiePorte", $CheckVitrageBaiePorte, PDO::PARAM_STR);
        $query->bindValue(":Color_Baie_Porte", $Color_Baie_Porte, PDO::PARAM_STR);
        $query->bindValue(":QTY_Baie_Porte", $QTY_Baie_Porte, PDO::PARAM_STR);
        //Fin-Partie des Baie ou portes fenetres

        //Partie Porte
        $query->bindValue(":L_porte", $L_porte, PDO::PARAM_STR);
        $query->bindValue(":H_porte", $H_porte, PDO::PARAM_STR);
        $query->bindValue(":CheckMatierePorte", $CheckMatierePorte, PDO::PARAM_STR);
        $query->bindValue(":ColorPorte", $ColorPorte, PDO::PARAM_STR);
        $query->bindValue(":QTY_Porte", $QTY_Porte, PDO::PARAM_STR);
        //Fin-Partie Porte

        //Partie Porte Garage
        $query->bindValue(":L_PorteGarage", $L_PorteGarage, PDO::PARAM_STR);
        $query->bindValue(":H_PorteGarage", $H_PorteGarage, PDO::PARAM_STR);
        $query->bindValue(":CheckMatierePorteGarage", $CheckMatierePorteGarage, PDO::PARAM_STR);
        $query->bindValue(":CheckServicePorteGarage", $CheckServicePorteGarage, PDO::PARAM_STR);
        $query->bindValue(":Color_Garage", $Color_Garage, PDO::PARAM_STR);
        $query->bindValue(":QTY_Garage", $QTY_Garage, PDO::PARAM_STR);
        //Fin-Partie Porte Garage

        //Partie-Volets
        $query->bindValue(":L_Volet", $L_Volet, PDO::PARAM_STR);
        $query->bindValue(":H_Volet", $H_Volet, PDO::PARAM_STR);
        $query->bindValue(":CheckMatiereVolet", $CheckMatiereVolet, PDO::PARAM_STR);
        $query->bindValue(":Color_Volet", $Color_Volet, PDO::PARAM_STR);
        $query->bindValue(":QTY_Volet", $QTY_Volet, PDO::PARAM_STR);
        //Fin-Partie-Volets

        $query->bindValue(":choixenvoi", $choixenvoi, PDO::PARAM_STR);

        

        if(!$query->execute()){
            die("Il semble que vos infos n'ont pas était enregistrés");
        }

        $id = $db->lastInsertId();

        
        require 'merci-msg.php';
        die ("Demande enregistrée comme numéro $id");

    }else{
        die("formulair incomplet");
    }
}
?>