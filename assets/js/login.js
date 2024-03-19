const btnRegistrarse = document.querySelector("#btnRegistrarse");
const btnLogin = document.querySelector("#btnLogin");
const frmLogin = document.querySelector("#frmLogin");
const frmRegister = document.querySelector("#frmRegister");
const registrarse = document.querySelector("#registrarse");
const login = document.querySelector("#login");

const nombreRegistro = document.querySelector("#nombreRegistro");
const claveRegistro = document.querySelector("#claveRegistro");
const correoRegistro = document.querySelector("#correoRegistro");
const correoLogin = document.querySelector("#correoLogin");
const claveLogin = document.querySelector("#claveLogin");



const modalLogin = new bootstrap.Modal(document.getElementById("modalLogin"));

document.addEventListener("DOMContentLoaded", function () {
  btnRegistrarse.addEventListener("click", function () {
    frmLogin.classList.add("d-none");
    frmRegister.classList.remove("d-none");
  });

  btnLogin.addEventListener("click", function () {
    frmRegister.classList.add("d-none");
    frmLogin.classList.remove("d-none");
  });

  //registro
  registrarse.addEventListener("click", function () {
    if (
      nombreRegistro.value == "" ||
      correoRegistro.value == "" ||
      claveRegistro.value == ""
    ) {
      Swal.fire({
        title: "Aviso",
        text: "TODOS LOS CAMPOS SON REQUERIDOS",
        icon: "warning", // Aquí se especifica el tipo de alerta (success o error)
      });
    } else {
      let formData = new FormData();
      formData.append("nombre", nombreRegistro.value);
      formData.append("clave", claveRegistro.value);
      formData.append("correo", correoRegistro.value);
      const url = base_url + "clientes/registroDirecto";
      const http = new XMLHttpRequest();
      http.open("POST", url, true);
      http.send(formData);
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          const res = JSON.parse(this.responseText);
          Swal.fire({
            title: "Aviso",
            text: res.msg,
            icon: res.icono, // Aquí se especifica el tipo de alerta (success o error)
          });
          if (res.icono == "success") {
            setTimeout(() => {
              enviarCorreo(correoRegistro.value, res.token);
            }, 2000);
          }
        }
      };
    }
  });

  //login Directo
  login.addEventListener("click", function () {
    if (correoLogin.value == "" || claveLogin.value == "") {
      Swal.fire({
        title: "Aviso",
        text: "TODOS LOS CAMPOS SON REQUERIDOS",
        icon: "warning", // Aquí se especifica el tipo de alerta (success o error)
      });
    } else {
      let formData = new FormData();
      formData.append("correoLogin", correoLogin.value);
      formData.append("claveLogin", claveLogin.value);
      const url = base_url + "clientes/loginDirecto";
      const http = new XMLHttpRequest();
      http.open("POST", url, true);
      http.send(formData);
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          Swal.fire({
            title: "Aviso",
            text: res.msg,
            icon: res.icono, // Aquí se especifica el tipo de alerta (success o error)
          });
          if (res.icono == "success") {
           
            setTimeout(() => {
              window.location.reload();
            }, 2000);
          }
        }
      };
    }
  });

  //btnModalLogin
  
});

function enviarCorreo(correo, token) {
  let formData = new FormData();

  formData.append("token", token);
  formData.append("correo", correo);
  const url = base_url + "clientes/enviarCorreo";
  const http = new XMLHttpRequest();
  http.open("POST", url, true);
  http.send(formData);
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      Swal.fire({
        title: "Aviso",
        text: res.msg,
        icon: res.icono, // Aquí se especifica el tipo de alerta (success o error)
      });
      if (res.icono == "success") {
        setTimeout(() => {
          window.location.reload();
        }, 2000);
      }
    }
  };
}

function abrirModalLogin() {
  // Ocultar el modal `myModal` si está definido

  myModal.hide();

  // Mostrar el modal `modalLogin`
  modalLogin.show();
}
