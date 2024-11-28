<?php
class EtudiantManager{
    public $etudiants = [];
    public function __construct()
    {
        $this->loadEtudiants();
    }

    public function loadEtudiants(){
        $etudiant1 = new Etudiant("El Mahdi",12,"elmahdibellaziz@gmail.com");
        $etudiant2 = new Etudiant("Simo",11,"elmahdibellaziz@gmail.com");
        $etudiant3 = new Etudiant("Ali",21,"elmahdibellaziz@gmail.com");
        $etudiant4 = new Etudiant("Khalid",14,"elmahdibellaziz@gmail.com");
        $this->etudiants = [
            $etudiant1,
            $etudiant2,
            $etudiant3,
            $etudiant4,
        ];
    }
    public function getEtudiants(){
        return $this->etudiants;
    }
}


?>