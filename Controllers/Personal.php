<?php
class Personal extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * carga de vistas
     */
    public function newpersonal()
    {
        $data['page_id'] = 1;
        $data['page_tag'] = "Nuevo Personal";
        $data['page_title'] = "Registro de nuevo personal";
        $data['page_name'] = "newpersonal";
        $data['page_content'] = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, quis. Perspiciatis repellat perferendis accusamus, ea natus id omnis, ratione alias quo dolore tempore dicta cum aliquid corrupti enim deserunt voluptas.";
        $data['page_js'] = "Personal/function_newpersonal.js";
        require_once "./Models/OcupacionModel.php";
        $objOcupacion = new OcupacionModel();
        $data['page_ocupacion'] = $objOcupacion->selectOcupacion();
        $objOcupacion = null;
        require_once "./Models/TipopersonalModel.php";
        $objTipopersonal = new TipopersonalModel();
        $data["page_tipopersonal"] = $objTipopersonal->selectTipoPersonal();
        $objTipopersonal = null;
        //cargamos la vista
        $this->views->getView($this, "newpersonal", $data);
    }
    public function listpersonal()
    {
        $data['page_id'] = 1;
        $data['page_tag'] = "Lista Personal";
        $data['page_title'] = "Lista Personal";
        $data['page_name'] = "listperonal";
        $data['page_content'] = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, quis. Perspiciatis repellat perferendis accusamus, ea natus id omnis, ratione alias quo dolore tempore dicta cum aliquid corrupti enim deserunt voluptas.";
        $data['page_js'] = "Personal/function_listpersonal.js";
        $this->views->getView($this, "listpersonal", $data);
    }
    /**
     * Fin de carga de vistas
     */
    /**
     * Funcion de las vistas
     */
    public function savePersonal()
    {
        if (!$_POST) {
            $data = array(
                "title" => "Ocurrio un error inesperado",
                "text" => "No se encontro el metodo POST",
                "status" => false,
                "type" => "alert-danger"
            );
            json($data);
        }
        $nombre = strClean($_POST["txtName"]);
        $apellidos = strClean($_POST["txtFullName"]);
        $estadocivil = strClean($_POST["cbxEstadoCivil"]);
        $fechan = strClean($_POST["txtFechaNacimiento"]);
        $tipopersonal = strClean($_POST["cbxTipoPersonal"]);
        $celular = strClean($_POST["txtPhone"]);
        $codigo = strClean($_POST["txtCodigo"]);
        $ocupacion = strClean($_POST["cbxOcupacion"]);
        //Restrinccion de campos vacios
        if (
            $nombre == "" || $apellidos == ""
            || $estadocivil == "" || $fechan == ""
            || $tipopersonal == "" || $celular == ""
            || $codigo == "" || $ocupacion == ""
        ) {
            $data = array(
                "title" => "Ocurrio un error inesperado",
                "text" => "Complete los campos obligatorios",
                "status" => false,
                "type" => "alert-danger"
            );
            json($data);
        }
        $request = $this->model->insertPersonal(
            $nombre,
            $apellidos,
            $estadocivil,
            $fechan,
            $tipopersonal,
            $celular,
            $codigo,
            $ocupacion
        );
        if ($request > 0) {
            $data = array(
                "title" => "Operaccion satisfactoria",
                "text" => "Se completo el registro de manera correcta",
                "status" => true,
                "type" => "alert-success"
            );
            json($data);
        }
    }
    /**
     * Fin funciones de las vistas
     */
}
