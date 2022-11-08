<?php
//validamos datos del servidor
$host = "localhost";
$user = "root";
$pass = "";


//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
$nom=$_POST['nombre'];
$apep=$_POST['apellidop'];
$apem=$_POST['apellidom'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$correo=$_POST['correo'];
$tel=$_POST['telefono'];
$sal=$_POST['salud'];

//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "Error en la conexión" . mysql_error();
        }
  else
        {
            echo "<b><h4>Conexión exitosa</h45</b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "ficha_medica";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
      
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO reg_user (nombre, apellidop, apellidom, edad, sexo, correo, telefono, salud)
        VALUES ('$nom','$apep','$apem','$edad','$sexo','$correo','$tel','$sal')";
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM reg_user ";//nombre de la tabla a consultar
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h5>Id</th></h5>";
echo "<th><h5>Nombre</th></h5>";
echo "<th><h5>Apellido Materno</th></h5>";
echo "<th><h5>Apellido Paterno</th></h5>";
echo "<th><h5>Edad</th></h5>";
echo "<th><h5>Sexo</th></h5>";
echo "<th><h5>Correo</th></h5>";
echo "<th><h5>Telefono</th></h5>";
echo "<th><h5>Estado de Salud</th></h5>";
echo "</tr>";
while ($colum = mysqli_fetch_array($result))
 {
  echo "<tr>";    
  echo "<td><h6>" . $colum['id']. "</td></h6>";
  echo "<td><h6>" . $colum['nombre']. "</td></h6>";
  echo "<td><h6>" . $colum['apellidop']. "</td></h6>"; 
  echo "<td><h6>" . $colum['apellidom']. "</td></h6>";    
  echo "<td><h6>" . $colum['edad']. "</td></h6>";
  echo "<td><h6>" . $colum['sexo']. "</td></h6>";
  echo "<td><h6>" . $colum['correo']. "</td></h6>";
  echo "<td><h6>" . $colum['telefono']. "</td></h6>";
  echo "<td><h6>" . $colum['salud'] . "</td></h6>";  
  echo "</tr>";
}
echo "</table>";

mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a class="btn btn-danger rounded-pill" href="index.html"> Volver Atrás</a>';


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <title>Tabla de alumnos</title>
    <style>
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 90%;
  text-align: center;
}

table td, table th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0A6C4B;
  color: white;
  text-align: center;
}
</style>
</head>
<body>

</body>
</html>




