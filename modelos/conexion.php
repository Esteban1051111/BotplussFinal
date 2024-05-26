<?php
class Cconexion {
    public static function conexionBD() {
        $host = "database-1.c3ewmaeo2sra.us-east-2.rds.amazonaws.com";
        $dbname = "BotplussBD";
        $usuario = "admin";
        $contraseña = "bAsedatoszart3";
        $puerto = "1433";

        try {
            $conn = new PDO("sqlsrv:Server=$host,$puerto;Database=$dbname", $usuario, $contraseña);
            echo "conexión correcta";
        } catch (PDOException $exp) {
            echo "No se pudo conectar: " . $exp->getMessage();
        }
        return $conn;
    }
}
?>
