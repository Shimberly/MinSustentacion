<?php
session_start();
?>
<?php
include_once("ciudadCollector.php");
$usuario = $_SESSION['mineria'];
$id;

$ciudadCollectorObj = new ciudadCollector();

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Clase Ciudad</title>
    <link rel="stylesheet" href="../estilo.css">
          
</head>
<body>
    <header>
        <h1>Login</h1>
        <div class="usuario">
        <?php
            echo "<p>Hola usuario <span class='nmbUser'>" . $usuario . "<span> </p>";
            echo "<a href='../../calidad.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
    
    
    <h1>TABLA Ciudad</h1>
    <a href="create_ciudad.php"><button>CREAR</button></a>
    <table>
        <tr>    
            <th>ID</th>
            <th>NOMBRE</th>
            <th>ID_Pais</th>
        
        </tr>
             <?php
            foreach ($ciudadCollectorObj->showCiudades() as $c){
            echo "<tr>";
            echo "<td>" . $c->getIdCiudad() . "</td>";
            echo "<td>" . $c->getNombre() . "</td>";            
               echo "<td>" . $c->getIdPais() . "</td>";   
            echo "<td><a href='update_ciudad.php?ID=". $c->getIdCiudad() ."&NM=". $c->getNombre() ."&IE=". $c->getIdPais() ."&UB="."'><button>Editar</button></a></td>";
                
            echo "<td><a href='delete_mina.php?ID=". $c->getIdCiudad() ."'><button>Eliminar</button></a></td>";
            echo "</tr>"; 
                
        }

        ?>
    </table>

   
 
</body>
</html>
