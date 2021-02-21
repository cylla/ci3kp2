<?php
//Struktur URL CI3 = [base-url]/index.php/class/function

class About extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "Tentang Blog";
        $this->load->view('templates/header', $data);
        $this->load->view('about/index', $data);
        $this->load->view('templates/footer');
    }
}