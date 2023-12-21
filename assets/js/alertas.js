const formularios_ajax = document.querySelectorAll(".FormularioAjax");
console.log(formularios_ajax);
function enviar_formulario_ajax(e) {
  e.preventDefault();
  let data = new FormData(this);
  let method = this.getAttribute("method");
  let action = this.getAttribute("action");
  let tipo = this.getAttribute("data-form");

  let encabezados = new Headers();
  let config = {
    method: method,
    headers: encabezados,
    mode: "cors",
    cache: "no-cache",
    body: data,
  };

  let texto_alerta;
  if (tipo === "save") {
    texto_alerta = "Los datos quedarán guardados en el sistema";
  } else if (tipo === "delete") {
    texto_alerta = "Los datos serán eliminados complementamente del sistema";
  } else if (tipo === "update") {
    texto_alerta = "Los datos seran actualizados en el sistema";
  } else if (tipo === "search") {
    texto_alerta =
      "Se eliminará el termino de busqueda y deberás escribir uno nuevo";
  } else if (tipo === "loans") {
    texto_alerta =
      "Desea remover los datos seleccionados para prestamos o reservaciones";
  } else {
    texto_alerta = "¿Quieres realizar la operacion solicitada?";
  }

  Swal.fire({
    icon: "question", // Cambiado de "type" a "icon"
    title: texto_alerta, // Variable en lugar de cadena
    text: "¿Estás seguro?", // Variable en lugar de cadena
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    confirmButtonText: "Aceptar",
    cancelButtonColor: "#d33", // Corregido el nombre de la propiedad
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.value) {
      fetch(action, config)
        .then((respuesta) => respuesta.json())
        .then((respuesta) => {
          return alertas_ajax(respuesta);
        });
    }
  });
}
formularios_ajax.forEach((formularios) => {
  formularios.addEventListener("submit", enviar_formulario_ajax);
});

function alertas_ajax(alerta) {
  if (alerta.Alerta === "simple") {
    Swal.fire({
      type: alerta.Titulo,
      title: alerta.Texto,
      text: alerta.Tipo,
      confirmButtonText: "Aceptar",
    });
  } else if (alerta.Alerta === "recargar") {
    Swal.fire({
      type: alerta.Titulo,
      title: alerta.Texto,
      text: alerta.Tipo,
      confirmButtonText: "Aceptar",
    }).then((result) => {
      if (result.value) {
        location.reload();
      }
    });
  } else if (alerta.Alerta === "limpiar") {
    Swal.fire({
      type: alerta.Titulo,
      title: alerta.Texto,
      text: alerta.Tipo,
      confirmButtonText: "Aceptar",
    }).then((result) => {
      if (result.value) {
        document.querySelector(".FormularioAjax").reset();
      }
    });
  } else if (alerta.Alerta === "redireccionar") {
    window.location.href = alerta.URL;
  }
}
