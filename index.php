<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./public/js/index.js"></script>
</head>
<body>

<!-- Sección para cargar todas las categorías -->
<button onclick="cargarCategorias()">Cargar Categorías</button>
<br>
<!-- Sección para obtener una categoría por ID -->
<input type="text" id="catIdInput" placeholder="ID de Categoría">
<button onclick="obtenerCategoriaPorId($('#catIdInput').val())">Obtener Categoría por ID</button>
<br>
<!-- Sección para agregar una nueva categoría -->
<input type="text" id="catNomInput" placeholder="Nombre de Categoría">
<input type="text" id="catObsInput" placeholder="Observaciones de Categoría">
<button onclick="agregarCategoria($('#catNomInput').val(), $('#catObsInput').val())">Agregar Categoría</button>
<br>
<!-- Sección para actualizar una categoría -->
<input type="text" id="updateCatIdInput" placeholder="ID de Categoría a Actualizar">
<input type="text" id="updateCatNomInput" placeholder="Nuevo Nombre de Categoría">
<input type="text" id="updateCatObsInput" placeholder="Nuevas Observaciones de Categoría">
<button onclick="actualizarCategoria($('#updateCatIdInput').val(), $('#updateCatNomInput').val(), $('#updateCatObsInput').val())">Actualizar Categoría</button>
<br>
<!-- Sección para eliminar una categoría -->
<input type="text" id="deleteCatIdInput" placeholder="ID de Categoría a Eliminar">
<button onclick="eliminarCategoria($('#deleteCatIdInput').val())">Eliminar Categoría</button>
<br>
<!-- Sección para agregar un producto a una categoría -->
<input type="text" id="addProdCatIdInput" placeholder="ID de Categoría">
<input type="text" id="addProdNameInput" placeholder="Nombre del Producto">
<input type="text" id="addProdDescInput" placeholder="Descripción del Producto">
<button onclick="agregarProductoACategoria($('#addProdCatIdInput').val(), $('#addProdNameInput').val(), $('#addProdDescInput').val())">Agregar Producto a Categoría</button>
<br>
<!-- Sección para obtener productos por categoría -->
<input type="text" id="getProdCatIdInput" placeholder="ID de Categoría para Obtener Productos">
<button onclick="obtenerProductosPorCategoria($('#getProdCatIdInput').val())">Obtener Productos por Categoría</button>
<br>
<div id="respuesta"></div>
</body>
</html>

    
</body>
</html>
