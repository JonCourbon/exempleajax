## Page exemple AJAX

Construction pas à pas d'une application qui affiche interactivement la liste d'étudiants via un webservices (ici, les données sont codées en dur mais on pourrait remplacer par une requête à une base de données)

index_step1.php et API/recupererEtudiants.php
- créer le webservice (API/recupererEtudiants.php)
- créer la page web HTML simple avec alert quand on appuie sur les boutons

index_step2.php
- appel du webservice et affichage du statut

index_step3.php
- on lit data et on crée le contenu de notre div wrapper

index_step4.php
- on fait une fonction pour la récupération des données (on pourrait l'appeler une première fois à la fin du chargement de la page)

index_step5.php
- on utilise le moteur de template Mustache (version Javascript) avec un template pour chaque div

index_step6.php
- on fait un template qui contient lui-même une boucle


