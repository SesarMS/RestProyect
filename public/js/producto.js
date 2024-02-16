
// Función para agregar un producto a una categoría
function agregarProducto(producto_nombre, producto_descripcion,cat_id) {
    $.ajax({
        url: 'controller/ProductoController.php?op=Insert',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({
            
            producto_nombre: producto_nombre,
            producto_descripcion: producto_descripcion,
            cat_id: cat_id
        }),
        success: function (response) {
            console.log(response);            
            $('#respuesta').text('');
            $('#respuesta').text('Agregado producto a categoría correctamente.');
        },
        error: function (error) {
            console.error('Error al agregar producto a la categoría:', error);
        }
    });
}

// Función para obtener productos por categoría
function obtenerProductosPorCategoria(cat_id) {
    $.ajax({
        url: 'controller/ProductoController.php?op=GetProductosPorCategoria',
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
            console.error('Error al obtener productos por categoría:', error);
            $('#respuesta').text('');
            $('#respuesta').text('Error al obtener productos.');
        }
    });
}

