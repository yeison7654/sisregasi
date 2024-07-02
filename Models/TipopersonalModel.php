<?php
class TipopersonalModel extends Mysql
{
    public function __construct()
    {
        parent::__construct();
    }
    public function selectTipoPersonal()
    {
        $sql = "SELECT tp.idTipoPersonal,tp.tipopersonal FROM tipopersonal AS tp WHERE tp.estado='Activo';";
        $request = $this->select_all($sql);
        return $request;
    }
}
