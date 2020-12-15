<?php 

// peut être remplacé par BDD
function listerEtudiants($promo){
  $all=listerTousLesEtudiants();
  if(array_key_exists($promo,$all)){
    return $all[$promo]; 
  }
  else{
    return false;
  }
}


function listerTousLesEtudiants(){
  $etudiants["mmi1"] = array(
    array("id"=> 1,"prenom"=>"Teddy","nom"=>"Waeland","mail"=>"twaeland0@addthis.com"),
    array("id"=> 2,"prenom"=>"Katy","nom"=>"Domini,kdomini1@clickbank.net"),
    array("id"=> 3,"prenom"=>"Burke","nom"=>"Morrice,bmorrice2@accuweather.com"),
    array("id"=> 4,"prenom"=>"Lief","nom"=>"Mathevon,lmathevon3@51.la"),
    array("id"=> 5,"prenom"=>"Dusty","nom"=>"Draisey,ddraisey4@over-blog.com"),
    array("id"=> 6,"prenom"=>"Daniel","nom"=>"Licciardiello,dlicciardiello5@hud.gov"),
    array("id"=> 7,"prenom"=>"Darci","nom"=>"Averies,daveries6@bloglines.com"),
    array("id"=> 8,"prenom"=>"Clementina","nom"=>"Lawles,clawles7@latimes.com"),
    array("id"=> 9,"prenom"=>"De witt","nom"=>"Genthner,dgenthner8@patch.com"),
    array("id"=> 10,"prenom"=>"Ambrosi","nom"=>"Wallhead,awallhead9@samsung.com")
  );
  $etudiants["mmi1"] = array(
    array("id"=> 11,"prenom"=>"Margi","nom"=>"Tarte","mail"=>"mtartea@bloglovin.com"),
    array("id"=> 12,"prenom"=>"Maryjane","nom"=>"Barron","mail"=>"mbarronb@forbes.com"),
    array("id"=> 13,"prenom"=>"Alphonso","nom"=>"Shane","mail"=>"ashanec@ucoz.com"),
    array("id"=> 14,"prenom"=>"Rad","nom"=>"Haitlie","mail"=>"rhaitlied@lulu.com"),
    array("id"=> 15,"prenom"=>"Joelly","nom"=>"Clowton","mail"=>"jclowtone@imgur.com"),
    array("id"=> 16,"prenom"=>"Ethel","nom"=>"Langmead","mail"=>"elangmeadf@jimdo.com"),
    array("id"=> 17,"prenom"=>"Octavius","nom"=>"Schimaschke","mail"=>"oschimaschkeg@nih.gov"),
    array("id"=> 18,"prenom"=>"Micky","nom"=>"Lockart","mail"=>"mlockarth@quantcast.com"),
    array("id"=> 19,"prenom"=>"Cinderella","nom"=>"Iacomi","mail"=>"ciacomii@github.com"),
    array("id"=> 20,"prenom"=>"Velvet","nom"=>"Kix","mail"=>"vkixj@miitbeian.gov.cn")
  );
  return $etudiants;
}
?>