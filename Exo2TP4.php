<?php
if (!$fp = fopen("donnees.txt","r")||!$file1 = fopen("pscde01_CLI1001.txt","w+")||!$file2 = fopen("pscde01_CLI1004.txt","w+")) {
    echo "Echec de l\'ouverture du fichier";
        exit;
    }
else {
try{
while(!feof($fp)){
	explode("|", fgets($fp));
	if($fp[1]="CLI1001"){
		for($i=0;$i<8;$i++)
		fputs($file1," ".$fp[i]." |");
	if($fp[1]="CLI1004")
		for($i=0;$i<8;$i++)
		fputs($file2," ".$fp[i]." |");
	}
	while (!feof($file1)) {
		echo " ".$file1[1]." ";
	}
}catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
}
fclose($fp); // On ferme le fichier
fclose($file1);
fclose($file2);
?>