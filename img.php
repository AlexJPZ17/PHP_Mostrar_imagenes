<!DOCTYPE HTML> 
<html lang="en-US"> 
<head> 
<meta chasert="UTF-8"> 
<title></title> 
</head> 
<body> 
<?php  
echo "<h1> Tabla con imagenes</h1>"; 
function valida_imagen($imagen){ 
	$rdo=0; 
	if(ereg("[Jj][Pp][Gg]",$imagen)) $rdo=1; 
	if(ereg("[Gg][Ii][Ff]",$imagen)) $rdo=1; 
	if(ereg("[Pp][Nn][Gg]",$imagen)) $rdo=1; 
	if(ereg("[Bb][Mn][Pp]",$imagen)) $rdo=1; 

	return $rdo; 
} 
echo "<table border=2>"; 
$puntero=opendir('img'); // img es el nombre de la carpeta donde estan las fotos 
$img=1; 

while(false!==($imagenes=readdir($puntero))){ 
	if ($imagenes!="." && $imagenes!=".."){ 
		if($img==1) 
		echo "<tr>"; 
		echo"<td><a href='img/$imagenes'>";
		echo "<img width=180px height=180px src='img/$imagenes'> </img>"; 
		echo "</a></td>"; 
		if ($img==4){ 
			echo "</tr>"; 
			$img=0; 
		} 
	$img++; 
	} 
} 

closedir($puntero);
echo"</table>"

?> 
</body> 
</html>