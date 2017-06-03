<?php

	include '../incluir/funciones.php';
	include '../incluir/conectar.php';
	
	$producto = get_producto($_GET['id']);

	if (empty($producto))
		{
		$mensaje = "Producto no encontrado.";
		header('Location: error.php?mensaje='.$mensaje);
		exit();
	}
	include '../incluir/borrardellate.php';
	include '../incluir/borrarproducto.php';
	include '../incluir/borrarclasificacion.php';

	if ($borrado) {
		$mensaje = "producto borrado";
	} else {
		$mensaje = "Error al borrar producto";
	}

	?>
	<div class="row">
		<div class="col-sm-12 pull-right" id="trash">
			<div class="btn btn-primary btn-app">
	            <i class="fa fa-trash-o">
	                <h1>Borrar Productos</h1>
	                <?php
	            
	                if (isset($mensaje)) {
	                    echo '<h2>'.$mensaje.'</h2>';
	                }
	                ?>
	                </i>
			</div>
	                
		</div>
	</div>

	<div class="row">
	    <div class="col-sm-12 pull-right" id="trash">
	        <div class="btn btn-primary btn-app">
	<a class="button" href="listar.php">Volver a la listas</a>
	        </div>
	        </div>
	</div>
	     
        

		<script type="text/javascript">
		$(document).ready(function() {
			// Load TimePicker plugin and callback all time and date pickers
			LoadTimePickerScript(AllTimePickers);
			// Create jQuery-UI tabs
			$("#tabs").tabs();
			// Sortable for elements
			$(".sort").sortable({
				items: "div.col-sm-2",
				appendTo: 'div.box-content'
			});
			// Droppable for example of trash
			$(".drop div.col-sm-2").draggable({containment: '.dropbox' });
			$('#trash').droppable({
				drop: function(event, ui) {
					$(ui.draggable).remove();
				}
			});
			var icons = {
				header: "ui-icon-circle-arrow-e",
				activeHeader: "ui-icon-circle-arrow-s"
			};
			// Make accordion feature of jQuery-UI
			$("#accordion").accordion({icons: icons });
			// Create UI spinner
			$("#ui-spinner").spinner();
			// Add Drag-n-Drop to boxes
			WinMove();
		});
		</script>
