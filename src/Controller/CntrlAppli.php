<?php 
namespace Safebase\Controller;
class CntrlAppli{
   
    public function affFormConnexion(){
        //pas de traitement avant affichage
        require 'src/view/connexion.php';
    }
    
    public function connecterBase($host, $db_name, $username, $password)
    {
            
    }
    public function getIndex()
        {
            require 'src/view/index.php';  
        }
        
}
    

