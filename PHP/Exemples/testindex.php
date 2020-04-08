<?php 
//      CREATION D'ATTRIBUTS
class FirstCharacter
{
    private $_force;        // la puissance d'attaque du personnage
    private $_localisation; // son emplacement
    private $_experience;   // son experience
    private $_degats;       // ses dommages
}
/*
Vous pouvez constater que chaque attribut est précédé d'un underscore 
(« _ »). Ceci est une notation qu'il est préférable de respecter 
(il s'agit de la notation PEAR) qui dit que chaque nom d'élément privé 
(ici il s'agit d'attributs, mais nous verrons plus tard qu'il peut aussi s'agir de méthodes) 
doit être précédé d'un underscore.
*/
class SecondCharacter
{
  private $_force = 50;            // La force du personnage, par défaut à 50.
  private $_localisation = 'Kiev'; // Sa localisation, par défaut à Kiev.
  private $_experience = 1;        // Son expérience, par défaut à 1.
  private $_degats = 0;            // Ses dégâts, par défaut à 0.
}
/*
La valeur que vous leur donnez par défaut doit être une expression scalaire statique. 

Par conséquent, leur valeur ne peut par exemple pas être issue d'un appel à une fonction 
    (private $_attribut = strlen('azerty')) 
ou d'une variable, superglobale ou non 
    (private $_attribut = $_SERVER['REQUEST_URI']). 
Si votre version de PHP est antérieure à la 5.6, vous ne pouvez spécifier que des valeurs statiques, 
ce qui rend impossible l'assignation du résultat d'une opération. 

Par exemple, vous ne pouvez pas faire de private $_attribut = 1 + 1 ou bien private $_attribut = 'Hello ' . 'world !' .
*/
//      CREATION DE METHODES
class ThirdCharacter
{
  private $_force = 50;            // La force du personnage, par défaut à 50.
  private $_localisation = 'Lima'; // Sa localisation, par défaut à Lima.
  private $_experience = 1;        // Son expérience, par défaut à 1.
  private $_degats = 0;            // Ses dégâts, par défaut à 0.
public function deplacer()          // Une méthode qui déplacera le personnage (modifieras sa localisation).
{

}
public function cogner()           //une méthode qui cognera un personnage (en fonction de sa force).
{

}
public function gagnerExperience()  //
{

}
}
/*De même que l'underscore précédant les noms d'éléments privés, vous pouvez remarquer que le nom des classes commence par une majuscule.

Il s'agit aussi du respect de la notation PEAR.
*/


?>