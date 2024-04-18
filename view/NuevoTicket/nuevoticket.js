		function init() {
			$("#ticket_form").on("submit", function(e) {
				guardaryeditar(e);
			})
		}
		
		$(document).ready(function() {
			$('#ticket_descrip').summernote({
				height:250
			});
			$.post("../../controller/tienda.php?op=combo", function(data, status) {
				$('#Id_tienda').html(data);
				//console.log(data);
			});
			$.post("../../controller/categoria.php?op=combo", function(data, status) {
				$('#cat_error').html(data);
				//console.log(data);
			});
		});

		function guardaryeditar(e){
			e.preventDefault();
			var formData = new FormData($("#ticket_form")[0]);
			$.ajax({
				url: "../../controller/ticket.php?op=insert",
				type: "POST",
				data: formData,
				contentType: false,
				processData: false,
				success: function(datos){
					console.log(datos);
					$('#ticket_titulo').val('');
					$('#ticket_descrip').summernote('reset');
					swal("Correcto","Registrado Correctamente","success")
				}
			})
		}

		init();
