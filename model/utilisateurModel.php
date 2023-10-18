<?php

class Utilisateur {

    private $bdd;

    function __construct($bdd)
    {
        $this->bdd=$bdd;
    }

    public function addUtilisateur($nom, $prenom)
    {
        $req = $this->bdd->prepare('INSERT INTO user(nom,prenom) VALUES (:nom, :prenom)');
        $req->bindParam(':nom', $nom);
        $req->bindParam(':prenom', $prenom);
        return $req->execute();
    }

    public function allUtilisateur()
    {
        $req = $this->bdd->prepare('SELECT * FROM user;');
        $req->execute;
        return $req->fetchAll();
    }

    public function getByIdUtilisateur($id)
    {
        $req = $this->bdd->prepare('SELECT * FROM user WHERE iduser = ?;');
        $req->execute([$id]);
        return $req->fetch();
        
    }

    public function updateUtilisateur($nom, $prenom, $iduser)
    {
        $req = $this->bdd->prepare('UPDATE user SET nom = :nom, prenom = :prenom WHERE iduser = :iduser;');
        $req->bindParam(':nom', $nom);
        $req->bindParam(':prenom', $prenom);
        $req->bindParam(':iduser', $iduser);
        return $req->execute();
    }

    public function deleteUtilisateur($id)
    {
        $req = $this->bdd->prepare('DELETE FROM user WHERE iduser = :iduser;');
        return $req->execute([$id]);
    }


}

?>