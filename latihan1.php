<?php 
class Latihan1 extends CI_Controller 
{     
    public function index()     
    {   
        echo "<h1>Perkenalkan<h1>";
        echo "Nama Saya Adha Mastito
		  Saya tinggal diJakarta
		  Hobi Saya Bermain game"; 
        //$this->load->view('view_latihan');
    }

    public function penjumlahan($nil1, $nil2)
    {
        $this->load->model('model_latihan1');

        $data['nilai1'] = $nil1;
        $data['nilai2'] = $nil2;
        $data['hasil'] = $this->model_latihan1->jumlah($nil1, $nil2);

        $this->load->view('view_latihan', $data);
    }
 }
