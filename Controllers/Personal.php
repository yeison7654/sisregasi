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
    public function savePersonal()
    {
        $nombre = $_POST["txtName"];
        $apellidos = $_POST["txtFullName"];
        $estadocivil = $_POST["cbxEstadoCivil"];
        $fechan = $_POST["txtFechaNacimiento"];
        $tipopersonal = $_POST["cbxTipoPersonal"];
        $celular = $_POST["txtPhone"];
        $codigo = $_POST["txtCodigo"];
        $ocupacion = $_POST["cbxOcupacion"];
        $request = $this->model->insertPersonal(
            $nombre,
            $apellidos,
            $fechan,
            $tipopersonal,
            $celular,
            $codigo,
            $ocupacion
        );
        echo $request;
    }
}
