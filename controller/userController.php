<?php
// var_dump($_POST);
include('../bdd/bdd.php');
include('../model/userModel.php');

if (isset($_POST['action'])) {
    $UtilisateurController = new UtilisateurController($bdd);
    switch (isset($_POST['action'])) {
        case 'ajouter':
            $UtilisateurController->create();
            header('Location:http://localhost/Mercredi/index.php');
            break;
        case 'supprimer':
            $UtilisateurController->delete();
            break;
        case 'update':
            $UtilisateurController->update();
            break;
        default:
            # code...
            break;
    }
}

class UtilisateurController
{
    private $utilisateur;
    public function __construct($bdd)
    {
        $this->utilisateur = new Utilisateur($bdd);
    }
    public function create()
    {
        $this->utilisateur->addUtilisateur($_POST['nom'], $_POST['prenom']);
    }
    public function list()
    {
        $this->utilisateur->allUtilisateur();
    }
    public function update()
    {
        $this->utilisateur->updateUtilisateur($_POST['nom'], $_POST['prenom'], $_POST['iduser']);
    }
    public function delete()
    {
        $this->utilisateur->deleteUtilisateur($_POST['iduser']);
    }
}
