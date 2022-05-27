<?php

require 'connect.php';

if (isset($_POST)){

    if (isset($_POST["NomPrenomForm"], $_POST["EmailForm"], $_POST["TelForm"], $_POST["TextArea"]) && !empty($_POST["NomPrenomForm"]) && !empty($_POST["EmailForm"]) && !empty($_POST["TelForm"]) && !empty($_POST["TextArea"])) {

        $NomPrenomForm = strip_tags($_POST["NomPrenomForm"]);
        $EmailForm = strip_tags($_POST["EmailForm"]);
        $TelForm = strip_tags($_POST["TelForm"]);
        $TextArea = strip_tags($_POST["TextArea"]);
        $ChoixEnvoi = strip_tags($_POST["ChoixEnvoi"]);

        $sql = "INSERT INTO `messages`(`id`, `nom-prenom`, `email`, `tel`, `mess`, `choix-contact`) VALUES (NULL, :name, :email, :tel, :mess, :choice)";

        $query = $db->prepare($sql);

        $query->bindValue(":name", $NomPrenomForm, PDO::PARAM_STR);
        $query->bindValue(":email", $EmailForm, PDO::PARAM_STR);
        $query->bindValue(":tel", $TelForm, PDO::PARAM_STR);
        $query->bindValue(":mess", $TextArea, PDO::PARAM_STR);
        $query->bindValue(":choice", $ChoixEnvoi, PDO::PARAM_STR);

        if(!$query->execute()){
            die("Il semble que vos infos n'ont pas été enregistrés");
        }

        $id = $db->lastInsertId();

        require_once 'merci-msg.php';

    }else{
        die("formulaire incomplet");
    }

}

?>