<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Centrale d'achats</title>
</head>
<body>
	<h1>Centrale d'achats</h1>
	<h4>Commande clients</h4>
	<table border="2">
		<tr style="background-color: rgb(153, 217, 234);">
			<td>Numero de commande</td>
			<td>Numero de client</td>
			<td>Date de commande</td>
			<td>Desination article</td>
			<td>Quantite (Pal)</td>
			<td>Prix Unitaire (DH)</td>
			<td>Date de livraison</td>
			<td>Adresse Client</td>
		</tr>
		<?php if (!$fp = fopen("file.txt","r")) {
                    echo "Echec de l\'ouverture du fichier";
                        exit;
                    }
                        else {
                            try{
                                   
while(!feof($fp)){
      $array = explode("|", fgets($fp));
      echo "<tr>";
      echo " <td> " , $array[0] , "</td>";
      echo " <td> " , $array[1] , "</td>";
      echo " <td> " , $array[2] , "</td>";
      echo " <td> "  , $array[3] , "</td>";
      echo " <td> "  , $array[4] , "</td>";
      echo " <td> "  , $array[5] , " </td>";
      echo " <td> "  , $array[6] , " </td>";
      echo " <td> "  , $array[7] , " </td>";
      echo"</tr>";
}
                            fclose($fp); // On ferme le fichier
                        }
                            catch (Exception $e) {
                                echo 'Caught exception: ',  $e->getMessage(), "\n";
}
   }
        ?>
	</table> 

</body>
</html>