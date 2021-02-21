<?php
//Struktur URL CI3 = [base-url]/index.php/class/function

class Home extends CI_Controller
{

    public function index($nama = 'Dul')
    {
        $data['judul'] = "Beranda";
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
class HelperHtml extends CI_Controller
{

    public function index()
    {

        $this->load->view('show');
    }
}
