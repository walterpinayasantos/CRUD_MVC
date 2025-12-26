var tabla;

function init() {
  $("#producto_form").on("submit", function (e) {
    guardaryeditar(e);
  });
}

$(document).ready(function () {
  // Usamos la variable 'tabla' que declaraste arriba del archivo
  tabla = $("#producto_data").DataTable({
    // --- Configuraciones Modernas (v2.0+) ---
    processing: true, // Antes aProcessing
    serverSide: true, // Antes aServerSide
    destroy: true, // Antes bDestroy
    responsive: true,
    info: true, // Antes bInfo
    pageLength: 10, // Antes iDisplayLength
    order: [[0, "asc"]], // Ordenar por la primera columna ascendente

    // --- Botones ---
    dom: "Bfrtip",
    buttons: ["copyHtml5", "excelHtml5", "csvHtml5", "pdf"],

    // --- Carga de datos ---
    ajax: {
      url: "../../controller/productos.php?op=listar",
      type: "get",
      dataType: "json",
      error: function (e) {
        console.log("Error en el servidor: ", e.responseText);
      },
    },

    // --- Traducción (v2.0 Style) ---
    language: {
      processing: "Procesando...",
      lengthMenu: "Mostrar _MENU_ registros",
      zeroRecords: "No se encontraron resultados",
      emptyTable: "Ningún dato disponible en esta tabla",
      info: "Mostrando un total de _TOTAL_ registros",
      infoEmpty: "Mostrando un total de 0 registros",
      infoFiltered: "(filtrado de un total de _MAX_ registros)",
      search: "Buscar:",
      loadingRecords: "Cargando...",
      paginate: {
        first: "Primero",
        last: "Último",
        next: "Siguiente",
        previous: "Anterior",
      },
      aria: {
        sortAscending: ": Activar para ordenar de manera ascendente",
        sortDescending: ": Activar para ordenar de manera descendente",
      },
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
