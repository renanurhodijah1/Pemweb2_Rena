<?php
class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('MahasiswaModel', 'mhs1');
        $mhs1 = new MahasiswaModel();
        $mhs1->nim = "0110121064";
        $mhs1->nama = "Rena Nurhodijah";
        $mhs1->gender = "P";
        $mhs1->ipk = 3.0;

        $this->load->model('MahasiswaModel', 'mhs2');
        $mhs2 = new MahasiswaModel();
        $mhs2->nim = "0110121133";
        $mhs2->nama = "Annisa Sidiutami";
        $mhs2->gender = "P";
        $mhs2->ipk = 3.8;

        $this->load->model('MahasiswaModel', 'mhs3');
        $mhs3 = new MahasiswaModel();
        $mhs3->nim = "0110226589";
        $mhs3->nama = "Darjat";
        $mhs3->gender = "L";
        $mhs3->ipk = 2.8;

        $data = array(
            'title' => "Mahasiswa",
            'list_mhs' => [$mhs1, $mhs2, $mhs3]
        );


        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('mahasiswa/index');
        $this->load->view('layout/footer');
    }
}
