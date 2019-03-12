

<?php
$servername= "localhost";
$username = "root";
$motdepasseSev="";
 
 //session_start();

//nom de la base de données 
   $db="devoir1";


   if(mysqli_connect_error())
   {

       die ("Erreur de connexion à la base de donnee ");
   }
   else{
       $link =mysqli_connect($servername,$username,$motdepasseSev,$db);
   }

if(isset($_POST['submit'])){
   $nom = $_POST['nom'];
   $prenom = $_POST['prenom'];
   $adresse = $_POST['adresse'];

   //requete
   $querry = "INSERT INTO `contact` ( `nom`, `prenom`, `adresse`)
             VALUES ('".$nom."','".$prenom."','".$adresse."') ";        
           echo'bonjour '. $prenom.' votre requete a ete bien transmise </br>';
           // permet de verifier si l'enregistrement est bien passée au niveau de base de données		
   if(mysqli_query($link,$querry)){
      echo " insertion reussie";
       //header('Location:contact.php');  
   }else{
     echo " erreur lors de l' insertion ";
   }
   

}

//free template bootstrap
?>