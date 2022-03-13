<?php include("consultas.php");

$sql = $connection->prepare("SELECT * FROM sobremi");
$sql->execute();
$descripcion = $sql->fetch(PDO::FETCH_LAZY);


$sql = $connection->prepare("SELECT * FROM habilidades");
$sql->execute();
$skill = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $connection->prepare("SELECT * FROM educacion");
$sql->execute();
$educacion = $sql->fetchAll(PDO::FETCH_ASSOC);


$sql = $connection->prepare("SELECT * FROM portafolio");
$sql->execute();
$portafolio = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/styles.css">

</head>

<body>

    <section>

        <div class="formularios">
            <!-- SOBRE MI -->

            <div class="grupo">
                <h1>Sobre mi</h1>

                <div class="form">
                    <form action="consultas.php" method="POST" enctype="multipart/form-data">
                        <label for="">Descripcion</label>
                        <div class="grupo_input">
                            <textarea name="descripcion"></textarea>
                        </div>

                        <div class="grupo_input">
                            <input type="submit" value="Guardar">
                        </div>
                    </form>
                </div>
            </div>

            <!-- SOBRE MI -->



            <!-- SKILL -->


            <div class="grupo">
                <h1>Habilidades</h1>

                <div class="form">
                    <form action="consultas.php" method="POST" enctype="multipart/form-data">
                        <label for="">Nombre</label>
                        <div class="grupo_input">
                            <input type="text" name="habilidad">
                        </div>

                        <label for="">Porcentaje</label>
                        <div class="grupo_input">
                            <input type="number" name="porcentaje">
                        </div>

                        <div class="grupo_input">
                            <input type="submit" value="Guardar">
                        </div>
                    </form>
                </div>
            </div>

            <!-- SKILL -->



            <!-- educacion -->


            <div class="grupo">
                <h1>Educación</h1>

                <div class="form">
                    <form action="consultas.php" method="POST" enctype="multipart/form-data">
                        <label for="">Fecha</label>
                        <div class="grupo_input">
                            <input type="text" name="fechaEduc">
                        </div>

                        <label for="">Instituto</label>
                        <div class="grupo_input">
                            <input type="text" name="nombreEduc">
                        </div>

                        <label for="">Descripcion</label>
                        <div class="grupo_input">
                            <input type="text" name="descripcionEduc">
                        </div>

                        <div class="grupo_input">
                            <input type="submit" value="Guardar">
                        </div>
                    </form>
                </div>
            </div>

            <!-- educacion -->





            <!-- portafolio -->


            <div class="grupo">
                <h1>Portafolio</h1>

                <div class="form">
                    <form action="consultas.php" method="POST" enctype="multipart/form-data">
                        <label for="">Imagen Portada</label>
                        <div class="grupo_input">
                            <input type="file" name="portada">
                        </div>

                        <label for="">Screenshot</label>
                        <div class="grupo_input">
                            <input type="file" name="screen">
                        </div>

                        <label for="">Titulo Proyecto</label>
                        <div class="grupo_input">
                            <input type="text" name="titulo">
                        </div>

                        <label for="">Descripcion Proyecto</label>
                        <div class="grupo_input">
                            <input type="text" name="descripcionPro">
                        </div>

                        <label for="">Enlace Proyecto</label>
                        <div class="grupo_input">
                            <input type="text" name="enlace">
                        </div>



                        <div class="grupo_input">
                            <input type="submit" value="Guardar">
                        </div>
                    </form>
                </div>
            </div>

            <!-- portafolio -->

        </div>

        <div class="info">

            <div class="crud">
               
            </div>

        </div>
    </section>
</body>

</html>