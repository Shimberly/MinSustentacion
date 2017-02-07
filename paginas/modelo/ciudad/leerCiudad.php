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
	<title>Clase Mina</title>
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
    
    
    <h1>TABLA MINA</h1>
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
            echo "<td>" . $c->getIdMina() . "</td>";
            echo "<td>" . $c->getNombre() . "</td>";             echo "<td>" . $c->getIdEmpresa() . "</td>";   
            echo "<td>" . $c->getUbicacion() . "</td>";   
            
            echo "<td><a href='update_mina.php?ID=". $c->getIdMina() ."&NM=". $c->getNombre() ."&IE=". $c->getIdEmpresa() ."&UB=". $c->getUbicacion() ."'><button>Editar</button></a></td>";
                
            echo "<td><a href='delete_mina.php?ID=". $c->getIdMina() ."'><button>Eliminar</button></a></td>";
            echo "</tr>"; 
                
        }

        ?>
    </table>

   
 
</body>
</html>
