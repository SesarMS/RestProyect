<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./public/js/index.js"></script>
    <script src="./public/js/categoria.js"></script>
    <script src="./public/js/producto.js"></script>
    <link rel="stylesheet" href="./public/css/index.css">
</head>
<body>
    <h1>Panel de control</h1>
<fieldset>
    <legend> Carga todas las categorías</legend>
    <button onclick="cargarCategorias()">Cargar Categorías</button>
</fieldset>

<fieldset>
    <legend> Obtener categorías por id</legend>
    <input type="text" id="catIdInput" placeholder="ID de Categoría">
    <button onclick="obtenerCategoriaPorId($('#catIdInput').val())">Obtener Categoría por ID</button>
</fieldset>


<fieldset>
    <legend> Agregar una nueva categoría</legend>
    <input type="text" id="catNomInput" placeholder="Nombre">
    <input type="text" id="catObsInput" placeholder="Observaciones">
    <button onclick="agregarCategoria($('#catNomInput').val(), $('#catObsInput').val())">Agregar Categoría</button>
</fieldset>
<fieldset>
    <legend> Actualizar una categoría</legend>
    <select id="selectorCategorias1"></select>
    <input type="text" id="updateCatNomInput" placeholder="Nuevo Nombre">
    <input type="text" id="updateCatObsInput" placeholder="Nuevas Observaciones">
    <button onclick="actualizarCategoria($('#selectorCategorias1').val(), $('#updateCatNomInput').val(), $('#updateCatObsInput').val())">Actualizar Categoría</button>
</fieldset>
<fieldset>
    <legend> Eliminar una categoría</legend>
    <input type="text" id="deleteCatIdInput" placeholder="ID a Eliminar">
    <button onclick="eliminarCategoria($('#deleteCatIdInput').val())">Eliminar Categoría</button>
</fieldset>
<fieldset>
    <legend> Agregar un producto a una categoría</legend>
    <select id="selectorCategorias2"></select>
    <input type="text" id="addProdNameInput" placeholder="Nombre Producto">
    <input type="text" id="addProdDescInput" placeholder="Descripción">
    <button onclick="agregarProducto($('#addProdNameInput').val(), $('#addProdDescInput').val(),$('#selectorCategorias').val())">Agregar Producto a Categoría</button>
</fieldset>
<fieldset>
    <legend> Obtener productos por categoría</legend>
    <select id="selectorCategorias3"></select>
    <button onclick="obtenerProductosPorCategoria($('#selectorCategorias2').val())">Obtener Productos por Categoría</button>
</fieldset>
<fieldset>
    <legend> Respuesta </legend>
    <textarea id="respuesta"></textarea>
</fieldset>
</body>
</html>

    
</body>
</html>
