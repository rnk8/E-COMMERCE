
<?php
class ClientesModel extends Query
{

    public function __construct()
    {
        parent::__construct();
    }
    public function registroDirecto($nombre, $correo, $clave,$token)
    {
        $sql = "INSERT INTO cliente(nombre, correo, clave, token) VALUES (?,?,?,?)";
        $datos = array($nombre, $correo, $clave, $token);
        $data = $this -> save($sql, $datos);

        if ($data > 0) {
            $res = $data;
        } else {

            $res = 0;
        }
        return $res;
    }
    public function getToken ($token)
    {
        $sql = "SELECT * FROM cliente WHERE token = '$token'";
        return $this->select($sql);
    }

    public function actualizarVerify ($id )
    {
        $sql = "UPDATE cliente SET token=?, verify=? WHERE id=?";
        $datos = array(null, 1, $id);
        $data = $this -> save($sql, $datos);

        if ($data == 1) {
            $res = $data;
        } else {

            $res = 0;
        }
        return $res;
    }

public function getVerificar ($correo)
{
    $sql = "SELECT * FROM cliente WHERE correo = '$correo'";
    return $this->select($sql);
}
}
?>