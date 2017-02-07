<?php
session_start();
?>
<?php
include_once("mineralcollector.php");
$usuario = $_SESSION['mineria'];
$id;

$mineralcollectorObj = new mineralcollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase Mineral</title>
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
    
    
    <h1>TABLA MINERAL</h1>
    <a href="create_mineral.php"><button>CREAR</button></a>
    <table>
        <tr>    
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
        </tr>
        <?php
            foreach ($mineralcollectorObj->showmineral() as $c){
            echo "<tr>";
            echo "<td>" . $c->getid_mineral() . "</td>";
            echo "<td>" . $c->getnombre() . "</td>";            
            echo "<td>" . $c->getdescripcion() . "</td>";   
            
            echo "<td><a href='update_mineral.php?id_mineral=" . $c->getid_mineral() . "&nombre=" . $c->getnombre() . "&descripcion=" . $c->getdescripcion() . "'><button>Editar</button></a></td>";
            echo "<td><a href='delete_mineral.php?id_mineral=". $c->getid_mineral() ."'><button>Eliminar</button></a></td>";
            echo "</tr>"; 
                
        }

        ?>

    </table>

   
 
</body>
</html>
