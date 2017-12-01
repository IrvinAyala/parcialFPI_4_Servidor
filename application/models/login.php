<?php

class Login extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function evaluarLogin($id_empleado, $pass_empleado) {
        
        $connection = mysql_connect('localhost', 'root', 'rootadmin');
        mysql_select_db('gimnasio', $connection);
        
        $sql = "SELECT * FROM empleado WHERE pass_empleado = '" . $pass_empleado . "' AND id_empleado = '" . $id_empleado . "'";
        $resultado = mysql_query($sql, $connection);

        $contar = mysql_num_rows($resultado);

        if ($contar == 0) {
            return 0;
        } else if ($contar == 1) {
            return 1;
        } else {
            return null;
        }
    }

}
