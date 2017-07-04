<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maps extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_peta');
        $this->load->helper('url');
    }

    public function index()
    {
        if ($this->input->get('q'))
        {
            $data['lap_futsal'] = $this->m_peta->kategori($this->input->get('q'))->result();

        } else {
            $data['lap_futsal'] = $this->m_peta->tampil_semua_data()->result();

        }

        $data['toko_sport'] = $this->m_peta->data_toko()->result();
        $data['jenis_lap'] = $this->m_peta->tampil_jenis_lap()->result();
        $this->load->view('V_maps',$data);
    }

    public function detail_lap($id_lap)
    {
        $where = array ('id_lap'=>$id_lap);
        $data['toko_sport'] = $this->m_peta->data_toko()->result();
        $data['jenis_lap'] = $this->m_peta->tampil_jenis_lap()->result();
        $data['lap'] = $this->m_peta->tampil_semua_data()->result();
        $data['lap_futsal'] = $this->m_peta->detail($where,'lap_futsal')->result();
        $this->load->view('V_detail_lap',$data);
    }


    public function detail_toko($id_toko){

        $where = array('id_toko'=>$id_toko);
        $data['toko'] = $this->m_peta->data_toko()->result();
        $data['lap_futsal'] = $this->m_peta->tampil_semua_data()->result();
        $data['toko_sport'] = $this->m_peta->detail($where,'toko_sport')->result();
        $this->load->view('V_detail_toko',$data);
    }

}
