<?php
class Conectar {
    // Variable para guardar la conexión. 
    // "protected" = solo mis hijos pueden tocarla.
    protected $dbh; 

    // Función para conectar.
    // "protected" = solo mis hijos pueden llamarla.
    protected function Conexion() {
        try {
            // Intenta conectar usando PDO (Seguro y Moderno)
            $conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=crud","root","");
            
            return $conectar;
        } catch (Exception $e) {
            // Si falla, mata la página y muestra por qué.
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    // --- AGREGA ESTA FUNCIÓN NUEVA AQUÍ ---
    public function set_names() {
        // Esta línea le dice a la Base de Datos:
        // "Oye, todo lo que te envíe o me envíes, que sea en formato UTF-8"
        // Esto arregla los problemas de tildes y ñ.
        return $this->dbh->query("SET NAMES 'utf8'");
    }
}
?>