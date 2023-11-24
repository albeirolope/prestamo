
<?php

class DataSource {
    
    private $cadenaConexion;
    private $conexion;
    
    public function __construct(){
        try {
            // Se intenta abrir el archivo de configuración
            $config = fopen(__DIR__ . "/../../conf/config.json", "r");
            if (!$config) {
                die("No se pudo abrir el archivo de configuración");
            }
            
            $content = "";
            
            // Se lee el contenido del archivo de configuración
            while (!feof($config)) {
                $content .= fgets($config);
            }
            
            // Se decodifica el contenido JSON del archivo de configuración
            $json = json_decode($content, true);
            
            // Se construye la cadena de conexión para la base de datos a partir de los valores del archivo de configuración
            $this->cadenaConexion = "mysql:host=" . $json['host'] . ";dbname=" . $json['database'] . ';charset=utf8';
            

            // Se crea una instancia de PDO para establecer la conexión con la base de datos
            $this->conexion = new PDO($this->cadenaConexion,$json['username'],$json['password']);
        } catch (PDOException $ex) {
            echo $ex->getMessage(); // En caso de error, se muestra un mensaje de error
        }
    }

     
    public function ejecutarConsulta($sql = "", $values = array()){
        if ($sql != "") {
            // Se prepara la consulta SQL
            $consulta = $this->conexion->prepare($sql);
            
            // Se ejecuta la consulta con los valores proporcionados
            $consulta->execute($values);
            
            // Se obtiene el resultado de la consulta en forma de array asociativo
            $tablaDatos = $consulta->fetchAll(PDO::FETCH_ASSOC);
            
            // Se cierra la conexión
            $this->conexion = null;
            
            // Se devuelve el resultado de la consulta
            return $tablaDatos;
        } else {
            return 0; // Si la consulta está vacía, se devuelve 0
        }
    }
    
    public function ejecutarActualizacion($sql = "", $values = array()){
        if ($sql != "") {
            // Se prepara la consulta SQL
            $consulta = $this->conexion->prepare($sql);
            
            // Se ejecuta la consulta con los valores proporcionados
            $consulta->execute($values);
            
            // Se obtiene el número de filas afectadas por la consulta
            $numeroFilasAfectadas = $consulta->rowCount();
            
            // Se cierra la conexión
            $this->conexion = null;
            
            // Se devuelve el número de filas afectadas
            return $numeroFilasAfectadas;
        } else {
            return 0; // Si la consulta está vacía, se devuelve 0
        }
    }
}

?>

?>
