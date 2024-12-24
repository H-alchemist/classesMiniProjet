<?php 

class Utilisateur{
    private string $nom;
    private string $prenom ; 
    private string $type_utilisateur;

    public function __construct($nom , $prenom , $type_utilisateur){
        $this->nom=$nom ;
        $this->prenom= $prenom ; 
        $this->type_utilisateur = $type_utilisateur;
    }

    public function afficherNomComplet(){
        return $this->nom . $this->prenom ;
    }

    public function changerNom($newNom){
        $this->nom=$newNom ; 
        
    }

    public function changerPrenom($newPreonm){
        $this->prenom=$newPreonm ; 
        
    }
}

class Patient extends Utilisateur{

    private string $rendez_vous='none';

    public function __construct($nom, $prenom ){
        parent::__construct($nom, $prenom, 'patient');
        
       
    }


    public function prendreRendezVous($newDate){

        $this->rendez_vous=$newDate ;

    }

    public function getRondez(){
        return $this->rendez_vous;
    }

}


class Medecin extends Utilisateur{
    private string $specialite;
    
    public function __construct($nom , $prenom  , $specialite){
        parent::__construct($nom, $prenom, 'medecin');
        $this->specialite=$specialite;
    }

    public function getSpecialite(){
     return $this->specialite;
    
    }
}














?>