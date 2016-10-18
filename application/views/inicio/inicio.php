<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="login-bg">
    <div class="container">


        <div class="row">

            <div class="col-md-5 col-lg-5 col-xs-12 col-sm-6 div-login">

                <div class="form-wrapper">
                    <form class="form-signin wow fadeInUp" action="index.html">
                        <h2 class="form-signin-heading">INICIO DE SESIÓN</h2>
                        <div class="login-wrap">
                            <input type="text" class="form-control" placeholder="Correo Electrónico" autofocus>
                            <input type="password" class="form-control" placeholder="Contraseña">
                            <a data-toggle="modal" href="#myModal" class="pull-right">¿Has Olvidado Tu Contraseña?</a>
                            <br>

                            <br>
                            <button class="btn btn-lg btn-login btn-block" type="submit">Iniciar Sesión</button>

                            <div class="registration" >
                                ¿No tienes Cuenta Aún?
                                <a class="registro" href="registration.html">
                                    Crea una cuenta aquí
                                </a>
                            </div>

                        </div>



                    </form>
                </div>

            </div>



            <div class="col-md-6 col-sm-6  hidden-xs">

                <br>


                <h2 class="titulo text-center">BIENVENIDOS AL PORTAL DE GESTIÓN DE PROYECTOS DE GRADO</h2>

                <img src="<?php echo base_url();?>assets/img/inicio.png" alt="" class="img-responsive" />

            </div>



        </div>  <!--row end-->


    </div>
</div>
