<?php
/**
 * Clase para manejar operaciones relacionadas con categorías en la base de datos.
 */
class Categoria extends Conectar {
    /**
     * Obtiene todas las categorías con estado activo.
     *
     * @return array Un array asociativo con las categorías.
     */
    public function get_categoria() {
        $conectar = parent::conexion();
        parent::set_name();

        $sql = "SELECT * FROM tm_categoria WHERE est=1";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Obtiene una categoría específica por su ID con estado activo.
     *
     * @param int $cat_id El ID de la categoría.
     * @return array Un array asociativo con la categoría específica.
     */
    public function get_categoria_x_id($cat_id) {
        $conectar = parent::conexion();
        parent::set_name();

        $sql = "SELECT * FROM tm_categoria WHERE est=1 AND cat_id=?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_id);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Inserta una nueva categoría con estado activo.
     *
     * @param string $cat_nom Nombre de la nueva categoría.
     * @param string $cat_obs Observaciones de la nueva categoría.
     * @return array Un array asociativo con los resultados de la inserción.
     */
    public function insert_categoria($cat_nom, $cat_obs) {
        $conectar = parent::conexion();
        parent::set_name();

        $sql = "INSERT INTO tm_categoria (CAT_NOM, CAT_OBS, EST) VALUES (?, ?, '1')";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_nom);
        $sql->bindValue(2, $cat_obs);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Actualiza una categoría existente en la base de datos.
     *
     * @param int $cat_id El ID de la categoría a actualizar.
     * @param string $cat_nom El nuevo nombre de la categoría.
     * @param string $cat_obs Las nuevas observaciones de la categoría.
     * @return array Un array asociativo con los resultados de la actualización.
     */
    public function update_categoria($cat_id, $cat_nom, $cat_obs){
        $conectar = parent::conexion();
        parent::set_name();

        $sql = "UPDATE tm_categoria SET cat_nom = ? , cat_obs = ? WHERE cat_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_nom);
        $sql->bindValue(2, $cat_obs);
        $sql->bindValue(3, $cat_id);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Elimina una categoría de la base de datos.
     *
     * @param int $cat_id El ID de la categoría a eliminar.
     * @return array Un array asociativo con los resultados de la eliminación.
     */
    public function remove_categoria($cat_id){
        $conectar = parent::conexion();
        parent::set_name();
        $sql = "DELETE FROM tm_categoria WHERE cat_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_id);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

     /**
     * Añade un nuevo producto a una categoría específica.
     *
     * @param int $cat_id El ID de la categoría a la que se agregará el producto.
     * @param string $producto_nombre Nombre del nuevo producto.
     * @param string $producto_descripcion Descripción del nuevo producto.
     * @return int El número de filas afectadas por la inserción.
     */
    public function agregar_producto_a_categoria($cat_id, $producto_nombre, $producto_descripcion) {
        $conectar = parent::conexion();
        parent::set_name();

        $sql = "INSERT INTO tm_producto ( PRODUCTO_NOMBRE, PRODUCTO_DESCRIPCION,CAT_ID) VALUES (?, ?, ?)";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $producto_nombre);
        $sql->bindValue(2, $producto_descripcion);
        $sql->bindValue(3, $cat_id);
        $sql->execute();
        return $sql->rowCount();
    }

    /**
     * Obtiene todos los productos de una categoría específica.
     *
     * @param int $cat_id El ID de la categoría.
     * @return array Un array asociativo con los productos de la categoría.
     */
    public function obtener_productos_por_categoria($cat_id) {
        $conectar = parent::conexion();
        parent::set_name();

        $sql = "SELECT * FROM tm_producto WHERE CAT_ID = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_id);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

}
