<?php
session_start();
?>
<?php
include_once("produccioncollector.php");
$usuario = $_SESSION['mineria'];
$id;

$produccioncollectorObj = new produccioncollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase produccion</title>
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
    
    
    <h1>TABLA produccion</h1>
    <a href="create_produccion.php"><button>CREAR</button></a>
    <table>
        <tr>    
            <th>ID_PRODUCCIÓN</th>
            <th>FECHA</th>
            <th>ID_EMPRESA</th>
        </tr>
        <?php
            foreach ($produccioncollectorObj->showproduccion() as $c){
            echo "<tr>";
            echo "<td>" . $c->getid_produccion() . "</td>";
            echo "<td>" . $c->getfecha() . "</td>";            
            echo "<td>" . $c->getid_empresa() . "</td>";   
            
            echo "<td><a href='update_produccion.php?id_produccion=" . $c->getid_produccion() . "&fecha=" . $c->getfecha() . "&id_empresa=" . $c->getid_empresa() . "'><button>Editar</button></a></td>";
            echo "<td><a href='delete_produccion.php?id_produccion=". $c->getid_produccion() ."'><button>Eliminar</button></a></td>";
            echo "</tr>"; 
                
        }

        ?>

    </table>

   
 
</body>
</html>
