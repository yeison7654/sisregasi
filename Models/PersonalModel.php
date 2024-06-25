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
         $fechaN,
         $tipoPer,
         $phone,
         $codigoPer,
         $Ocupacion
    ) {
        
        $sql = "INSERT INTO `personal` 
        (`nombres`, `apellidos` , `fechanacimiento`, 
        `idTipoPersonal`, `celular`, `codigopersonal`, `idOcupacion`) 
        VALUES 
        (?, ?, ?, ?, ?, ?, ?);";
       
        $arrData = array(
            $nombre,
            $apellidos,
            $fechaN,
            $tipoPer,
            $phone,
            $codigoPer,
            $Ocupacion
        );
        $request = $this->insert($sql, $arrData);
        return $request;
    }
}
