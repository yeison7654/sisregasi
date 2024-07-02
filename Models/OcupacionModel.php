<?php
class OcupacionModel extends Mysql
{
    public function __construct()
    {
        parent::__construct();
    }
    public function selectOcupacion()
    {
        $sql = "SELECT o.idOcupacion,o.ocupacion FROM ocupacion AS o WHERE o.estado='Activo';";
        $request = $this->select_all($sql);
        return $request;
    }
}
