<?php include("consultas.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonio</title>

    <link rel="stylesheet" href="../css/styles.css">

</head>

<body class="dark">

<section class="contact-section section" id="contact">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 data-heading="Hola!">Dejame tu testimonio como cliente</h2>
                </div>
            </div>




            <div class="row">
                <div class="contact-form">
                    <form name="contact" method="post" action="consultas.php" enctype="multipart/form-data">

                        <div class="row">
                            <div class="w-50">
                                <div class="input-group outer-shadow hover-in-shadow">
                                    <input required name="nombreTest" type="text" placeholder="Nombre" class="input-control">
                                </div>

                                <div class="input-group outer-shadow hover-in-shadow">
                                    <input required name="emailTest" type="text" placeholder="Email" class="input-control">
                                </div>

                                <label for="">Sube tu foto de perfil</label>
                                <div class="input-group outer-shadow hover-in-shadow">
                                    <input name="fotoTest" type="file"class="input-control">
                                </div>
                            </div>

                            <div class="w-50">
                                <div class="input-group outer-shadow hover-in-shadow">
                                    <textarea required name="message" class="input-control" placeholder="Deja tu testimonio aqui..."></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="submit-btn">
                                <button type="submit" class="btn-1 outer-shadow hover-in-shadow">Enviar </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </section>
  
</body>

</html>