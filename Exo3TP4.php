<!DOCTYPE html>
<html>
	<head>
		<title>Date</title>
	</head>
	<body>
		<h1>Choisir une date</h1>
		<form action="valideDate.php" method="POST">
		<p><table>
			<tr>
				<td><strong>Jour</strong></td>
				<td><strong>Mois</strong></td>
				<td><strong>Annee</strong></td>
			</tr>
			<tr>
				<td><select name="jour">
					<?php 
					for($i=1;$i<=30;$i++)
					echo "<option value=".$i.">".$i."</option> ";?>
				</select></td>
				<td><select name="mois">
					<?php 
					for($i=1;$i<=12;$i++)
					echo "<option value=".$i.">".$i."</option> ";?>
				</select></td>
				<td><select name="Annee">
					<?php 
					for($i=2000;$i<=2030;$i++)
						echo "<option value=".$i.">".$i."</option> ";?>
				</select></td>
			</tr>
		</table>
		<input type="submit" name="submit" value="Envoyer">
		</p>
		</form>
	</body>
</html>