<?php


class M_peta extends CI_Model{

    function tampil_semua_data(){
        return $this->db->get('lap_futsal');
    }

    function tampil_jenis_lap(){
        return $this->db->get('jenis_lap');
    }

    function detail($where,$table){
        return $this->db->get_where($table,$where);

    }

    function kategori($q = FALSE){
        $this->db->where('jenis_lap',$q);
        return $this->db->get('lap_futsal');
    }


    function data_toko(){
        return $this->db->get('toko_sport');
    }



    function bola(){
        $this->db->where('jenis','lap');
        return $this->db->get('poi');
    }

}