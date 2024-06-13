<?php
defined('BASEPATH') or exit('No direct script access allowed');

class curd_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model("curd_model");
        if (json_decode(file_get_contents('php://input'), true != '')) {
            $_POST = json_decode(file_get_contents('php://input'), true);
        }
    }

    public function Add()
    {
        $result = $this->curd_model->Add();
        echo json_encode($result, JSON_NUMERIC_CHECK);
    }

    public function name()
    {
        $result = $this->curd_model->name();
        echo json_encode($result, JSON_NUMERIC_CHECK);

    }


    
    public function avq()
    {
        $this->load->view('curd_view');

    }
}
