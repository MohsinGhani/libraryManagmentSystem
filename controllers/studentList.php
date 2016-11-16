<?php
class studentList extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->helper(array('html','url','form'));
        $this->load->library('table');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->model('studentInfo');
        $studentData['result'] = $this->studentInfo->studentData();
        $this->load->view('studentList', $studentData);
        $this->load->view('footer');

        // echo '<pre>';
        // echo print_r($studentData['result']);
        // echo '</pre>';
    }
}
?>