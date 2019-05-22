<?php
  require_once ('datosObject.class.inc');
  class Usuario extends DataObject {
    protected $datos = array(
    "username" => "",
    "name" => "",
    "lastname" => "",
    "mail" => "",
    "passwd"=>"");

    public static function obtenerUsuario( $filaInicio, $numeroFilas, $orden ) {
      $conexion = parent::conectar();
      $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM " . TABLA_USUARIO . "
       ORDER BY “ . $orden . “LIMIT :filaInicio, :numeroFilas";
      try {
        $st = $conexion->prepare( $sql );
        $st->bindValue( ":filaInicio", $filaInicio, PDO::PARAM_INT );
        $st->bindValue( ":numeroFilas", $numeroFilas, PDO::PARAM_INT );
        $st->execute();
        $frutas = array();
        foreach ( $st->fetchAll() as $fila ) {
          $usuario[] = new Usuario( $fila );
        }
        $st = $conexion->query( "SELECT found_rows() AS filasTotales" );
        $fila = $st->fetch();
        parent::desconectar( $conexion );
        return array( $frutas, $fila["filasTotales"] );
      } catch ( PDOException $e ) {
        parent::desconectar( $conexion );
        die( "Consulta fallida: " . $e->getMessage() );
      }
    }

    public static function obtenerUsuario( $id ) {
      $conexion = parent::conectar();
      $sql = "SELECT * FROM " . TABLA_USUARIO . " WHERE id = :id";
      try {
        $st = $conexion->prepare( $sql );
        $st->bindValue( ":id", $id, PDO::PARAM_INT );
        $st->execute();
        $fila = $st->fetch();
        parent::desconectar( $conexion );
        if ( $fila ) return new Usuario( $fila );
      } catch ( PDOException $e ) {
        parent::desconectar( $conexion );
        die( "Consulta fallada: " . $e->getMessage() );
      }
    }
    public static function insertarUsuario($username,$name,$lastname,$mail,$passwd)
    { /* Código para insertar una fruta en la tabla. */
      try {
        $conexion = parent::conectar();

        // set the PDO error mode to exception
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(! get_magic_quotes_gpc() ) {
           $username = addslashes ($_POST['username']);
           $name = addslashes ($_POST['name']);
           $lastname = addslashes ($_POST['lastname']);
           $mail = addslashes ($_POST['mail']);
           $passwd = addslashes ($_POST['passwd']);
        } else {
           $username = $_POST['username'];
           $name = $_POST['name'];
           $lastname = $_POST['lastname'];
           $mail = $_POST['mail'];
           $passwd = $_POST['passwd'];
        }


        $sql = "INSERT INTO usuario ".
           "VALUES"."('$username','$name','$lastname','$mail','$passwd')";
        // use exec() because no results are returned
        $conexion->exec($sql);
        echo "New record created successfully";
        }
      catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }

      $conexion = null;

    }
    // Aquí también se meterían métodos que procesaran los campos de alguna forma.
    public function obtenerTipoCadena() {
    return ( $this->datos["tipo"] == "s" ) ? "Seco" : "Carnoso";
    }
  }
?>
