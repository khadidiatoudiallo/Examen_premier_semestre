<!DOCTYPE HTML>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <style>
 table
{
	border-collapse : collapse;
	border : 3px solid black;
    background-color : blue;
    background-size:105px;
	background-position:5px;
   
}
h1{
    color : red;
}

 </style>
    </head>
<body>
<div class = "taille">
<div align = "center",height ='20',width='100'>
<h1>Page de contact</h1>
<table height = '100',width='150'>
 <td>
    <form method="POST" action="target.php">
    <p>
    <label for="prenom">Entrer votre prenom :</label><br>
    <input type="text" name="prenom" id="prenom"/><br>
    <label for="nom">Entrer votre nom :</label><br>
    <input type="text" name="nom" id="nom"/><br>
    <label for="adresse">Entrer votre Adresse :</label><br>
    <input type="text" name="Adresse" id="adresse"/><br>
    <label for="profession">Entrer votre profession :</label><br>
    <input type="text" name="Adresse" id="profession"/><br>
    </p>
         <p>
         <input type="submit" value="Valider"/>
         </p>
     </form> 
     </td>
    </table>
    </div>
    </div>
    </body>
</html>