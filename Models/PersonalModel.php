<?php
class PersonalModel extends Mysql
{
    public function __construct()
    {
        parent::__construct();
    }
    public function insertPersonal(
        $nombre,
        $apellidos,
        $estadocivil,
        $fechaN,
        $tipoPer,
        $phone,
        $codigoPer,
        $Ocupacion
    ) {

        $sql = "INSERT INTO `personal` 
        (`nombres`, `apellidos`, `estadocivil` , `fechanacimiento`, 
        `idTipoPersonal`, `celular`, `codigopersonal`, `idOcupacion`) 
        VALUES 
        (?, ?, ?, ?, ?, ?, ?, ?);";

        $arrData = array(
            $nombre,
            $apellidos,
            $estadocivil,
            $fechaN,
            $tipoPer,
            $phone,
            $codigoPer,
            $Ocupacion
        );
        $request = $this->insert($sql, $arrData);
        return $request;
    }
    public function selectPersonal()
    {
        $sql = "SELECT p.idPersonal,p.nombres,p.apellidos,p.estado FROM personal AS p;";
        $request = $this->select_all($sql);
        return $request;
    }
}
