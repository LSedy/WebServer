<?php 
//Appeler les methode de l'objet

// création d'une classe Character
class Character
{
  private $_force;
  private $_localisation;
  private $_experience;
  private $_degats;
        
  // On déclare une methode qui permet d'afficher un texte.
  public function talk()
  {
    echo 'Je suis un personnage, on dirais bien!';
  }
}
    
$chara = new Character;
$chara->talk();

//une erreur fatale ce produira ainsi:
$chara->_experience = $chara->_experience +1;

//methode pour gagner de l'xp
class Personnage
{
    private $_experience;

    public function gagnerExperience()
    {
        // Cette methode doit ajouter 1 a l'experience du personnage.
    }
}

$perso = new Personnage;
$perso->gagnerExperience();
//
class Carachtar
{
    private $_experience = 50;

    public function afficherExperience()
    {
        echo $this->_experience;
    }
}


?>