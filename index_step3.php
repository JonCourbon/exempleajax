<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>LISTING ETUDIANTS</title>
  
  <!-- jQuery-->
  <script src="js/jquery-3.4.1.min.js"></script>
  
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

<script type="text/javascript">
$("button").click( function(){
  $.getJSON( "API/recupererEtudiants.php",{promo:$(this).data("promo")}, function( data ) {
    if(data["status"]=="OK"){
      var listeStud="";
      for (index = 0; index < data["etudiants"].length; index++) {
        listeStud=listeStud+
        '<div class="stud">'+
        '  <h2>Etudiant '+data["etudiants"][index].id+'</h2>'+
        '  <p>'+data["etudiants"][index].nom+' '+data["etudiants"][index].prenom+'</p>'+
        '  <p>Mail:'+data["etudiants"][index].mail+'</p>'+
        '</div>';
      }
      $(".wrapper").html(listeStud);
    }          
  });
});
</script>

</html>