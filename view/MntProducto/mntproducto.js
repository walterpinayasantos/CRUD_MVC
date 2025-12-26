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
      $("#producto_form")[0].reset();
      $("#modalmantenimiento").modal("hide");
      $("#producto_data").DataTable().ajax.reload();

      swal.fire("Registro!", "El registro correctamente.", "success");
    },
  });
}

function editar(prod_id) {
  $.post("../../controller/productos.php?op=mostrar", { prod_id: prod_id }, function (data) {
    data = JSON.parse(data);
    $("#prod_id").val(data.prod_id);
    $("#prod_nom").val(data.prod_nom);
  });
  $("#mdltitulo").html("Editar Registro");
  $("#modalmantenimiento").modal("show");
}

function eliminar(prod_id) {
  swal
    .fire({
      title: "CRUD",
      text: "Desea Eliminar el Registro?",
      icon: "error",
      showCancelButton: true,
      confirmButtonText: "Si",
      cancelButtonText: "No",
      reverseButtons: true,
    })
    .then((result) => {
      if (result.isConfirmed) {
        $.post("../../controller/productos.php?op=eliminar", { prod_id: prod_id }, function (data) {});

        $("#producto_data").DataTable().ajax.reload();

        swal.fire("Eliminado!", "El registro se elimino correctamente.", "success");
      }
    });
}

$(document).on("click", "#btnnuevo", function () {
  $("#prod_id").val("");
  $("#mdltitulo").html("Nuevo Registro");
  $("#modalmantenimiento").modal("show");
});

init();
