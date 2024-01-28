<?php

/**
 * Clase Conectar: Maneja la conexión a la base de datos utilizando PDO.
 */
class Conectar {
    
    /**
     * @var PDO $dbh La instancia de PDO utilizada para la conexión a la base de datos.
     */
    protected $dbh;
    
    /**
     * Establece la conexión a la base de datos utilizando PDO.
     *
     * @return PDO La instancia de PDO para la conexión a la base de datos.
     * @throws Exception Si hay un error durante la conexión.
     */
    protected function conexion() {
        try {
            $conectar = $this->dbh = new PDO('mysql:host=localhost;dbname=cesarrest', 'root', '');
            return $conectar;
        } catch (Exception $e) {
            /**
             * En caso de un error durante la conexión, imprime un mensaje de error y termina la ejecución.
             * @throws Exception Mensaje de error detallado.
             */
            print '!!!Error!!!' . $e->getMessage() . '</br>';
            die();
        }
    }

    /**
     * Establece el juego de caracteres de la conexión a utf8.
     *
     * @return PDOStatement|false Retorna el resultado de la consulta "SET NAMES 'utf8'" o false en caso de error.
     */
    public function set_name() {
        return $this->dbh->query("SET NAMES 'utf8'");
    }
}