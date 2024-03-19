<!-- Modal trigger button -->

<!-- Modal Body-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">
                    <i class="fas fa-cart-arrow-down"></i> Vista Carrito
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive-sm">
                    <table class="table table-bordered table-striped table-hover align-middle" id="tableListaCarrito">
                        <thead>
                            <tr>
                                <th scope="col">Imagen</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Aquí se mostrarán los productos del carrito -->
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-around">
                    <h3 id="totalGeneral"></h3>
                    <?php if (!empty($_SESSION['correoCliente'])) { ?>
                        <a href="<?php echo BASE_URL . 'clientes'; ?>" class="btn btn-primary">Procesar Pedido</a>
                    <?php } else { ?>
                        <a href="#" class="btn btn-outline-primary" onclick="abrirModalLogin();">Login</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

   <!-- //LOGIN DIRECTO  -->
   <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="modalLoginLabel">Iniciar Sesión</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body m-3">
                   <form method="get" action="">
                       <div class="text-center">
                           <img src="<?php echo BASE_URL . 'assets/img/android-chrome-512x512.png' ?>" alt="" width="100">
                       </div>
                       <div class="row">
                           <div class="col-12" id="frmLogin">
                               <div class="mb-3 form-group">
                                   <label for="correoCliente"><i class="fas fa-envelope"></i> Correo Electrónico</label>
                                   <input type="text" name="correoLogin" id="correoLogin" class="form-control" placeholder="Correo Electrónico" aria-describedby="CorreoClienteHelp">
                               </div>
                               <div class="mb-3 form-group">
                                   <label for="claveCliente"><i class="fas fa-key"></i> Clave Cliente</label>
                                   <input type="password" name="claveLogin" id="claveLogin" class="form-control" placeholder="Contraseña" aria-describedby="ClaveClienteHelp">
                               </div>
                               <a href="#" id="btnRegistrarse">Todavia no tienes cuenta</a>
                               <div class="float-end">

                                   <button type="button" class="btn btn-primary btn-lg" id="login">Login</button>
                               </div>
                           </div>
                           <!-- Formulario de Registro -->
                           <div class="col-12 d-none" id="frmRegister">
                               <div class="mb-3 form-group">
                                   <label for="nombreRegistro"><i class="fas fa-list"></i> Nombre</label>
                                   <input type="text" name="nombreRegistro" id="nombreRegistro" class="form-control" placeholder="Nombre Completo" aria-describedby="nombreRegistroHelp">
                               </div>
                               <div class="mb-3 form-group">
                                   <label for="correoRegistro"><i class="fas fa-envelope"></i> Correo</label>
                                   <input type="email" name="correoRegistro" id="correoRegistro" class="form-control" placeholder="Correo Electrónico" aria-describedby="correoRegistroHelp">
                               </div>
                               <div class="mb-3 form-group">
                                   <label for="claveRegistro"><i class="fas fa-key"></i> Clave Cliente</label>
                                   <input type="text" name="claveRegistro" id="claveRegistro" class="form-control" placeholder="Contraseña" aria-describedby="claveRegistroHelp">
                               </div>
                               <a href="#" id="btnLogin">¿Ya tienes cuenta?</a>
                               <div class="float-end">
                                   <button type="button" id="registrarse" class="btn btn-primary btn-lg" data-bs-dismiss="modal">Registrarse</button>
                               </div>
                           </div>



                   </form>

               </div>

           </div>
       </div>
   </div>


   <!-- Start Footer -->
   <footer class="bg-dark" id="tempaltemo_footer">
       <div class="container">
           <div class="row">

               <div class="col-md-4 pt-5">
                   <h2 class="h2 text-success border-bottom pb-3 border-light logo">Tecnico Medio</h2>
                   <ul class="list-unstyled text-light footer-link-list">
                       <li>
                           <i class="fas fa-map-marker-alt fa-fw"></i>
                           UAGRM
                       </li>
                       <li>
                           <i class="fa fa-phone fa-fw"></i>
                           <a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                       </li>
                       <li>
                           <i class="fa fa-envelope fa-fw"></i>
                           <a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                       </li>
                   </ul>
               </div>

               <div class="col-md-4 pt-5">
                   <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                   <ul class="list-unstyled text-light footer-link-list">
                       <li><a class="text-decoration-none" href="#">Luxury</a></li>
                       <li><a class="text-decoration-none" href="#">Sport Wear</a></li>
                       <li><a class="text-decoration-none" href="#">Men's Shoes</a></li>
                       <li><a class="text-decoration-none" href="#">Women's Shoes</a></li>
                       <li><a class="text-decoration-none" href="#">Popular Dress</a></li>
                       <li><a class="text-decoration-none" href="#">Gym Accessories</a></li>
                       <li><a class="text-decoration-none" href="#">Sport Shoes</a></li>
                   </ul>
               </div>

               <div class="col-md-4 pt-5">
                   <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                   <ul class="list-unstyled text-light footer-link-list">
                       <li><a class="text-decoration-none" href="#">Home</a></li>
                       <li><a class="text-decoration-none" href="#">About Us</a></li>
                       <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                       <li><a class="text-decoration-none" href="#">FAQs</a></li>
                       <li><a class="text-decoration-none" href="#">Contact</a></li>
                   </ul>
               </div>

           </div>

           <div class="row text-light mb-4">
               <div class="col-12 mb-3">
                   <div class="w-100 my-3 border-top border-light"></div>
               </div>
               <div class="col-auto me-auto">
                   <ul class="list-inline text-left footer-icons">
                       <li class="list-inline-item border border-light rounded-circle text-center">
                           <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                       </li>
                       <li class="list-inline-item border border-light rounded-circle text-center">
                           <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                       </li>
                       <li class="list-inline-item border border-light rounded-circle text-center">
                           <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                       </li>
                       <li class="list-inline-item border border-light rounded-circle text-center">
                           <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                       </li>
                   </ul>
               </div>
               <div class="col-auto">
                   <label class="sr-only" for="subscribeEmail">Email address</label>
                   <div class="input-group mb-2">
                       <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                       <div class="input-group-text btn-success text-light">Subscribe</div>
                   </div>
               </div>
           </div>
       </div>

       <div class="w-100 bg-black py-3">
           <div class="container">
               <div class="row pt-2">
                   <div class="col-12">
                       <p class="text-left text-light">
                           Copyright &copy; 2021 Company Name
                           | Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                       </p>
                   </div>
               </div>assets/
           </div>
       </div>

   </footer>
   <!-- End Footer -->

   <!-- Start Script -->
   <script src="<?php echo BASE_URL . 'assets/js/jquery-1.11.0.min.js'; ?> "></script>
   <script src="<?php echo BASE_URL . 'assets/js/jquery-migrate-1.2.1.min.js'; ?> "></script>
   <script src="<?php echo BASE_URL . 'assets/js/bootstrap.bundle.min.js'; ?> "></script>
   <script src="<?php echo BASE_URL . 'assets/js/templatemo.js'; ?> "></script>
   <script src="<?php echo BASE_URL . 'assets/js/custom.js'; ?> "></script>
   <script src="<?php echo BASE_URL . 'assets/js/sweetalert2.all.min.js'; ?> "></script>
   <script>
       const base_url = '<?php echo BASE_URL; ?>';
   </script>
   <script src="<?php echo BASE_URL . 'assets/js/carrito.js'; ?> "></script>
   <script src="<?php echo BASE_URL . 'assets/js/login.js'; ?> "></script>
   <!-- End Script -->