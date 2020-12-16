## Page exemple AJAX

Construction pas à pas d'une application qui affiche interactivement la liste d'étudiants via un webservices (ici, les données sont codées en dur mais on pourrait remplacer par une requête à une base de données)

index_step1.php et API/recupererEtudiants.php
- créer le webservice (API/recupererEtudiants.php)
  - Ce webservice a besoin de la promo (transmis avec la méthode GET)
  - Il retourne un message en JSON
  - Avec le status (OK si tout est bon, message d'erreur sinon)
  - La liste des étudiants
- créer la page web HTML simple avec alert quand on appuie sur les boutons

index_step2.php
- appel du webservice et affichage du statut

index_step3.php
- on lit le contenu retourné par le webservice (dans la variable "data")
- on crée le contenu HTML par concaténation
- on met ce contenu dans notre div 

index_step4.php
- on fait une fonction pour la récupération des données (on pourrait l'appeler une première fois à la fin du chargement de la page)

index_step5.php
- on utilise le moteur de template Mustache (version Javascript) avec un template pour chaque div
  - il faut inclure le fichier mustache.js
  - il faut créer le template (que l'on met dans le HTML ici)
  - on peuple le template pour chaque étudiant et on concatène le résultat

index_step6.php
- on fait un template qui contient lui-même une boucle


