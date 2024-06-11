<?php
class Dashboard extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function dashboard()
    {
        $data['page_id'] = 2;
        $data['page_tag'] = "Dashboard";
        $data['page_title'] = "Panel de control";
        $data['page_name'] = "dashboard";
        $data['page_content'] = "Esta pagina es la pagina inicial del sistema";
        $this->views->getView($this, "dashboard", $data);
    }
}
