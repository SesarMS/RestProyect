<?php
/**
 * Clase para manejar operaciones relacionadas con productos en la base de datos.
 */
class Producto extends Conectar {
    /**
     * Obtiene todos los productos de la base de datos.
     *
     * @return array Un array asociativo con los productos.
     */
    public function get_productos() {
        $conectar = parent::conexion();
        parent::set_name();

        $sql = "SELECT * FROM tm_producto";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Obtiene un producto específico por su ID.
     *
     * @param int $prod_id El ID del producto.
     * @return array Un array asociativo con el producto específico.
     */
    public function get_producto_x_id($prod_id) {
        $conectar = parent::conexion();
        parent::set_name();

        $sql = "SELECT * FROM tm_producto WHERE producto_id=?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $prod_id);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Inserta un nuevo producto en la base de datos.
     *
     * @param string $prod_nom Nombre del nuevo producto.
     * @param string $prod_obs Observaciones del nuevo producto.
     * @return array Un array asociativo con los resultados de la inserción.
     */
    public function insert_producto($prod_nom, $prod_obs, $cat_id) {
        $conectar = parent::conexion();
        parent::set_name();

        $sql = "INSERT INTO tm_producto (producto_nombre, producto_descripcion, cat_id) VALUES (?, ?,?)";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $prod_nom);
        $sql->bindValue(2, $prod_obs);
        $sql->bindValue(3, $cat_id);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Elimina un producto de la base de datos.
     *
     * @param int $prod_id El ID del producto a eliminar.
     * @return array Un array asociativo con los resultados de la eliminación.
     */
    public function remove_producto($prod_id){
        $conectar = parent::conexion();
        parent::set_name();
        $sql = "DELETE FROM tm_producto WHERE producto_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $prod_id);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
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
