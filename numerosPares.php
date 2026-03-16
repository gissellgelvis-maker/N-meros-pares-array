<?php
echo "Ingrese un Número para la cantidad de números que quiere ingresar al array: ";
$num= (int) trim(fgets(STDIN));
$elementos=[];
for($i=0;$i<$num; $i++){
echo "ingrese un numero".($i+1).":";
$elementos[]= (int) trim(fgets(STDIN));
}
echo "\nLista original[ ".implode(",",$elementos)."]\n";
$Numpares =array_filter($elementos, fn ($numero) => $numero % 2 === 0);
$result = array_values($Numpares);
echo  "Numeros pares [ ".implode(",",$result)." ]\n";
?>


