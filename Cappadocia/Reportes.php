<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "Cappadocia";
//Create connection
$conn = mysqli_connect('localhost', 'root', '', 'Cappadocia');
//Check connection
//if ($conn->connect_error) {
//  die("Connection failed: ". $conn->connect_error);
//}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Scrolling Nav - Start Bootstrap Template</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <img src="Media/cappa.jpg" width="140" height="60" alt="logo"/>
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">INVENTARIO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">Sobre nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li>
                            <a class="nav-link js-scroll-trigger" href="http://garc115.0fees.us/Portafolio_P1/WebPage-LoginSignup-Form-master/index3.html" target="_blank">Alta Usuarios</a>
                        </li>
                        <li>
                            <a class="nav-link js-scroll-trigger" href="http://garc115.0fees.us/Portafolio_P1/WebPage-LoginSignup-Form-master/index3.html" target="_blank">Alta/Baja Material</a>
                        </li>
                        <li>
                            <a class="nav-link js-scroll-trigger" href="http://garc115.0fees.us/Portafolio_P1/WebPage-LoginSignup-Form-master/index3.html" target="_blank">Modificacion Material</a>
                        </li>
                        <li>
                            <a class="nav-link js-scroll-trigger" href="http://garc115.0fees.us/Portafolio_P1/WebPage-LoginSignup-Form-master/index3.html" target="_blank">Modificacion Usuarios</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Cappadocia Bufte Minero y Administrativo</h1>
                <p class="lead">Inventario de la empresa</p>
            </div>
        </header>

        <!-- About section-->
        <section id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <body>
                        <h2 style="text-align: center;">LISTA DEL MATERIAL</h2>
                        <table class="table" border="1">
                                <tr>
                                    <td>ID</td>
                                    <td>Nombre</td>
                                    <td>Cantidad</td>
                                </tr>
                                <?php
                                    $sql = "SELECT id, nombre, cantidad from material";
                                    $result = mysqli_query($conexion, $sql);
                                    while ($mostrar=mysqli_fetch_array($result)) {
                                ?>

                                      <tr>
                                            <td><?php echo $mostrar['id'] ?></td>;
                                            <td><?php echo $mostrar['nombre'] ?></td>;
                                            <td><?php echo $mostrar['cantidad'] ?></td>;
                                        </tr>

                            <?php
                                    }
                            ?>
                            </table>
                      </body>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->



        <!-- Contact section-->
        <section id="contact">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Contactanos</h2>
                        <p class="lead">444 812 2572</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
