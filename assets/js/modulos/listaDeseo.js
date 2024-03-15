const tableLista = document.querySelector("#tableListaDeseo tbody");
document.addEventListener("DOMContentLoaded", function () {
  getListaDeseo();
});

function getListaDeseo() {
  const url = base_url + "principal/listaProductos";
  const http = new XMLHttpRequest();
  http.open("POST", url, true);
  http.send(JSON.stringify(listaDeseo));
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      let html = '  ';
      res.productos.forEach(producto => {
        html += `  <tbody><tr class="">
                    <td>  <img class="img-thumbnail rounded-circle" src=" ${(producto.imagen)}" alt="" width="100">  </td>
                    <td>${(producto.nombre)}</td>
                    <td>${(res.moneda +  ' ' + producto.precio)}</td>
                    <td>${(producto.cantidad)}</td>
                    <td><button class="btn btn-danger btnEliminarDeseo" type="button" prod="${(producto.id)}"> <i class="fas fa-trash"></i></button>
                    <button class="btn btn-info btnAddCart" type="button" prod="${(producto.id)}"> <i class="fas fa-cart-plus"></i></button>
                    </td>
                    </tr></tbody>`;
      });
      
      tableLista.innerHTML = html;
      btnEliminarDeseo();
      btnAgregarProducto();

    }
  }
}
  function btnEliminarDeseo() {
    let listaEliminar = document.querySelectorAll('.btnEliminarDeseo');
    for (let i = 0; i < listaEliminar.length; i++) {
      listaEliminar[i].addEventListener('click', function(){
        let idProducto =listaEliminar[i].getAttribute('prod');
        eliminarListaDeseo(idProducto);

      })
    }  
  }
  function eliminarListaDeseo(idProducto){
    console.log(listaDeseo)
      for (let i = 0; i < listaDeseo.length; i++){
      if (listaDeseo[i]['idProducto'] == idProducto) {
        listaDeseo.splice(i, 1);
      }
    }
    localStorage.setItem('listaDeseo', JSON.stringify(listaDeseo));
    getListaDeseo();
    cantidadDeseo();
    Swal.fire({
      title: "Aviso",
      text: "Producto Eliminado de tu Lista de Deseos",
      icon: "success"
    })
  }

  //agregar productos desde la lista de deseos
  function btnAgregarProducto() {
    let listaAgregar = document.querySelectorAll('.btnAddCart');
    for (let i = 0; i < listaAgregar.length; i++) {
      listaAgregar[i].addEventListener('click', function(){
        let idProducto =listaAgregar[i].getAttribute('prod');
        agregarCarrito(idProducto, 1, true);

      })
    }  
  }