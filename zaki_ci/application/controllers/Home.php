<?php

class Home extends CI_Controller
{
    public function index($nama = 'zaki')
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function about()
    {   // About page view
        $data['judul'] = 'Halaman About';
        $this->load->view('templates/header', $data);
        $this->load->view('about');
        $this->load->view('templates/footer');
    }
}
