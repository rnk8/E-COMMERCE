const tableLista = document.querySelector("#tableListaProductos tbody");
document.addEventListener("DOMContentLoaded", function () {
   if (tableLista) {
    getListaProductos();
   }
  
 
});

function getListaProductos () {
    const url = base_url + 'principal/listaProductos';
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(JSON.stringify(listaCarrito));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        const res = JSON.parse(this.responseText);
        let html = '';
        res.productos.forEach(producto => {
          html += `  <tbody><tr class="">
                      <td>  <img class="img-thumbnail rounded-circle" src=" ${(producto.imagen)}" alt="" width="100">  </td>
                      <td>${(producto.nombre)}</td>
                      <td>${(res.moneda +  ' ' + producto.precio)}</td>
                      <td>${(producto.cantidad)}</td>
                      <td> ${(producto.subTotal)}</td>
                     
                      </tr></tbody>`;
        });
        
        tableLista.innerHTML = html;
        document.querySelector('#totalProducto').textContent = 'TOTAL A PAGAR: '+res.moneda +  ' ' + res.total;
      
  
      }
    }
  }