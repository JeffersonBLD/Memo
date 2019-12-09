<!DOCTYPE html>
<html>
<body>

<p id="demo">Demostración RAPIDA</p>

<?php 

//Esté codigo será el primero manejado con github
function accion(){
	$i=0;
	$archivo=fopen("info.txt",'r')
	or die("no se pudo"); 
	while(!feof($archivo)){
		$traer=fgets($archivo);
		$linea=explode("	",$traer);
		$arreglo[$i]=$linea;
		$i++;
	}
	$numero=rand(1,$i-1);
	for($j=0;$j<4;$j++){
		echo $arreglo[0][$j]." = ".$arreglo[$numero][$j];
		echo '<hr>';
	}


}
  if (isset($_GET['hello'])) {
    accion();
  }
?>

</body>
<a href='memo.php?hello=true'>Generar</a>
</html>

