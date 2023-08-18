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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/d6098394de.js" crossorigin="anonymous"></script>

    <!--fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dosis" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans" />

    <!--css-->
    <link rel="stylesheet" href="css/shop.css">
    <link rel="stylesheet" href="css/style.css">

    <!--scripts-->

    <!--script de ordenes-->
    <script type="text/javascript" src="js/orders.js"></script>

    <!--script de bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!--titulo del documento-->
    <title>Document</title>
</head>

<body>
    <header class="navbar navbar-dark sticky-top fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <nav class="navbar navbar-expand-lg bg-black fixed-top text-start">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="img/logo full(fixed).png" height="28" alt="Brand">
            </a>
            <button type="button" class="navbar-toggler text-light bg-light" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse menu" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item ">Inicio</a>
                    <a href="shop.html" class="nav-item ">Comprar</a>
                </div>
                <form class="d-flex navbar-nav ms-auto" role="search">
                    <input
                      class="form-control me-2"
                      type="search"
                      placeholder="Search"
                      aria-label="Search"
                    />
                    <button class="btn btn-outline-secondary" type="submit">
                      Buscar
                    </button>
                </form>
            </div>
        </div>
      </nav>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">

                        <!--Inicio-->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <i class="fa-solid fa-house"></i>
                                Inicio
                            </a>
                        </li>

                        <!--Pedidos-->
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-cart-shopping"></i>
                                pedidos
                            </a>
                        </li>

                        <!--Perfil-->
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-user"></i>
                                Perfil
                            </a>
                        </li>

                        <!--Salir-->
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                Salir
                            </a>
                        </li>

                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Bienvenido <span id="mail"><?php echo $_POST["email"]; ?> </span></h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">compartir</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar align-text-bottom" aria-hidden="true">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            Esta semana
                        </button>
                    </div>
                </div>

                <h2>Historial de pedidos</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col"># Pedido</th>
                                <th scope="col">Fecha de compra</th>
                                <th scope="col">Total</th>
                                <th scope="col">Estatus de pedido</th>
                                <th scope="col">Detalle</th>
                            </tr>
                        </thead>
                        <tbody id="tabla">

                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>

</html>