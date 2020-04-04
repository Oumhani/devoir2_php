<!DOCTYPE html>
<html>
<head>
	<title>formulaire</title>
</head>
<body>
		
	<p>		
		La date saisie est : <?php echo $_POST['jour'].'/'.$_POST['mois'].'/'.$_POST['Annee'].'<br/>'; ?>
		<?php 
			if($_POST['Annee']>=2000&&$_POST['Annee']<=2020)
			echo 'La date saisie <strong style="color : green">est valide</srong>'; 
			else echo 'L\'annee '.$_POST['Annee'].' est non bissextile : <strong style="color : red">Date invalide</srong>';
				?>
	</p>	

</body>
</html>