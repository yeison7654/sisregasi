<?php
class Personal extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function newpersonal()
    {
        $data['page_id'] = 1;
        $data['page_tag'] = "Nuevo Personal";
        $data['page_title'] = "Registro de nuevo personal";
        $data['page_name'] = "newpersonal";
        $data['page_content'] = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, quis. Perspiciatis repellat perferendis accusamus, ea natus id omnis, ratione alias quo dolore tempore dicta cum aliquid corrupti enim deserunt voluptas.";
        $data['page_js'] = "Personal/function_newpersonal.js";
        $this->views->getView($this, "newpersonal", $data);
    }
    public function savePersonal()
    {
        dep($_POST);
    }
}
