// Función para cargar todas las categorías mediante AJAX
function cargarCategorias() {
    var divRespuesta = document.getElementById('respuesta');
    $.ajax({
        url: 'controller/CategoriaController.php?op=GetAll',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            // 'data' contiene la respuesta del servidor (categorías)
            console.log(data);
            // Puedes manipular los datos como desees
            divRespuesta.innerText = data.join(" ");
        },
        error: function (error) {
            console.error('Error al cargar categorías:', error);
            divRespuesta.innerText = 'Error al cargar categorías';
        }
    });
}

// Función para obtener una categoría por ID mediante AJAX
function obtenerCategoriaPorId(cat_id) {
    $.ajax({
        url: 'controller/CategoriaController.php?op=GetId',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({ cat_id: cat_id }),
        success: function (data) {
            // 'data' contiene la respuesta del servidor (categoría específica)
            
            console.log(data);

            // Puedes manipular los datos como desees
        },
        error: function (error) {
            console.error('Error al obtener categoría por ID:', error);
        }
    });
}

// Función para agregar una nueva categoría mediante AJAX
function agregarCategoria(cat_nom, cat_obs) {
    $.ajax({
        url: './controller/CategoriaController.php?op=Insert',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({ cat_nom: cat_nom, cat_obs: cat_obs }),
        success: function (response) {
            // 'response' contiene la respuesta del servidor (mensaje de éxito)
            console.log(response);
            // Puedes realizar acciones adicionales después de agregar la categoría
        },
        error: function (error) {
            console.error('Error al agregar categoría:', error);
        }
    });
}

// Función para actualizar una categoría mediante AJAX
function actualizarCategoria(cat_id, cat_nom, cat_obs) {
    $.ajax({
        url: 'controller/CategoriaController.php?op=Update',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({ cat_id: cat_id, cat_nom: cat_nom, cat_obs: cat_obs }),
        success: function (response) {
            // 'response' contiene la respuesta del servidor (mensaje de éxito)
            console.log(response);
            // Puedes realizar acciones adicionales después de actualizar la categoría
        },
        error: function (error) {
            console.error('Error al actualizar categoría:', error);
        }
    });
}

// Función para eliminar una categoría mediante AJAX
function eliminarCategoria(cat_id) {
    $.ajax({
        url: 'controller/CategoriaController.php?op=Remove',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({ cat_id: cat_id }),
        success: function (response) {
            // 'response' contiene la respuesta del servidor (mensaje de éxito)
            console.log(response);
            // Puedes realizar acciones adicionales después de eliminar la categoría
        },
        error: function (error) {
            console.error('Error al eliminar categoría:', error);
        }
    });
}

// Función para agregar un producto a una categoría mediante AJAX
function agregarProductoACategoria(cat_id, producto_nombre, producto_descripcion) {
    $.ajax({
        url: 'controller/CategoriaController.php?op=AddProducto',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({
            cat_id: cat_id,
            producto_nombre: producto_nombre,
            producto_descripcion: producto_descripcion
        }),
        success: function (response) {
            // 'response' contiene la respuesta del servidor (mensaje de éxito)
            console.log(response);
            // Puedes realizar acciones adicionales después de agregar el producto a la categoría
        },
        error: function (error) {
            console.error('Error al agregar producto a la categoría:', error);
        }
    });
}

// Función para obtener productos por categoría mediante AJAX
function obtenerProductosPorCategoria(cat_id) {
    $.ajax({
        url: 'controller/CategoriaController.php?op=GetProductosPorCategoria',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({ cat_id: cat_id }),
        success: function (data) {
            // 'data' contiene la respuesta del servidor (productos de la categoría)
            console.log(data);
            // Puedes manipular los datos como desees
        },
        error: function (error) {
            console.error('Error al obtener productos por categoría:', error);
        }
    });
}
