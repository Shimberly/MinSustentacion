<?php
session_start();
?>
<?php
include_once("empresaCollector.php");
$usuario = $_SESSION['mineria'];
$id;

$empresaCollectorObj = new empresaCollector();

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Clase Empresa</title>
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
    
    
    <h1>TABLA Empresa</h1>
    <a href="create_empresa.php"><button>CREAR</button></a>
    <table>
        <tr>    
            <th>ID</th>
            <th>RUC</th>
            <th>Razon Social</th>
        <th>Telefono</th>
            <th>Direccion</th>
            <th>Ciudad</th>
        </tr>
             <?php
            foreach ($empresaCollectorObj->showEmpresas() as $c){
            echo "<tr>";
            echo "<td>" . $c->getIdEmpresa() . "</td>";
            echo "<td>" . $c->getRuc() . "</td>"; 
            echo "<td>" . $c->getRazonSocial() . "</td>";            
            echo "<td>" . $c->getTelefono() . "</td>"; 
            echo "<td>" . $c->getDireccion() . "</td>"; 
            echo "<td>" . $c->getIdCiudad() . "</td>"; 
            echo "<td><a href='update_empresa.php?ID=". $c->getIdEmpresa() ."&NM=". $c->getRazonSocial() ."&IE=". $c->getTelefono() ."&UB=".$c->getRuc() ."&UB=".$c->getDireccion() ."&UB="."'><button>Editar</button></a></td>";
                
            echo "<td><a href='delete_empresa.php?ID=". $c->getIdEmpresa() ."'><button>Eliminar</button></a></td>";
            echo "</tr>"; 
                
        }

        ?>
    </table>

   
 
</body>
</html>
