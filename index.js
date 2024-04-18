// function init() {}
// $(document).ready(function () {

// });
// $(document).on("click", "#btnsoporte", function () {
//   if ($("#rol_id").val() == '1') {
//     $("#lbltitulo").html("Acceso Soporte");
//     $("#btnsoporte").html("Acceso Usuario");
//     $("#rol_id").val(2);
//   } else {
//     $("#lbltitulo").html("Acceso Usuario");
//     $("#btnsoporte").html("Acceso Soporte");
//     $("#rol_id").val(1);
//   }
// });
// init();
/* 
Esta es la función init. Actualmente está vacía.
*/
function init() {}

// Este código se ejecuta cuando el documento está listo.
$(document).ready(function () {

});

/* 
Este código se ejecuta cuando se hace clic en el elemento con el id 'btnsoporte'.
Cambia el contenido de los elementos con los ids 'lbltitulo' y 'btnsoporte',
y cambia el valor del campo de entrada con el id 'rol_id' basado en su valor actual.
*/
$(document).on("click", "#btnsoporte", function () {
  if ($("#Id_rol").val() == '1') {
    $("#lbltitulo").html("Acceso Soporte");
    $("#btnsoporte").html("Acceso Usuario");
    $("#Id_rol").val(2);
  } else {
    $("#lbltitulo").html("Acceso Usuario");
    $("#btnsoporte").html("Acceso Soporte");
    $("#Id_rol").val(1);
  }
});

// Llama a la función init.
init();
