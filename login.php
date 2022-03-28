<?php 
$host="localhost";
$port="5432";
$user="postgres";
$password="norma1195";
$db="beagles";

$login_username=$_POST['login_username'];
$login_password=$_POST['login_password'];

 $conexion = pg_connect("host=$host port=$port user=$user password=$password dbname=$db") or die("Error en la base datos: ".pg_last_error($conexion));

    //Ejecutar la consulta
    $SQL = "select id_user,contraseña from usuarios where id_user='$login_username' and contraseña='$login_password' ";

    $resultado = pg_query($conexion, $SQL) or die("No puedo ejecutar la consulta: ".pg_last_error());

    //Procesar el resultado
    $num_filas = pg_num_rows($resultado);
    
if($num_filas==1){
    echo" si ";
    
}
else{
    echo" no";
}


 pg_free_result($resultado);
 pg_close($conexion);

?>

