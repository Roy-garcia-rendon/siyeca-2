<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/c9.css">
    <title>empleados</title>
</head>
<body>
<style>body{
    background-image: url(mediaa/San\ Juan.jpg);
        background-size: cover;
        background-attachment: fixed;}
        </style>
        <main id="principal">
            <header>
                <div class="Menu container">
                    <a href="#" class="logo">AYUNTAMIENTO</a>
                        <ing src="media/Menu.png" class="Menu-icono" alt="">
                    </label>
                    <nav class="navbar">
                        <ul>
                           <center> <li><a href="menu.html">Menu</a></li>
                            <li><a href="alta.php">Alta empleados</a></li>
                            <li><a href="eliminar.php">Modificaciones</a> </li>
                            <li><a href="index.php">Salir</a></li>



                            <h2>dependencias</h2></center>
                 <li><a href="obras.php">Obras publicas</a></li>
                 <li><a href="dependecias/desarrollo_social.php">Desarrollo social</a></li>
                 <li><a href="dependecias/juridico.php">Juridico</a></li>
                 <li><a href="dependecias/proteccion_civil.php">Proteccion civil</a></li>
                 <li><a href="dependecias/registro_civil.php">Registro civil</a></li>
                 <li><a href="dependecias/Seguridad.php">Seguridad</a></li>
                 <li><a href="dependecias/trancito.php">Trancito</a></li>
                        </ul>
                    </nav>
                </div>   
                </header>
                <div class="contentcontainer">
                    <center><h2>SISTEMA DE ATENCION SIYECA</h2></div>
<center>
    <br class="container mt-5">
    <h2>Busca algun registro</h2>
<br>
<form action="" method="get"> 
    <input type="search" name="busqueda" class="input" placeholder="Buscar registro"> <br>
    <br>
<button type="submit" name="enviar">
    <span>Buscar</span>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 74 74" height="34" width="34">
        <circle stroke-width="3" stroke="black" r="35.5" cy="37" cx="37"></circle>
        <path fill="black" d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"></path>
    </svg>
</button></form>
    <br>
    <?php
    $conexion=mysqli_connect("localhost","root","","siyeca");/*conexion a base de datos*/
    $where="";
if(isset($_GET['enviar'])){
    $busqueda = $_GET['busqueda'];
    if(isset($_GET['busqueda']))
    {
    $where="WHERE no_empleado LIKE '%".$busqueda."%' OR nombre LIKE'%".$busqueda."%'";/*Funcion a realisar, mostrar registros de la base de datos*/
    }
}
    ?>
    <br>

                <table>
                    <tr>
                        <td>no_empleado</td>
                        <td>nombre</td>
                        <td>edad</td>
                        <td>CURP</td>
                        <td>num_tel</td>
                        <td>nacionalidad</td>
                        <td>genero</td>
                        <td>dirreccion</td>
                        <td>profesion</td>
                        <td>ocupacion</td>
                        <td>tipo de sangre</td>
                        <td>RFC</td>
                        <td>estado civil</td>
                        <td>tel emergencia</td>
                        <td>dependencia</td>
                    </tr>
                    <?php
                    /*coneccion base de datos siyeca*/
       $conexion=mysqli_connect("localhost","root","","siyeca");
        /*Funcion a realisar, mostrar registros de la base de datos*/
       $alumnos= "SELECT * from alta_empleados $where"
?>
         <?php
        $resultado=mysqli_query($conexion,$alumnos);
        while ($row=mysqli_fetch_assoc($resultado))
        {
            ?>
            <tr>
        <!--registros-->
                <td> <?php echo $row["no_empleado"];?> </td>
                <td> <?php echo $row["nombre"];?> </td>
                <td> <?php echo $row["edad"];?> </td>
                <td> <?php echo $row["curp"];?> </td>
                <td> <?php echo $row["num_tel"];?> </td>
                <td> <?php echo $row["nacionalidad"];?> </td>
                <td> <?php echo $row["genero"];?> </td>
                <td> <?php echo $row["dirreccion"];?> </td>
                <td> <?php echo $row["profesion"];?> </td>
                <td> <?php echo $row["ocupacion"];?> </td>
                <td> <?php echo $row["tipo_de_sangre"];?> </td>
                <td> <?php echo $row["rfc"];?> </td>
                <td> <?php echo $row["estado_civil"];?> </td>
                <td> <?php echo $row["tel_emergencia"];?> </td>
                <td> <?php echo $row["dependencia"];?> </td>
            </tr>
        <?php } ?>
                </table>
                </center>

    
    <?php
   
  mysqli_close($conexion);
  ?>
</body>
<script src="js/buscador.js"></script>
</html>