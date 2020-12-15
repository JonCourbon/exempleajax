<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>LISTING ETUDIANTS</title>
  
  <!-- jQuery-->
  <script src="js/jquery-3.4.1.min.js"></script>
  
  <!-- mustache -->
  <script src="js/mustache.min.js"></script>
  
  <link rel="stylesheet" href="css/fichestyle.css">
  
</head>
<body>
  <button type="button" data-promo="mmi1">MMI1</button> 
  <button type="button" data-promo="mmi2">MMI2</button> 
  <main>  
    <div class="wrapper">
      <div class="stud">
        <h2>Etudiant 1</h2>
        <p>Nom1 prenom1</p>
        <p>Mail1</p>
      </div>
      <div class="stud">
        <h2>Etudiant 2</h2>
        <p>Nom1 prenom2</p>
        <p>Mail2</p>
      </div>
      <div class="stud">
        <h2>Etudiant 3</h2>
        <p>Nom1 prenom3</p>
        <p>Mail3</p>
      </div>
      <div class="stud">
        <h2>Etudiant 4</h2>
        <p>Nom1 prenom4</p>
        <p>Mail4</p>
      </div>
    </div>
  </main>
  
</body>

<script id="studs" type="text/html">
  {{ #. }}
  <div class="stud">
    <h2>Etudiant {{id}}</h2>
    <p>{{nom}} {{prenom}}</p>
    <p>Mail: {{mail}}</p>
  </div>
  {{ /. }}
</script>

<script type="text/javascript">
var templ = $('#stud').html();


function afficherEtudiants(lapromo){
  $.getJSON( "API/recupererEtudiants.php",{promo:lapromo}, function( data ) {
    if(data["status"]=="OK"){
      var listeStud="";
      var templ = $('#studs').html();
      listeStud=Mustache.render(templ, data["etudiants"]);
      $(".wrapper").html(listeStud);
    }          
  });
}

$("button").click( function(){
  var promo=$(this).data("promo");
  afficherEtudiants(promo);
});

</script>

</html>