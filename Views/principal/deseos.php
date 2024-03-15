<?php include_once 'Views/template-principal/header.php';

?>



<!-- Start Content -->
<div class="container py-5">
    <div class="alert alert-info d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg>
        <div>
            <?php echo ucfirst($data['title']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
           <div class="card text-start">
           
            
            <div
                class="table-responsive table-borderer table-striped table-hover align-middle" id = "tableListaDeseo"
            >
                <table
                    class="table table-borderer table-striped table-hover align-middle" id = "tableListaDeseo" style="width: 100%"
                >
                    <thead>
                        <tr>
                            <th scope="col">IMAGEN</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col"> </th>
                           
                        </tr>
                    </thead>
                  <tbody>
                 
                  </tbody>
                </table>
            </div>
            
           </div>
           
        </div>
    </div>
    <!-- End Content -->
    </div>




    <!-- Start Script -->
    <?php include_once 'Views/template-principal/footer.php'; ?>
    </body>
<script src= "<?php echo BASE_URL . 'assets/js/modulos/listaDeseo.js' ?>"> </script>

    </html>
    

    