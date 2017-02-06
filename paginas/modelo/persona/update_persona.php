<?php
session_start();
?>
<?php
include_once("PersonaCollector.php");
$usuario = $_SESSION['mineria'];

$id = $_GET['ID'];
$nombre = $_GET['NM'];
$apellido = $_GET['AP'];
$email = $_GET['EM'];
$usuario = $_GET['US'];
$clave = $_GET['PS'];
$ruc = $_GET['RU'];
$id_empresa = $_GET['IE'];
$id_licencia = $_GET['IL'];
$fecha_nacimiento = $_GET['FN'];

$PersonaCollectorObj = new PersonaCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase Persona </title>
    <link rel="stylesheet" href="../estilo.css">
          
</head>
<body>
    <header>
        <h1>Login</h1>
        <div class="usuario">
        <?php
            echo "<p>Hola usuario <span class='nmbUser'>" . $usuario . "<span> </p>";
            echo "<a href='read_persona.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
    <div class="contLogin">
                <h1>MODIFICAR USUARIO</h1>
                <form class="login" method="post" action="save_update_mina.php">
                      <?php
                        echo "<label >Id_Persona</label>";

                        echo "<input type='text' name='id_persona' value='". $id ."' readonly>";
                        echo "<br>";

                        echo "<label >Nombre </label>";
                        echo "<input type='text' name='nombre' value='". $nombre ."'>";
                        echo "<br>";

		        echo "<label >Apellido </label>";
                        echo "<input type='text' name='apellido' value='". $apellido ."'>";
                        echo "<br>";

		        echo "<label >Email </label>";
                        echo "<input type='text' name='email' value='". $email ."'>";
                        echo "<br>";

		        echo "<label >Usuario</label>";
                        echo "<input type='text' name='usuario' value='". $usuario ."'>";
                        echo "<br>";

			echo "<label >Clave </label>";
                        echo "<input type='text' name='clave' value='". $clave ."'>";
                        echo "<br>";

		        echo "<label >Ruc </label>";
                        echo "<input type='text' name='ruc' value='". $ruc ."'>";
                        echo "<br>";

                        echo "<label>Id_Empresa</label>";

                         echo "<select value='". $id_empresa ."' name='id_empresa'>";
                         foreach ($PersonaCollectorObj->showPersonas() as $c){
                            if ($id_empresa == $c->getIdEmpresa()){
                                echo "<option selected>". $c->getIdEmpresa()."</option>";
                            }else{   
                                echo "<option>". $c->getIdEmpresa()."</option>";
                            }
                         }
                         echo "</select>";
                    
                        echo "<br>";

                        
                    ?>
                    <br><br>
                    <?php
                    echo "<a href='save_update_persona.php?ID=". $id ."'><button type='submit'>Modificar</button></a>";
                    ?>
                </form>
            </div>
    </body>
</html>
