<?php
class Basededatos
{
    private static $basedatos = null;
    private static $servidor = null;
    private static $usuario = null;
    private static $clave = null;
     
    private static $conexion  = null;
     
    public function __construct() {
        die('No se pudo inicializar la función constructora');
    }
     
    public static function conectarbd()
    {
       // Conexion para toda la aplicación
       if ( null == self::$conexion )
       {
        self::$basedatos = getenv('DB_NAME');
        self::$servidor = getenv('DB_HOST');
        self::$usuario = getenv('DB_USER');
        self::$clave = getenv('DB_PASS');     
        try
        {
          self::$conexion =  new PDO( "mysql:host=".self::$servidor.";"."dbname=".self::$basedatos, self::$usuario, self::$clave); 
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       }
       return self::$conexion;
    }
     
    public static function desconectarbd()
    {
        self::$conexion = null;
    }
}

$con = mysql_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS')) ;
if (!$con)
{
  echo "No se pudo realizar la Conexion con la Base de Datos" . "\n";
  exit ;
}

mysql_select_db(getenv('DB_NAME')) ;

?>