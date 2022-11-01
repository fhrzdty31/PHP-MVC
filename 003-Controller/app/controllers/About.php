<?php

class About {
    public function index($nama = "Reza", $status = "Pelajar")
    {
        echo "<center><h1>Hallo, nama saya $nama, saya $status</h1></center>";
    }

    public function page()
    {
        echo 'About/page';
    }
}