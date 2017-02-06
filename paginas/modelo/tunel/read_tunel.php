<?php
session_start();
?>
<?php
include_once("TunelCollector.php");
$usuario = $_SESSION['mineria'];
$id;

$TunelCollectorObj = new TunelCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase Tunel</title>
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
    
    
    <h1>TABLA Tunel</h1>
    <a href="create_tunel.php"><button>CREAR</button></a>
    <table>
        <tr>    
            <th>ID</th>
            <th>EXTENSION</th>
            <th>NUMERO FRENTE</th>
            <th>ID_MINA</th>
        </tr>
        <?php
            foreach ($TunelCollectorObj->showTunels() as $c){
            echo "<tr>";
            echo "<td>" . $c->getIdTunel() . "</td>";
            echo "<td>" . $c->getExtension() . "</td>";             echo "<td>" . $c->getNumFrente() . "</td>";   
            echo "<td>" . $c->getIdMina() . "</td>";   
            
            echo "<td><a href='update_tunel.php?ID=". $c->getIdTunel() ."&EX=". $c->getExtension() ."&NF=". $c->getNumFrente() ."&IM=". $c->getIdMina() ."'><button>Editar</button></a></td>";
                
            echo "<td><a href='delete_tunel.php?ID=". $c->getIdTunel() ."'><button>Eliminar</button></a></td>";
            echo "</tr>"; 
                
        }

        ?>

    </table>

   
 
</body>
</html>
