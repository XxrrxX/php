 <?php

$listar=null;
$directorio = opendir("archivos/");

while ($elemento=readdir($directorio))
{
 if($elemento != '.' && $elemento != '..' )
 {
  if (is_dir("archivos/".$elemento))
  {
  $listar .="<li><a href='archivos/$elemento' target='_blank'>$elemento/</a></li>";
  }
  else
  {
  $listar .="<li><a href='archivos/$elemento' target='_blank'>$elemento</a></li>";
  }
 
}
?>
