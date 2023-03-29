<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {
    public function index()
	{
        // echo('berhasil');
		$this->load->view('v_jobdesk');
	}

    public function staff()
    {
        // echo('berhasil');
        $this->load->view('v_staff');
    }
    public function kdsv()
    {
        // echo('berhasil');
        $this->load->view('v_kdSpv');
    }
    public function kdsrstaff()
    {
        // echo('berhasil');
        $this->load->view('v_kdSr');
    }
    public function sertifikat()
    {
        echo('berhasil');
        // $this->load->view('v_pelatihan');
    }

    public function ser()
    {
        $this->load->view('v_pelatihan');
    }

    public function standar()
    {
        // echo 'berhasil';
        $this->load->view('v_sop');
    }
    public function training()
    {
        // echo 'berhasil';
        $this->load->view('v_train');
    }
    public function penilaian()
    {
        // echo 'berhasil';
        $this->load->view('v_penilaian');
    }
}