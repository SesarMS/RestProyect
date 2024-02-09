# Sistema de Gestión de Categorías y Productos

Este sistema proporciona operaciones básicas para gestionar categorías y productos en una base de datos. Utiliza PHP para el backend, con una estructura de clases que se conecta a la base de datos mediante PDO, y jQuery/AJAX para realizar operaciones en el frontend.

## Estructura del Proyecto

- **`config/`**: Contiene los archivos de configuración y conexión a la base de datos.
- **`controller/`**: Archivo PHP para manejar las solicitudes del frontend.
- **`models/`**: Clase PHP para manejar las operaciones relacionadas con categorías y productos.
- **`js/`**: Contiene archivo JavaScript para interactuar con el backend mediante AJAX.
- **`css/`**: Contiene archivo CSS para aplicar un estilo simple a la vista.
- **`/`**: Archivo index que representan la interfaz de usuario.

## Configuración e Instalación

1. Clona este repositorio en tu servidor web.
2. Importa la base de datos utilizando el script SQL proporcionado (`database.sql`).
3. Configura las credenciales de la base de datos en `config/conexion.php`.
4. Asegúrate de que tu servidor web tenga permisos adecuados para acceder y escribir en los directorios necesarios.

## Operaciones Disponibles

### Obtener Todas las Categorías
- Método: GET
- URL: `controller/CategoriaController.php?op=GetAll`

### Obtener Categoría por ID
- Método: POST
- URL: `controller/CategoriaController.php?op=GetId`
- Datos: `{"cat_id": 1}`

### Insertar Nueva Categoría
- Método: POST
- URL: `controller/CategoriaController.php?op=Insert`
- Datos: `{"cat_nom": "Nueva Categoría", "cat_obs": "Descripción de la nueva categoría"}`

### Actualizar Categoría
- Método: POST
- URL: `controller/CategoriaController.php?op=Update`
- Datos: `{"cat_id": 1, "cat_nom": "Nombre Actualizado", "cat_obs": "Descripción Actualizada"}`

### Eliminar Categoría
- Método: POST
- URL: `controller/CategoriaController.php?op=Remove`
- Datos: `{"cat_id": 1}`

### Agregar Producto a Categoría
- Método: POST
- URL: `controller/CategoriaController.php?op=AddProducto`
- Datos: `{"producto_nombre": "Nuevo Producto", "producto_descripcion": "Descripción del Nuevo Producto", "cat_id": 1}`

### Obtener Productos por Categoría
- Método: POST
- URL: `controller/CategoriaController.php?op=GetProductosPorCategoria`
- Datos: `{"cat_id": 1}`

## Contribuciones
¡Contribuciones son bienvenidas! Por favor, lee [nuestra guía de contribución](CONTRIBUTING.md) para más detalles.

## Licencia
Este proyecto está bajo la Licencia MIT - ver el archivo [LICENSE.md](LICENSE.md) para más detalles.
