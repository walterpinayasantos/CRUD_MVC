var tabla;

function init() {
  $("#producto_form").on("submit", function (e) {
    guardaryeditar(e);
  });
}

$(document).ready(function () {
  // Usamos la variable 'tabla' que declaraste arriba del archivo
  var tabla = $("#producto_data").DataTable({
    // --- Configuración Core ---
    processing: true,
    serverSide: false,
    responsive: true,
    destroy: true,
    pageLength: 10,
    order: [[0, "asc"]],

    // --- Botones y Diseño ---
    dom: "Bfrtip",
    buttons: ["copyHtml5", "excelHtml5", "csvHtml5", "pdf"],

    // --- Carga de datos ---
    ajax: {
      url: "../../controller/productos.php?op=listar",
      type: "get",
      dataType: "json",
      error: (e) => console.error("Error servidor: ", e.responseText),
    },

    // --- Traducción Simplificada ---
    language: {
      url: "https://cdn.datatables.net/plug-ins/2.1.8/i18n/es-ES.json",
    },
  });
});

function guardaryeditar(e) {
  e.preventDefault();
  var formData = new FormData($("#producto_form")[0]);

  $.ajax({
    url: "../../controller/productos.php?op=guardaryeditar",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function (datos) {
      // 1. Limpiamos el formulario y el ID oculto
      $("#producto_form")[0].reset();
      $("#prod_id").val(""); // Muy importante para que el próximo registro no se cruce

      // 2. Cerramos el modal
      $("#modalmantenimiento").modal("hide");

      // 3. Recargamos la tabla (false para mantener la página actual)
      $("#producto_data").DataTable().ajax.reload(null, false);

      // 4. Usamos el Toast elegante que definimos antes
      Toast.fire({
        icon: "success",
        title: "Registro procesado correctamente",
      });
    },
    error: function (e) {
      // En caso de error, lanzamos un Toast de error
      Toast.fire({
        icon: "error",
        title: "Error al guardar los datos",
      });
      console.log(e.responseText);
    },
  });
}

function editar(prod_id) {
  $("#mdltitulo").html("Editar Registro");
  // Usamos .post indicando que esperamos un 'json' al final
  $.post(
    "../../controller/productos.php?op=mostrar",
    { prod_id: prod_id },
    function (data) {
      $("#prod_id").val(data.prod_id);
      $("#prod_nombre").val(data.prod_nombre);
      $("#prod_desc").val(data.prod_desc);
      $("#modalmantenimiento").modal("show");
    },
    "json"
  ); // <--- Este parámetro asegura que jQuery parsee el JSON automáticamente
}

// 1. Definimos la configuración global de los Toasts (Notificaciones de esquina)
const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 2000,
  timerProgressBar: true,
  didOpen: (toast) => {
    // Pausa el tiempo si el usuario pone el mouse encima
    toast.onmouseenter = Swal.stopTimer;
    // Reanuda si quita el mouse
    toast.onmouseleave = Swal.resumeTimer;
  },
});

// 2. Función eliminar con confirmación central y éxito tipo Toast
function eliminar(prod_id) {
  Swal.fire({
    title: "¿Está seguro?",
    text: "¡No podrá revertir esta acción!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sí, eliminarlo",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      // Petición AJAX al controlador
      $.post("../../controller/productos.php?op=eliminar", { prod_id: prod_id }, function (data) {
        // Recarga la tabla manteniendo la posición de la página
        $("#producto_data").DataTable().ajax.reload(null, false);

        // Notificación profesional de esquina
        Toast.fire({
          icon: "success",
          title: "Producto eliminado correctamente",
        });
      });
    }
  });
}
/*
function eliminar(prod_id) {
  Swal.fire({
    title: "¿Está seguro?",
    text: "¡No podrá revertir esta acción!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sí",
    cancelButtonText: "No",
  }).then((result) => {
    if (result.isConfirmed) {
      // Enviamos la petición al controlador
      $.post("../../controller/productos.php?op=eliminar", { prod_id: prod_id }, function (data) {
        // Recargamos la tabla DataTable una vez confirmada la eliminación en BD
        $("#producto_data").DataTable().ajax.reload();
        // Mostramos el mensaje de éxito
        // --- Alerta con auto-cierre ---
        Swal.fire({
          title: "¡Eliminado!",
          text: "El registro ha sido eliminado correctamente.",
          icon: "success",
          showConfirmButton: false, // Oculta el botón OK
          timer: 1000, // Tiempo en milisegundos (2 segundos)
          timerProgressBar: true, // Opcional: muestra una barra de tiempo
        });
      });
    }
  });
}
*/
$(document).on("click", "#btnnuevo", function () {
  $("#prod_id").val("");
  $("#mdltitulo").html("Nuevo Registro");
  $("#modalmantenimiento").modal("show");
});

init();
