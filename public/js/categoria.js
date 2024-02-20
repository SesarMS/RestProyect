// Función para cargar todas las categorías
function cargarCategorias() {
    $.ajax({
        url: 'controller/CategoriaController.php?op=GetAll',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            $('#respuesta').text('');
            $('#respuesta').text(JSON.stringify(data, null, 2));
            autoajustarTamañoTextarea();
        },
        error: function (error) {
            console.error('Error al cargar categorías:', error);
            $('#respuesta').text('Error al cargar categorías.');
            
        }
    });
}

// Función para obtener una categoría por ID
function obtenerCategoriaPorId(cat_id) {
    $.ajax({
        url: 'controller/CategoriaController.php?op=GetId',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({ cat_id: cat_id }),
        success: function (data) {
            console.log(data);
            $('#respuesta').text('');
            $('#respuesta').text(JSON.stringify(data, null, 2));
            autoajustarTamañoTextarea();
        },
        error: function (error) {
            console.error('Error al obtener categoría por ID:', error);
            $('#respuesta').text('');
            $('#respuesta').text('Error al cargar categoría.');
            autoajustarTamañoTextarea();
        }
    });
}

// Función para agregar una nueva categoría
function agregarCategoria(cat_nom, cat_obs) {
    $.ajax({
        url: './controller/CategoriaController.php?op=Insert',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({ cat_nom: cat_nom, cat_obs: cat_obs }),
        success: function (response) {
            console.log(response);
            $('#respuesta').text('');
            $('#respuesta').text('Agregado correctamente');
            setTimeout(function() {
                location.reload();
            }, 1000);
            
        },
        error: function (error) {
            console.error('Error al agregar categoría:', error);
            $('#respuesta').text('');
            $('#respuesta').text('Error al agregar categoría');
        }
    });
}

// Función para actualizar una categoría
function actualizarCategoria(cat_id, cat_nom, cat_obs) {
    $.ajax({
        url: 'controller/CategoriaController.php?op=Update',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({ cat_id: cat_id, cat_nom: cat_nom, cat_obs: cat_obs }),
        success: function (response) {
            console.log(response);
            $('#respuesta').text('');
            $('#respuesta').text('Actualizado correctamente.');
            setTimeout(function() {
                location.reload();
            }, 1000);
            
        },
        error: function (error) {
            console.error('Error al actualizar categoría:', error);
            $('#respuesta').text('');
            $('#respuesta').text('Error al actualizar.');
        }
    });
}

// Función para eliminar una categoría
function eliminarCategoria(cat_id) {
    $.ajax({
        url: 'controller/CategoriaController.php?op=Remove',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({ cat_id: cat_id }),
        success: function (response) {
            console.log(response);            
            $('#respuesta').text('');
            $('#respuesta').text('Eliminado correctamente.');
            setTimeout(function() {
                location.reload();
            }, 1000);
            
        },
        error: function (error) {
            console.error('Error al eliminar categoría:', error);
            $('#respuesta').text('');
            $('#respuesta').text('Error al eliminar.');
        }
    });
}