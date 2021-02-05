<?php


class Employe 
{
    public $_nom;
    public $_prenom;
    public $_date;
    public $_fonction;
    public $_salaire;
    public $_service;
    public $_agence;
    public $_chequevac;
    public $_chequenoel;
    public $_montantchequenoel;
}
    $dave = new Employe();
    
    $dave->nom = 'Loper';
    $dave->prenom = 'Dave';
    $dave->date = '01/01/2021';
    $dave->fonction = 'Ouvrier';
    $dave->salaire = 15000;
    $dave->service = 'Operation';
    $dave->agence = 'Lille';
    $dave->chequevac = 'Non';
    $dave->chequenoel = 'Oui';
    $dave->montantchequenoel = '80';

    $fabien = new Employe();

    $fabien->nom = 'Fourrière';
    $fabien->prenom = 'Fabien';
    $fabien->date = '15/07/2000';
    $fabien->fonction = 'Manager';
    $fabien->salaire = 25000;
    $fabien->service = 'Management';
    $fabien->agence = 'Amiens';
    $fabien->chequevac = 'Oui';
    $fabien->chequenoel = 'Non';
    $fabien->montantchequenoel = '0';

    $pierre = new Employe();

    $pierre->nom = 'Lefevre';
    $pierre->prenom = 'Pierre';
    $pierre->date = '08/08/2000';
    $pierre->fonction = 'Comptable';
    $pierre->salaire = 20000;
    $pierre->service = 'Ressources Humaines';
    $pierre->agence = 'Lille';
    $pierre->chequevac = 'Oui';
    $pierre->chequenoel = 'Oui';
    $pierre->montantchequenoel = '20';

    $lucas = new Employe();

    $lucas->nom = 'Sica';
    $lucas->prenom = 'Lucas';
    $lucas->date = '11/09/2000';
    $lucas->fonction = 'Chef d equipe';
    $lucas->salaire = 22000;
    $lucas->service = 'Management';
    $lucas->agence = 'Lille';
    $lucas->chequevac = 'Oui';
    $lucas->chequenoel = 'Non';
    $lucas->montantchequenoel = '0';

    $cedric = new Employe();

    $cedric->nom = 'Bush';
    $cedric->prenom = 'Cedric';
    $cedric->date = '04/04/2020';
    $cedric->fonction = 'Technicien';
    $cedric->salaire = 18000;
    $cedric->service = 'Maintenance';
    $cedric->agence = 'Amiens';
    $cedric->chequevac = 'Non';
    $cedric->chequenoel = 'Oui';
    $cedric->montantchequenoel = '100';

    class Agence extends Employe
    {   
      public function affecter(string $nomagence) {
        $this->$_nomagence;
        return $this->_nomagence;
      }
    }
    