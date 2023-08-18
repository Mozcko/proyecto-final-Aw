<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--icono de favicon-->
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/d6098394de.js" crossorigin="anonymous"></script>

    <!--fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dosis" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans" />

    <!--css-->
    <link rel="stylesheet" href="css/shop.css">

    <!--scripts-->

    <!--script de bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <!--titulo del documento-->
    <title>Document</title>
</head>

<body>
    <section class="container-fluid bg-light p-5">
        <h1>Los datos proporcionados fueron los siguientes</h1>
        <h3>Nombre: <span class = "text-info"><?php echo $_POST['nombre']; ?></span></h3>
        <h3>Apellido: <span class = "text-info"><?php echo $_POST['apellido']; ?></span></h3>
        <h3>Email: <span class = "text-info"><?php echo $_POST['email']; ?></span></h3>
        <h3>Teléfono: <span class = "text-info"><?php echo $_POST['phone']; ?></span></h3>
        <h3>Contraseña: <span class = "text-info"><?php echo $_POST['pwd']; ?></span></h3>
        <h3>Contraseña confirmada: <span class = "text-info"><?php echo $_POST['pwd2']; ?></span></h3>
    </section>
</body>

</html>