<?php

function ajouter($Date, $Reference, $Titre, $Lieu, $Contrat, $Metier, $Entreprise, $Description) {
    if (require("connexion.php")) {
        $req = $access->prepare("INSERT INTO job(Date, Titre, Reference, Lieu, Contrat, Metier, Entreprise, Description) 
        VALUES ($Date, $Reference, $Titre, $Lieu, $Contrat, $Metier, $Entreprise, $Description)");

        $req->execute(array($Date, $Reference, $Titre, $Lieu, $Contrat, $Metier, $Entreprise, $Description));

        $req->closeCursor();

    }
}

function afficher() {
    if (require("connexion.php")) {
        $req = $access->prepare("SELECT * FROM job ORDER BY id");

        $req->execute();
        
        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
    }
}

function supprimer($id) {
    if (require("connexion.php")) {
        $req = $access->prepare("DELETE * FROM job WHERE id=?");

        $req->execute(array($id));
    }
}

?>