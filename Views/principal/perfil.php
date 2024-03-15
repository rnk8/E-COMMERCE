<?php include_once 'Views/template-principal/header.php';

?>



<!-- Start Content -->
<div class="container py-5">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-8">
        <div class="card shadow-lg">
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover align-middle" id="tableListaProductos">
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

                    </tbody>
                </table>
            </div>
            <div class="card-footer text-end">
                <h3 id="totalProducto"></h3>
            </div>
        </div>
        </div>
        
        <div class="col-md-4">
        <div class="card shadow-lg">
            
            <div class="card-body text-center">
            <img class="img-thumbnail rounded-circle" src="<?php echo BASE_URL . 'assets/img/android-chrome-512x512.png'; ?>" alt="Title" width="150" />
            <hr>
            <p>
               Nombre
               <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       Paypal
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Otros Metodos
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        
      </div>
    </div>
  </div>
 
</div>
            </p>
            
        </div>
        </div>
        </div>
  

    </div>

    <!-- End Content -->
</div>




<!-- Start Script -->
<?php include_once 'Views/template-principal/footer.php'; ?>

<script src="<?php echo BASE_URL . 'assets/js/clientes.js'?>"> </script>
</body>

</html>