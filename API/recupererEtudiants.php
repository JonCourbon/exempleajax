<?php 
// Web service pour récupérer la liste d'Étudiants
// prend la promo en paramètre
// retourne un message au format json avec le status et la liste des étudiants
// on peut tester avec: API/recupererEtudiants.php?promo=mmi1
include("../includes/fonctions.php");

$donnees=array();
if(!isset($_GET["promo"])){
  $donnees["status"]="PAS DE PROMO";
}
else{
  $promo=$_GET["promo"];
  
  $etudiants=listerEtudiants($promo);
  if($etudiants == false){
    $donnees["status"]="LA PROMO N'EXISTE PAS";
  }
  else{
    $donnees["status"]="OK";
    $donnees["etudiants"] = $etudiants;
  }
}

// encodage au format JSON 
$donneesJson = json_encode($donnees, JSON_HEX_APOS); 

// remplacement des \\n qui peuvent causer des erreurs en JavaScript 
$donneesJson = str_replace("\\n", " ", $donneesJson); 

// on écrit les données 
echo $donneesJson;

?>