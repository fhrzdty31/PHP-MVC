<?php

class About extends Controller{
    public function index($nama = "Reza", $status = "Pelajar", $umur = 20)
    {
        $data['nama'] = $nama;
        $data['status'] = $status;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'My Page';

        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}