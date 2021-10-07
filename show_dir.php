
<?php
// indica el directorio actual
$dirname = '.';
echo '<p>Listando archivos en el directorio ' . $dirname . '</p>';
echo $dirname;
// Abre el directorio para obtener los archivos
$dh = opendir($dirname);
// Ciclo para obtener cada uno de los archivos
while (!is_bool($file=readdir($dh))){
// Verificamos si es un directorio
if(!is_dir($dirname.'/'.$file)){
//print $file<br/>	;
echo "<li><a href='$dirname/$file' target='_blank'>$file</a></li>";
 }
}
closedir($dh);
?>
