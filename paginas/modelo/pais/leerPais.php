<?php
session_start();
?>
<?php
include_once("paisCollector.php");
$usuario = $_SESSION['mineria'];
$id;

$paisCollectorObj = new paisCollector();

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Clase Pais</title>
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
    
    
    <h1>TABLA Pais</h1>
    <a href="create_pais.php"><button>CREAR</button></a>
    <table>
        <tr>    
            <th>ID</th>
            <th>NOMBRE</th>
        
        
        </tr>
             <?php
            foreach ($paisCollectorObj->showPaises() as $c){
            echo "<tr>";
         echo "<td>" . $c->getIdPais() . "</td>";  
            echo "<td>" . $c->getNombre() . "</td>";            
               
            echo "<td><a href='update_pais.php?ID=". $c->getIdPais() ."&NM=". $c->getNombre() ."&IE="."'><button>Editar</button></a></td>";
                
            echo "<td><a href='delete_pais.php?ID=". $c->getIdPais() ."'><button>Eliminar</button></a></td>";
            echo "</tr>"; 
                
        }

        ?>
    </table>

   
 
</body>
</html>
