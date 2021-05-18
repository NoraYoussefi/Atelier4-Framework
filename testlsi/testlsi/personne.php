<?php

session_start();


$nom  = "";
$id = 0;

$age = 0;

// id
if(isset($_GET["id"]))
        $id = $_GET["id"] ;

// nom
if(isset($_GET["nom"]))
$nom = $_GET["nom"] ;



// age
if(isset($_GET["age"]))
$age = $_GET["age"] ;

// connection avec la bdd : lsi host : locahost / 127.0.01 : 3306


try
{
$bdd = new PDO('mysql:host=127.0.0.1;dbname=lsi1;charset=utf8', 'root', ''); 
echo "success" ;


// insert into bdd table etudiant

$req = $bdd->prepare('INSERT INTO etudiant(nom, age ) VALUES(:nom, :age )');

$req->execute(array( 'nom' => $nom,
'age' => $age

));


// cursor
$tab =    $bdd->query("select * from etudiant");

}
catch (Exception $e) {
die('Erreur : ' . $e->getMessage()); 


}



?>


<html>
<head>

 <title>  </title>

 </head>


 <body>

<table>
<th> id </th>
<th> nom </th>
<th> age </th>


<?php
 while ($donnees = $tab->fetch()){ // parcourir ligne par line
?>
<tr>  

<td><?php echo $donnees['id'] ; ?> </td> 
<td> <?php echo $donnees['nom'] ; ?> </td>
<td> <?php echo $donnees['age'] ; ?>  </td>
</tr>


<?php
}
?>
</table>

</body>
</html>







