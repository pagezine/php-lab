<BR><BR><BR><BR>
<CENTER>Você é o visitante número <B>	

<?php
	$fp=fopen("contar.txt","r");
	$contar=fgets($fp,1024);
	fclose($fp);
	
	$fw=fopen("contar.txt","w");
	$acesso=$contar+1;
	$contacesso=fputs($fw,$contar+1);
	echo "$acesso";
	fclose($fw); 
?>

 </B> da minha simples página