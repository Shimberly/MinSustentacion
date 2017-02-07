<?php
session_start();
?>
<?php
include_once('PersonaCollector.php');
$usuario = $_SESSION['mineria'];
$id;

$PersonaCollectorObj = new PersonaCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase Persona</title>
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
    
    
    <h1>TABLA PERSONA</h1>
    <a href="create_persona.php"><button>CREAR</button></a>
    <table>
        <tr>    
            <th>ID</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>EMAIL</th>
            <th>USUARIO</th>
            <th>CLAVE</th>
            <th>RUC</th>
            <th>ID_EMPRESA</th>
            <th>ID_LICENCIA</th>
            <th>FECHA_NACIMIENTO</th>
        </tr>
        <?php
            foreach ($PersonaCollectorObj->showPersonas() as $c){
            echo "<tr>";
            echo "<td>" . $c->getIdPersona() . "</td>";
            echo "<td>" . $c->getNombre() . "</td>";             
            echo "<td>" . $c->getApellido() . "</td>";   
            echo "<td>" . $c->getEmail() . "</td>";   
            echo "<td>" . $c->getUsuario() . "</td>";
            echo "<td>" . $c->getClave() . "</td>";             
            echo "<td>" . $c->getRuc() . "</td>";   
            echo "<td>" . $c->getIdEmpresa() . "</td>"; 
            echo "<td>" . $c->getIdLicencia() . "</td>";   
            echo "<td>" . $c->getFechaNacimiento() . "</td>"; 
            
          echo "<td><a href='update_persona.php?ID=". $c->getIdPersona() ."&NM=". $c->getNombre() ."&AP=". $c->getApellido() ."&EM=". $c->getEmail() ."&US=". $c->getUsuario() ."&PS=". $c->getClave() ."&RU=". $c->getRuc() ."&IE=". $c->getIdEmpresa() ."&IL=". $c->getIdLicencia() ."&FE=". $c->getFechaNacimiento() ."'><button>Editar</button></a></td>";
                
            echo "<td><a href='delete_persona.php?ID=". $c->getIdPersona() ."'><button>Eliminar</button></a></td>";
            echo "</tr>"; 
             
                
        }

        ?>

    </table>

   
 
</body>
</html>
