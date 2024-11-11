<?php
include("conexion.php"); ?>
    <br class="container mt-5">
    <h2>Busca algun registro</h2>
<br>
<form action="" method="get">
    <input type="search" name="busqueda" class="input" placeholder="Buscar registro"> <br>
    <input type="submit" name="enviar" values="Buscar"></form>
    <br>
    <br>
    <br>
    <?php
    $conexion=mysqli_connect("localhost","root","","siyeca");
    $where="";
if(isset($_GET['enviar'])){
    $busqueda = $_GET['busqueda'];
    if(isset($_GET['busqueda']))
    {
    $where="WHERE no_empleado LIKE '%".$busqueda."%' OR nombre LIKE'%".$busqueda."%'";
    }
}
    ?>
    <br>
